<?php

class News_model extends CI_Model {
    var $table='tbl_berita';
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function insert(){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d h:i:sa');
        $slug=str_replace(array('-','?','!','*','#',' '),'-',$this->input->post('judul'));
        $data=array(
            'judul'=>$this->input->post('judul'),
            'berita'=>$this->input->post('editorpost'),
            'tgl'=>$date,
            'username'=>$this->session->userdata('admin')['username'],
            'slug'=>$slug
        );
        $this->db->insert($this->table,$data);
    }
    public function per_page($limited,$offset){
        $this->db->order_by('id_berita','DESC');
        $this->db->limit($limited, $offset);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    function cariberita(){
        $this->db->order_by('id_berita','DESC');
        $this->db->like('judul',$this->input->post('cari'));
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function jumlah_baris(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->num_rows();
    }
    public function hapus($id){
        $this->db->where('id_berita',$id);
        $this->db->delete($this->table);
    }
    public function getNews($id){
        $query=$this->db->select('*')->from($this->table)->where('id_berita',$id)->get();
        return $query->result();
    }
    public function getBerita($slug){
        $query=$this->db->select('*')->from($this->table)->where('slug',$slug)->get();
        return $query->result();
    }
    public function updatenews($id){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d h:i:sa');
        $slug=str_replace(array('-','?','!','*','#',' ',','),'-',$this->input->post('judul'));
        $data=array(
            'judul'=>$this->input->post('judul'),
            'berita'=>$this->input->post('editorpost'),
            'tgl'=>$date,
            'slug'=>$slug,
            'username'=>$this->session->userdata('admin')['username']
        );
        $this->db->where('id_berita',$id);
        $this->db->update($this->table,$data);
    }

}
