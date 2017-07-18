<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','file'));
        $this->load->model('MAdmin');
        $this->load->model('MUser');
        $this->load->model('MSchedule');
        $this->load->model('M_kontak');
        $this->load->model('M_letter');
        $this->load->model('MRonda');
        $this->load->model('News_model');
        $this->load->model('Message_model');
        $this->load->model('Organisasi_model');
        $this->load->model('M_kategori_forum');
    }
    public function pesan($tulisan){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">$tulisan</div></div>");
    }
    public function login(){
        if ($this->session->userdata('login_admin') == true) {
            redirect('backoffice');
        }
        else {
            $this->load->view('admin/v_login');
            if($_POST){
                $result=$this->MAdmin->validasi_admin($_POST);
                if(!empty($result)){
                    $data_admin=["username" =>$result->username,
                        "password"=>$result->password,
                    ];
                    $this->session->set_userdata('login_admin',true);
                    $this->session->set_userdata('admin',$data_admin);
                    redirect('backoffice');
                }

            }
        }
    }
    public function index(){
        if ($this->session->userdata('login_admin') == true) {
            redirect('backoffice/usermanagement');
        }
        else {
            redirect('backoffice/login');
        }

    }
    function usermanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['validuser']=$this->MUser->validUser();
            $this->load->view('admin/v_user_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }

    }
    function addthread(){
        if ($this->session->userdata('login_admin') == true) {
            if ($_POST){
                $this->M_kategori_forum->insertthreadadmin();
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Menambah Thread</div></div>");
                redirect('backoffice/threadmanagement');
            }
            $contents['admin'] = $this->session->userdata('admin');
            $contents['validuser']=$this->MUser->validUser();
            $this->load->view('admin/v_add_thread',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function organisasimanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['organisasi']=$this->Organisasi_model->tampil();
            $this->load->view('admin/v_org_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }

    }
    function editorganisasi(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['RT']=$this->Organisasi_model->getRT();
            $contents['RW']=$this->Organisasi_model->getRW();
            $contents['bendahara']=$this->Organisasi_model->getBendahara();
            $contents['sekertaris']=$this->Organisasi_model->getSekertaris();
            $contents['keamanan']=$this->Organisasi_model->getKeamanan();
            $contents['kerohanian']=$this->Organisasi_model->getKerohanian();
            $contents['humas']=$this->Organisasi_model->getHumas();
            $contents['koperasi']=$this->Organisasi_model->getKoperasi();
            $this->load->view('admin/v_edit_org',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function ubahstruktur($id){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $this->Organisasi_model->ubahstruktur($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil ubah struktur</div></div>");
            redirect('backoffice/editorg/'.$id);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function editorg($id){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['data']=$this->Organisasi_model->getStruktur($id)->result();
          //  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil ubah struktur</div></div>");
            $this->load->view('admin/v_edit_struktur',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function ubahorganisasi(){
        if ($this->session->userdata('login_admin') == true) {
            $this->Organisasi_model->ubah();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil ubah struktur</div></div>");
            redirect('backoffice/organisasimanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    function addadmin(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $this->load->view('admin/v_add_admin',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function addschedule($id){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['ronda']=$this->MRonda->edit($id);
            $contents['user']=$this->MUser->validuser_schedule();
            $this->load->view('admin/v_add_schedule',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function addronda(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $this->load->view('admin/v_add_ronda',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function editronda($id){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['ronda']=$this->MRonda->edit($id);
            $this->load->view('admin/v_edit_ronda',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function editpass(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $this->load->view('admin/v_edit_pass_admin',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function hapusallronda(){
        if ($this->session->userdata('login_admin') == true) {
           $this->MSchedule->deleteall();
            $this->pesan('Berhasil menghapus jadwal ronda');
            redirect('backoffice/rondamanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    function ubahpass(){
        if ($this->session->userdata('login_admin') == true) {
            if($this->input->post('baru')==$this->input->post('baru2')){
                $result=$this->MAdmin->cekadmin();
                if($this->input->post('lama')==$result->password){
                    $this->MAdmin->ubahpassadmin();
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Ubah Password</div></div>");
                    redirect('backoffice/editpass');
                }
                else{
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Password lama salah</div></div>");
                    redirect('backoffice/editpass');
                }
            }
            else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Password dan Password Konfirmasi tidak sama</div></div>");
                redirect('backoffice/editpass');
            }
        }
        else {
            redirect('backoffice/login');
        }
    }
    function insertadmin(){
        $this->MAdmin->add();
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil tambah admin</div></div>");
        redirect('backoffice/addadmin');
    }
    function insertschedule($id){
        $this->MSchedule->add($id);
        $data=$this->input->post('warga');
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil tambah admin</div></div>");
        redirect('backoffice/rondamanagement');
    }
    function insertronda(){
        $this->MRonda->add();
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil tambah sesi ronda</div></div>");
        redirect('backoffice/addronda');
    }
    function getAdmin(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['validuser']=$this->MUser->nonvalidUser();
            $this->load->view('admin/v_nonuser_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function ubahadmin(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['profil']=$this->MAdmin->getAdmin();
            $this->load->view('admin/v_edit_admin',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function usernonvalid(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['validuser']=$this->MUser->nonvalidUser();
            $this->load->view('admin/v_nonuser_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }

    function lettermanagement(){
        if ($this->session->userdata('login_admin') == true) {
        $contents['admin'] = $this->session->userdata('admin');
        $contents['surat']=$this->M_letter->index();
        $this->load->view('admin/v_letter_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function makevalid($nik){
        $this->MUser->makevalid($nik);
        redirect('backoffice');
    }
    function hapususer($nik){
        $this->MUser->deleteUser($nik);
        redirect('backoffice/usermanagement');
    }
    function hapususernonvalid($nik){
        $this->MUser->deleteUser($nik);
        redirect('backoffice/usernonvalid');
    }
    function editkontak(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['kontak']=$this->M_kontak->index();
            $this->load->view('admin/v_edit_kontak',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }

    function hapusgambar($nama){
        if ($this->session->userdata('login_admin') == true) {
            unlink("./asset/upload/".$nama);
            $this->MAdmin->hapusgambar($nama);
            redirect('backoffice/uploadmanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function data_user()
    {
        if ($this->session->userdata('login_admin') == true) {
            $this->load->model('MAdmin');
            $data['query'] =$this->MAdmin->bacadataUser();

            $title = 'Admin || Sistem Informasi RT';
            $data['title'] = $title;

            $this->load->view('admin/layout/header',$data);
            $this->load->view('admin/data_user',$data);
            $this->load->view('admin/layout/footer');
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function adminmanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['adm']=$this->MAdmin->adminlist();
            $this->load->view('admin/v_admin_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function rondamanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['adm']=$this->MAdmin->adminlist();
            $contents['ronda']=$this->MRonda->index();
            $this->load->view('admin/v_ronda_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function threadmanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['adm']=$this->MAdmin->adminlist();
            $contents['thread']=$this->M_kategori_forum->index()->result();
            $this->load->view('admin/v_thread_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    function hapusadmin($username){
        if ($this->session->userdata('login_admin') == true) {
            $this->MAdmin->hapus($username);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Hapus Admin</div></div>");
            redirect('backoffice/adminmanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    function deletethread($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->M_kategori_forum->hapus($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Hapus Chat Thread</div></div>");
            redirect('backoffice/threadmanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    function hapusronda($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->MRonda->hapus($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Hapus Data Ronda</div></div>");
            redirect('backoffice/rondamanagement');
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function uploadmanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['gambar']=$this->MAdmin->lihat_gambar();
            $this->load->view('admin/v_upload_management',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function upload()
    {
        if ($this->session->userdata('login_admin') == true) {
            $this->load->model('MAdmin');
            $contents['admin'] = $this->session->userdata('admin');
            $title = 'Admin || Sistem Informasi RT';
            $data['title'] = $title;
            $this->load->view('admin/v_upload',$contents);
        }
        else {
            redirect('backoffice/login');
        }
    }
    public function insertpicture()
    {
        if ($this->session->userdata('login_admin') == true) {
            if ($this->input->post('submit')) {
                $contents['admin'] = $this->session->userdata('admin');
                $this->load->library('upload');
                $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['upload_path'] = './asset/upload/'; //path folder
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size'] = '7096'; //maksimum besar file 7M
                $config['max_width'] = '3600'; //lebar maksimum 1288 px
                $config['max_height'] = '3600'; //tinggi maksimu 768 px
                $config['file_name'] = $nmfile; //nama yang terupload nantinya
                $this->upload->initialize($config);
                if ($_FILES['filefoto']['name']) {
                    if ($this->upload->do_upload('filefoto')) {
                        $gbr = $this->upload->data();
                        $data = array(
                            'nm_gbr' => $gbr['file_name'],
                            'tipe_gbr' => $gbr['file_type'],
                        );
                        $this->MAdmin->tambah($data);
                        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload Berhasil</div></div>");
                        redirect('backoffice/uploadmanagement');
                    }
                    else {
                        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Upload Tidak Berhasil</div></div>");
                        redirect('backoffice/uploadmanagement');
                    }
                }
                else {
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Upload Tidak Berhasil</div></div>");
                    redirect('backoffice/uploadmanagement');
                }
            }
            else
                redirect('tidak');

        }
        else {
            redirect('backoffice/login');
        }
    }

    public function data_validasi()
    {
        if($this->input->post('submit')){
            $this->load->model('MAdmin');
            $this->MAdmin->validasiUser();
            redirect('admin/blank_validasi');
        }
        $this->load->model('MAdmin');
        $data['query'] =$this->MAdmin->getvalidasiUser();
        $title = 'Admin || Sistem Informasi RT';
        $data['title'] = $title;

        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/data_validasi',$data);
        $this->load->view('admin/layout/footer');

    }
    public function newsmanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['news'] = $this->News_model->index();
            $this->load->view('admin/v_news_management',$contents);

        }
        else {
            redirect('admin/login');
        }
    }
    public function posting(){
        if ($this->session->userdata('login_admin') == true) {
                $contents['admin'] = $this->session->userdata('admin');
                $this->load->view('admin/v_post', $contents);
        }
        else {
            redirect('admin/login');
        }
    }
    function kontakmanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['kontak'] = $this->M_kontak->index();
            $this->load->view('admin/v_kontak_management', $contents);
        }
        else {
            redirect('admin/login');
        }
    }
    public function ubahronda($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->MRonda->ubah($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Ubah Sesi Ronda</div></div>");
            redirect('backoffice/rondamanagement');
        }
        else
            redirect('backoffice');
    }
    public function ubahkontak($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->M_kontak->ubah($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Ubah Kontak</div></div>");
            redirect('backoffice/kontakmanagement');
        }
        else
            redirect('backoffice');
    }
    public function messagemanagement(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->tampil();
            $this->load->view('admin/v_message_management',$contents);
        }
        else
            redirect('backoffice');
    }
    public function hapuspesan($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->Message_model->hapus($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil dihapus</div></div>");
            redirect('backoffice/messagemanagement');
        }
        else
            redirect('backoffice');
    }
    public function insertpost(){
        if ($this->session->userdata('login_admin') == true) {
            $this->News_model->insert();
            redirect('backoffice/newsmanagement');
        }
        else
            redirect('backoffice');
    }
    public function editnews($id){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['news']=$this->News_model->getNews($id);
            $this->load->view('admin/v_edit_post', $contents);
        }
        else {
            redirect('admin/login');
        }
    }
    public function updatenews($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->News_model->updatenews($id);
            redirect('backoffice/newsmanagement');
        }
        else {
            redirect('admin/login');
        }
    }
    public function hapusberita($id){
        if ($this->session->userdata('login_admin') == true) {
            $this->News_model->hapus($id);
            redirect('backoffice/newsmanagement');
        }
        else
            redirect('backoffice');
    }

    public function blank_validasi(){
        $title = 'Admin || Sistem Informasi RT';
        $data['title'] = $title;

        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/notfound');
        $this->load->view('admin/layout/footer');

    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('backoffice');
    }
    function hitungumur(){
        date_default_timezone_set("Asia/Jakarta");
        $query=$this->db->select('*')->from('tbl_ktp')->where('nik','1111')->get();
        foreach($query->result() as $a){
            $from=new DateTime($a->tgl_lahir);
            $to=new DateTime('today');
        }
        echo $from->diff($to)->y;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */