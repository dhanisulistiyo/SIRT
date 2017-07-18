<?php

class MRonda extends CI_Model {
    var $table='ronda_tbl';
    function __construct() {
        parent::__construct();
    }
    function add(){
        $data=array(
            'ronda_date'=>$this->input->post('tgl'),
            'ronda_sesi'=>$this->input->post('sesi')
        );
        $this->db->insert($this->table,$data);
    }
    function ubah($id){
        $data=array(
            'ronda_date'=>$this->input->post('tgl'),
            'ronda_sesi'=>$this->input->post('sesi')
        );
        $this->db->where('ronda_id',$id);
        $this->db->update($this->table,$data);
    }
    function hapus($id){
        $this->db->where('ronda_id',$id);
        $this->db->delete($this->table);
    }
    function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    function edit($id){
        $query=$this->db->select('*')->from($this->table)->where('ronda_id',$id)->get();
        return $query->result();
    }

}

