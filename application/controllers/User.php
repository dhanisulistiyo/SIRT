<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('MUser');
        $this->load->model('M_letter');
        $this->load->model('Organisasi_model');
        $this->load->helper('form');
        $this->load->model('M_kategori_forum');
    }

    public function index() {
        if ($this->session->userdata('login_user') == true) {

            $data['query'] = $this->MUser->getProfilUser();
            $data['user']=$this->session->userdata('user');
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;

            $this->load->view('user/layout/header', $data);
            $this->load->view('user/profil', $data);
            $this->load->view('user/layout/footer');

        }
        else
            redirect('appspublic/login');
    }
    public function createthread(){
        if ($this->session->userdata('login_user') == true) {
            if ($_POST){

                $this->M_kategori_forum->insertthread();
                redirect('user/forum');
            }
            $data['query'] = $this->MUser->getProfilUser();
            $data['user']=$this->session->userdata('user');
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;
           $this->load->view('public/create_thread_user',$data);
        }
        else
            redirect('appspublic/login');
    }
    public function keterangan(){
        if ($this->session->userdata('login_user') == true) {
            if ($_POST) {
                $nama=$this->MUser->cek_nama($this->session->userdata('user')['nik']);
                $hitungdes=count($this->input->post('keperluan'));
                $hitungalasan=count($this->input->post('bersangkutan'));
                if(empty($this->input->post('bersangkutan')[count($this->input->post('bersangkutan'))-1])) {
                    unset($this->input->post('bersangkutan')[count($this->input->post('bersangkutan'))-1]);
                }
                if ($hitungdes>1) {
                    $deskripsi = implode(" / ", $this->input->post('keperluan'));
                }
                else{
                    $deskripsi=$this->input->post('keperluan')[0];
                }
                if ($hitungalasan>2){
                    $alasan = implode(' / ', $this->input->post('bersangkutan'));
                }
                else{
                    $alasan=$this->input->post('bersangkutan')[0];
                }
                date_default_timezone_set("Asia/Jakarta");
                $date = date('d-m-Y');
                $bulan=date('m');
                $tahun=date('Y');
                if ($bulan=='01')
                    $romawi='I';
                elseif ($bulan=='02')
                    $romawi='II';
                elseif ($bulan=='03')
                    $romawi='III';
                elseif ($bulan=='04')
                    $romawi='IV';
                elseif ($bulan=='05')
                    $romawi='V';
                elseif ($bulan=='06')
                    $romawi='VI';
                elseif ($bulan=='07')
                    $romawi='VII';
                elseif ($bulan=='08')
                    $romawi='VIII';
                elseif ($bulan=='09')
                    $romawi='IX';
                elseif ($bulan=='10')
                    $romawi='X';
                elseif ($bulan=='11')
                    $romawi='XI';
                else
                    $romawi='XII';
                $this->M_letter->insertket($deskripsi);
                $result=$this->M_letter->getLastRow();
                $content = $this->MUser->getProfilUser();
                $this->load->library('fpdf/fpdf');
                $pdf = new FPDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();
                $pdf->SetFont('Times', 'U', 16);
                $pdf->Ln(20);
                $pdf->Cell(0, 10, 'SURAT KETERANGAN ', 0, 1, 'C');
                $pdf->SetFont('Times', '', 8);
                $pdf->Cell(0, 10, 'Nomor: SK / '.$result->id_surat.' / '.$romawi.' / '.$tahun, 0, 1, 'C');
                $pdf->SetFont('Times', '', 10);
                $pdf->Cell(70, 10, 'Perihal', 0, 0);$pdf->Cell(0, 10, ': ' . $deskripsi, 0, 1);
                $pdf->SetFont('Times', '', 10);
                $pdf->Cell(0, 10, 'Kami atas nama pengurus RT 002 RW 037 dengan ini menerangkan bahwa: ', 0, 1);
                foreach ($content as $asd)
				$var_tgl_lahir = DateTime::createFromFormat('Y-m-d', $asd-> tgl_lahir);
				$tgl_lahir = $var_tgl_lahir->format('d-m-Y');
                $pdf->Cell(70, 10, 'Nama Lengkap', 0, 0);$pdf->Cell(0, 10, ': ' . $asd->nama, 0, 1);
                $pdf->Cell(70, 10, 'Jenis Kelamin', 0, 0);$pdf->Cell(0, 10, ': ' . $asd->jenis_kelamin, 0, 1);
                $pdf->Cell(70, 10, 'Tempat & Tanggal Lahir', 0, 0);$pdf->Cell(0, 10, ': ' . $asd->tempat_lahir . ' / ' . $tgl_lahir, 0, 1);
                $pdf->Cell(70, 10, 'Agama', 0, 0);$pdf->Cell(70, 10, ': ' . $asd->agama, 0, 1);
                $pdf->Cell(70, 10, 'Status Perkawinan', 0,0);$pdf->Cell(0, 10, ': ' . $asd->status, 0, 1);
                $pdf->Cell(70, 10, 'Pekerjaan', 0,0);$pdf->Cell(0, 10, ': ' . $asd->tempat_lahir . '/' . $asd->pekerjaan, 0, 1);
                $pdf->Cell(70, 10, 'Nomor & Tanggal KTP / Identitas Diri', 0,0);$pdf->Cell(0, 10, ': ' . $asd->nik, 0, 1);
                $pdf->Cell(70, 10, 'Alamat', 0, 0);
                $pdf->Cell(70, 10, ': ' . $asd->alamat . ' RT. ' . $asd->rt . ' RW. ' . $asd->rw , 0, 1);
                $pdf->Cell(70, 10, '', 0, 0);$pdf->Cell(70, 10, ' Kelurahan . ' . $asd->desa . ' Kec. ' . $asd->kecamatan . '- ' . $asd->provinsi, 0, 1);
                $pdf->Cell(70, 10, 'Adalah benar bahwa yang bersangkutan', 0, 0);$pdf->Cell(1, 10, ': ', 0, 0);
                $pdf->MultiCell(70, 10, $alasan, 0, 1);
                $pdf->Cell(0, 10, 'Demikian Surat Keterangan ini kami buat untuk dapat dipergunakan sebagai mana mestinya', 0, 1);
                $pdf->Ln(5);
                $pdf->Cell(80, 10, 'Mengetahui,', 0, 0, 'R');
                $pdf->Cell(80, 10, 'Wanasari, ' . $date, 0, 1, 'R');
                $pdf->Cell(50, 10, 'Ketua RW 037, ', 0, 0, 'R');
                $pdf->Cell(50, 10, 'Ketua RT 002, ', 0, 0, 'R');
                $pdf->Cell(50, 10, 'Pemohon, ', 0, 1, 'R');
                $pdf->Cell(55, 0, 'Gramapuri Tamansari, ', 0, 0, 'R');
                $pdf->Cell(53, 0, 'Gramapuri Tamansari', 0, 1, 'R');
                $pdf->SetFont('Times', 'U', 10);
                $RT=$this->Organisasi_model->getRT();
                $RW=$this->Organisasi_model->getRW();
                $pdf->Cell(53, 40, '('.strtoupper($RW->nama).')', 0, 0, 'R');
                $pdf->Cell(55, 40, '('.strtoupper($RT->nama).')', 0, 0, 'R');
                $pdf->Cell(60, 40, '(' . strtoupper($nama->nama) . ')', 0, 0, 'C');
                $pdf->Output();
            }
            else
                redirect('user/suratketerangan');
        }
        else
            redirect('appspublic/login');
    }
    public function pengantar(){
        if ($this->session->userdata('login_user') == true) {
            if ($this->input->post('keperluan')!=null) {
                $nama=$this->MUser->cek_nama($this->session->userdata('user')['nik']);
                date_default_timezone_set("Asia/Jakarta");
                $date = date('d-m-Y');
                $bulan=date('m');
                $tahun=date('Y');
                if ($bulan=='01')
                    $romawi='I';
                elseif ($bulan=='02')
                    $romawi='II';
                elseif ($bulan=='03')
                    $romawi='III';
                elseif ($bulan=='04')
                    $romawi='IV';
                elseif ($bulan=='05')
                    $romawi='V';
                elseif ($bulan=='06')
                    $romawi='VI';
                elseif ($bulan=='07')
                    $romawi='VII';
                elseif ($bulan=='08')
                    $romawi='VIII';
                elseif ($bulan=='09')
                    $romawi='IX';
                elseif ($bulan=='10')
                    $romawi='X';
                elseif ($bulan=='11')
                    $romawi='XI';
                else
                    $romawi='XII';
                $this->M_letter->insert();
                $result=$this->M_letter->getLastRow();
                $content = $this->MUser->getProfilUser();
                $this->load->library('fpdf/fpdf');
                $pdf = new FPDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();
                $pdf->SetFont('Times', 'U', 16);
                $pdf->Ln(20);
                $pdf->Cell(0, 10, 'SURAT PENGANTAR ', 0, 1, 'C');
                $pdf->SetFont('Times', '', 8);
                $pdf->Cell(0, 10, 'Nomor: SP / '.$result->id_surat.' / '.$romawi.' / '.$tahun, 0, 1, 'C');
                $pdf->SetFont('Times', '', 12);
                $pdf->Cell(0, 10, 'Kami atas nama pengurus RT 002 RW 037 dengan ini memberikan Surat Pengantar kepada: ', 0, 1);
                foreach ($content as $asd)
                    $pdf->Cell(70, 10, 'Nama Lengkap', 0, 0);$pdf->Cell(0, 10,' : '.$asd->nama, 0, 1);
                $pdf->Cell(70, 10, 'Jenis Kelamin', 0, 0);$pdf->Cell(0, 10,' : '.$asd->jenis_kelamin, 0, 1);
                $pdf->Cell(70, 10, 'Tempat & Tanggal Lahir', 0, 0);$pdf->Cell(0, 10,' : '.$asd->tempat_lahir.' / '.$asd->tgl_lahir, 0, 1);
                $pdf->Cell(70, 10, 'Agama', 0, 0);$pdf->Cell(0, 10,' : '.$asd->agama, 0, 1);
                $pdf->Cell(70, 10, 'Status Perkawinan', 0, 0);$pdf->Cell(0, 10,' : '.$asd->status, 0, 1);
                $pdf->Cell(70, 10, 'Pekerjaan', 0, 0);$pdf->Cell(0, 10,' : '.$asd->pekerjaan, 0, 1);
                $pdf->Cell(70, 10, 'Nomor & Tanggal KTP / Identitas Diri', 0, 0);$pdf->Cell(0, 10,' : '.$asd->nik, 0, 1);
                $pdf->Cell(70, 10, 'Alamat', 0, 0);
                $pdf->Cell(70, 10, ': ' . $asd->alamat . ' RT. ' . $asd->rt . ' RW. ' . $asd->rw , 0, 1);
                $pdf->Cell(70, 10, '', 0, 0);$pdf->Cell(70, 10, ' Kelurahan . ' . $asd->desa . ' Kec. ' . $asd->kecamatan . '- ' . $asd->provinsi, 0, 1);
                $pdf->Cell(70, 10, 'Maksud dan keperluan', 0, 0);
                $pdf->MultiCell(100, 10, ': '.$this->input->post('keperluan'), 0);
                $pdf->Cell(0, 10, 'Demikian Surat Pengantar ini kami buat untuk dapat dipergunakan sebagai mana mestinya', 0, 1);
                $pdf->Ln(10);
                $pdf->Cell(80, 10, 'Mengetahui,', 0, 0, 'R');
                $pdf->Cell(80, 10, 'Wanasari, ' . $date, 0, 1, 'R');
                $pdf->Cell(50, 10, 'Ketua RW 037, ', 0, 0, 'R');
                $pdf->Cell(50, 10, 'Ketua RT 002, ', 0, 0, 'R');
                $pdf->Cell(50, 10, 'Pemohon, ', 0, 1, 'R');
                $pdf->Cell(55, 0, 'Gramapuri Tamansari, ', 0, 0, 'R');
                $pdf->Cell(53, 0, 'Gramapuri Tamansari', 0, 1, 'R');
                $pdf->SetFont('Times', 'U', 10);
                $RT=$this->Organisasi_model->getRT();
                $RW=$this->Organisasi_model->getRW();
                $pdf->Cell(53, 50, '('.strtoupper($RW->nama).')', 0, 0, 'R');
                $pdf->Cell(55, 50, '('.strtoupper($RT->nama).')', 0, 0, 'R');
                $pdf->Cell(60, 50, '(' . strtoupper($nama->nama) . ')', 0, 0, 'C');
                $pdf->Output();
            }
            else
                redirect('user/layanan');
        }
        else
            redirect('appspublic/login');

    }
    public function layanan()
    {
        if ($this->session->userdata('login_user') == true) {
            if ($this->input->post('submitSK')) {
                $this->load->library('Pdf');
                $this->load->model('MUser');
                $data['user']=$this->session->userdata('user');
                $data['query'] = $this->MUser->getProfilUser();
                $data['keperluan']=$this->input->post('keperluan');
                $this->load->view('user/sKeterangan', $data);
            }
            $this->load->model('MUser');
            $data['query'] = $this->MUser->getProfilUser();
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;
            $data['user']=$this->session->userdata('user');
            $this->load->view('public/trans_surat',$data);
        }
        else
            redirect('appspublic/login');
    }
    public function getDetail(){
        if ($this->session->userdata('login_user') == true) {
            $this->load->model('MUser');
            $data['query'] = $this->MUser->getProfilUser();
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;
            $data['user']=$this->session->userdata('user');
            $this->load->view('public/profile',$data);
        }
        else
            redirect('appspublic/login');
    }
    public function editprofil(){
        if ($this->session->userdata('login_user') == true) {
            $this->load->model('MUser');
            $data['query'] = $this->MUser->getProfilUser();
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;
            $data['user']=$this->session->userdata('user');
            $this->load->view('public/edit_profile',$data);
        }
        else
            redirect('appspublic/login');
    }
    public function updateprofil(){
        if ($this->session->userdata('login_user') == true) {
            if ($_POST) {
                $this->load->model('MUser');
                $this->MUser->ubahprofil();
                $data['user'] = $this->session->userdata('user');
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Ubah Profil</div></div>");
                redirect('user/getdetail');
            }
            else
                redirect('user/editprofil');
        }
        else
            redirect('appspublic/login');
    }
    public function updatepassword(){
        if ($this->session->userdata('login_user') == true) {
            if ($this->input->post('baru')==$this->input->post('baru2')) {
                $result=$this->MUser->cekpass();
                if ($result->password==$this->input->post('lama')){
                    $this->MUser->ubahpass();
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Passwod Berhasil diubah</div></div>");
                    redirect('user/changepassword');
                }
                else{
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Passwod lama salah</div></div>");
                    redirect('user/changepassword');
                }
            }
            else {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Passwod baru dan konfirmasi tidak sama</div></div>");
                redirect('user/changepassword');
            }
        }
        else
            redirect('appspublic/login');
    }
    public function changepassword(){
        if ($this->session->userdata('login_user') == true) {
            $data['user']=$this->session->userdata('user');
            $this->load->view('public/v_edit_pass',$data);
        }
        else
            redirect('appspublic/login');
    }

    public function suratketerangan()
    {
        if ($this->session->userdata('login_user') == true) {
            if ($this->input->post('submitSK')) {
                $this->load->library('Pdf');
                $this->load->model('MUser');
                $data['user']=$this->session->userdata('user');
                $data['query'] = $this->MUser->getProfilUser();
                $data['keperluan']=$this->input->post('keperluan');
                $this->load->view('user/sKeterangan', $data);
            }
            $this->load->model('MUser');
            $data['query'] = $this->MUser->getProfilUser();
            $title = 'User || Sistem Informasi RT';
            $data['title'] = $title;
            $data['user']=$this->session->userdata('user');
            $this->load->view('public/trans_ket',$data);
        }
        else
            redirect('appspublic/login');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    function ubahprofil(){
        if ($this->session->userdata('login_user') == true) {
            $data['data_user']=$this->MUser->getProfilUser();
            $data['user']=$this->session->userdata('user');
            $this->load->view('user/edit_profil',$data);
        }
        else
            redirect('appspublic/login');
    }
    function forum($id=null){
        if ($this->session->userdata('login_user') == true) {
            if ($id==null){
                $this->load->model('M_kategori_forum');
                $data['data_user'] = $this->MUser->getProfilUser();
                $data['user'] = $this->session->userdata('user');
                $data['kategori']=$this->M_kategori_forum->index()->result();
                $this->load->view('public/forum_category',$data);
            }
            else {
                $data['data_user'] = $this->MUser->getProfilUser();
                $data['user'] = $this->session->userdata('user');
                $this->load->view('public/cor_forum', $data);
            }
        }
        else
            redirect('appspublic/login');
    }
    function generalforum(){
        if ($this->session->userdata('login_user') == true) {
                $data['data_user'] = $this->MUser->getProfilUser();
                $data['user'] = $this->session->userdata('user');
                $this->load->view('public/cor_forum', $data);
        }
        else
            redirect('appspublic/login');
    }
    function chat()
    {
        if ($this->session->userdata('login_user') == true) {
            $data['data_user'] = $this->MUser->getProfilUser();
            $data['user'] = $this->session->userdata('user');
            $this->load->view('user/forum', $data);
        } else
            redirect('appspublic/login');

    }
    public function kirim_chat($id)
    {
        $user=$this->session->userdata('user')['nik'];
        $pesan=$this->input->post("pesan");
        $kategory=$id;
        mysql_query("insert into chat (user,pesan,chat_category_id) VALUES ('$user','$pesan','$kategory')");
        redirect ("user/ambil_pesan",$id);
    }
    public function kirim_chat_general()
    {
        $user=$this->session->userdata('user')['nik'];
        $pesan=$this->input->post("pesan");
        mysql_query("insert into general_chat (user,pesan) VALUES ('$user','$pesan')");
        redirect ("user/ambil_pesan_general");
    }

    public function ambil_pesan()
    {
        $query=$this->db->select('*')->from('chat')->where('chat_category_id',$this->uri->segment(3))
            ->join('tbl_ktp','tbl_ktp.nik=chat.user')->get();

        foreach($query->result() as $isi){
            $datetime1 = new DateTime($isi->waktu);
            $datetime2 = new DateTime('now');
            $interval = $datetime1->diff($datetime2);
            if ($interval->format('%R%a')>=5){
                $this->db->where('id_chat',$isi->id_chat);
                $this->db->delete('chat');
            }
            if ($isi->user!=$this->session->userdata('user')['nik']) {
                echo "<div class='alert-danger row'><b>$isi->nama</b> : $isi->pesan (<i>$isi->waktu</i>)</div><br>";

            }
            else{
                echo "<div class='alert-success row pull-right'><b>$isi->nama</b> : $isi->pesan (<i>$isi->waktu</i>)</div><br>";
            }
        }
    }
    public function ambil_pesan_general()
    {
        $query=$this->db->select('*')->from('general_chat')
            ->join('tbl_ktp','tbl_ktp.nik=general_chat.user')->get();

        foreach($query->result() as $isi){
            $datetime1 = new DateTime($isi->waktu);
            $datetime2 = new DateTime('now');
            $interval = $datetime1->diff($datetime2);
            if ($interval->format('%R%a')>=5){
                $this->db->where('id_chat',$isi->id_chat);
                $this->db->delete('chat');
            }
            if ($isi->user!=$this->session->userdata('user')['nik']) {
                echo "<div class='alert-danger row'><b>$isi->nama</b> : $isi->pesan (<i>$isi->waktu</i>)</div><br>";

            }
            else{
                echo "<div class='alert-success row pull-right'><b>$isi->nama</b> : $isi->pesan (<i>$isi->waktu</i>)</div><br>";
            }
        }
    }
    public function ronda(){
        if ($this->session->userdata('login_user') == true) {
            $data['data_user'] = $this->MUser->getProfilUser();
            $data['user'] = $this->session->userdata('user');
            $this->load->model('MSchedule');
            $data['ronda']=$this->MSchedule->rondalist();
            $this->load->view('public/cor_ronda', $data);
        } else
            redirect('appspublic/login');
    }


}
