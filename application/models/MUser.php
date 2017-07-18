<?php

class MUser extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    function getProfilUser() {
        $this->db->select("*");
        $this->db->from("tbl_ktp as a JOIN tbl_alamat as b ON a.nik = b. nik  Join tbl_user as c ON a.nik = c. nik");
        $this->db->where("a.nik",$this->session->userdata('user')['nik']);
        $query = $this->db->get();
        return $query->result();
    }


     function select_data() {
        $query = $this->db->get('tbl_user');
        return $query->result();
    }

    function deleteUser($user){
        $this->db->where('nik',$user);
        $this->db->delete(array('tbl_user','tbl_ktp','tbl_alamat'));
    }
    function makevalid($nik){
        $data=array(
            'stat_validasi'=>1
        );
        $this->db->where('nik',$nik);
        $this->db->update('tbl_user',$data);
    }

    function validUser(){
        $query=$this->db->select('*')->from('tbl_user')->where('stat_validasi',1)->join('tbl_ktp','tbl_ktp.nik=tbl_user.nik')->join('tbl_alamat','tbl_alamat.nik=tbl_user.nik')->get();
        return $query->result();
    }
    function validuser_schedule(){
//    
        $query=$this->db->select('*')->from('tbl_ktp')->join('tbl_user','tbl_user.nik=tbl_ktp.nik')->where('stat_validasi',1)->where('tbl_ktp.`nik` NOT IN (SELECT `nik` FROM `schedule_tbl`)', NULL, FALSE)
            ->where('jenis_kelamin','Pria')->get();
        return $query->result();
    }
    function nonvalidUser(){
        $query=$this->db->select('*')->from('tbl_user')->where('stat_validasi',0)->join('tbl_ktp','tbl_ktp.nik=tbl_user.nik')->join('tbl_alamat','tbl_alamat.nik=tbl_user.nik')->get();
        return $query->result();
    }
    function cek_nama($id){
        $query=$this->db->select('*')->from('tbl_ktp')->where('nik',$id)->get()->row();
        return $query;
    }

    public function validasi_user($data_user){
        $this->db->where("nik",$data_user['nik']);
        $passworddes=$data_user['password'];
        $this->db->where("password",$passworddes);
        $this->db->where("stat_validasi",1);
        return $this->db->get('tbl_user')->row();
    }
    public function cekakun($data_user){
        $this->db->where("nik",$data_user['nik']);
        $passworddes=$data_user['password'];
        $this->db->where("password",$passworddes);
        return $this->db->get('tbl_user')->row();
    }
    public function ubahprofil(){
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $gol_darah = $this->input->post('gol_darah');
        $agama = $this->input->post('agama');
        $status = $this->input->post('status');
        $pekerjaan = $this->input->post('pekerjaan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $berlaku = $this->input->post('berlaku');
        $data = array(
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'gol_darah' => $gol_darah,
            'agama' => $agama,
            'status' => $status,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'berlaku' => $berlaku
        );
        $this->db->where('nik',$this->session->userdata('user')['nik']);
        $this->db->update('tbl_ktp', $data);


        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $data1 = array(
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi

        );
        $this->db->where('nik',$this->session->userdata('user')['nik']);
        $this->db->update('tbl_alamat', $data1);
        $email = $this->input->post('email');

        $data2 = array(
            'email' => $email

        );
        $this->db->where('nik',$this->session->userdata('user')['nik']);
        $this->db->update('tbl_user', $data2);
    }
    function cekpass(){
            $query=$this->db->select('*')->from('tbl_user')->where('nik',$this->session->userdata('user')['nik'])->get();
            return $query->row();
    }
    function ubahpass(){
        $data=array(
            'password'=>$this->input->post('baru')
        );
        $this->db->where('nik',$this->session->userdata('user')['nik']);
        $this->db->update('tbl_user',$data);
    }

}