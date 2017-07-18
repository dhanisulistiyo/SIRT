<?php

class Message_model extends CI_Model {
    var $table='tbl_pesan';
    function __construct() {
        parent::__construct();
    }

    function tampil(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    function insert(){
        $data=array(
            'email'=>$this->input->post('email'),
            'name'=>$this->input->post('nama'),
            'message'=>$this->input->post('saran'),
        );
        $this->db->insert($this->table,$data);
    }
    function hapus($id){
        $this->db->where('id_message',$id);
        $this->db->delete($this->table);
    }


}