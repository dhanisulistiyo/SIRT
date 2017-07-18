<?php

class M_kontak extends CI_Model {
    var $table='tbl_kontak';
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->db->limit(1);
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function ubah($id){
        $data=array(
            'judul_kontak'=>$this->input->post('judul_kontak'),
            'alamat_kontak'=>$this->input->post('alamat_kontak'),
            'email_kontak'=>$this->input->post('email_kontak'),
            'garis_bujur'=>$this->input->post('garis_bujur'),
            'garis_lintang'=>$this->input->post('garis_lintang'),
        );
        $this->db->where('id_kontak',$id);
        $this->db->update($this->table,$data);
    }


}
