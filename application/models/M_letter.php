<?php

class M_letter extends CI_Model {
    var $table='tbl_surat';
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function insert(){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d H:i:sa');
        $data=array(
            'nik'=>$this->session->userdata('user')['nik'],
            'deskripsi'=>$this->input->post('keperluan'),
            'tgl'=>$date
        );
        $this->db->insert($this->table,$data);
    }
    public function insertket($dataket){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d H:i:sa');
        $data=array(
            'nik'=>$this->session->userdata('user')['nik'],
            'deskripsi'=>$dataket,
            'tgl'=>$date
        );
        $this->db->insert($this->table,$data);
    }
    public function getLastRow(){
        $this->db->order_by('id_surat','desc');
        $this->db->limit(1);
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->row();
    }

}
