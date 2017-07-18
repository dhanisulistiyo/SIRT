<?php

class M_kategori_forum extends CI_Model {
    var $table='chat_category';
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $query=$this->db->select('*')->from($this->table)->order_by('chat_id','desc')->join('tbl_ktp',$this->table.'.created_by=tbl_ktp.nik','left')->get();
        return $query;
    }
    public function insertthread(){
        date_default_timezone_set('Asia/Jakarta');
        $tgl=date('Y-m-d');
        $data=array(
            'chat_name'=>$this->input->post('judul_thread'),
            'created_at'=>$tgl,
            'created_by'=>$this->session->userdata('user')['nik'],
        );
        $this->db->insert($this->table,$data);
    }
    public function insertthreadadmin(){
        date_default_timezone_set('Asia/Jakarta');
        $tgl=date('Y-m-d');
        $data=array(
            'chat_name'=>$this->input->post('judul_thread'),
            'created_at'=>$tgl,
            'created_by'=>$this->session->userdata('admin')['username'],
        );
        $this->db->insert($this->table,$data);
    }
    function hapus($id){
        $this->db->where('chat_id',$id);
        $this->db->delete($this->table);
    }


}
