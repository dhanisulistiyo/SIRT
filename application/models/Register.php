<?php

class Register extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function form_insert() {
// Inserting in Table(students) of Database(college)

        $nik = $this->input->post('nik');
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
            'nik' => $nik,
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
        $this->db->insert('tbl_ktp', $data);
        
        
        $nik1 = $this->input->post('nik');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $data1 = array(
            'nik' => $nik1,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi
            
        );
        $this->db->insert('tbl_alamat', $data1);
        
        
        $nik2 = $this->input->post('nik');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        
        $data2 = array(
            'nik' => $nik2,
            'password' => $password,
            'email' => $email          
            
        );
        $this->db->insert('tbl_user', $data2);
    }

}
