<?php

class MAdmin extends CI_Model {
    var $table='tbl_admin';
    function __construct() {
        parent::__construct();
    }
    public function validasi_admin($data_admin){
        $this->db->where("username",$data_admin['username']);
        $passworddes=$data_admin['password'];
        $this->db->where("password",$passworddes);
        return $this->db->get('tbl_admin')->row();
    }
    function getAdmin(){
        $query=$this->db->select('*')->from($this->table)->where('username',$this->session->userdata('admin')['username'])->get();
        return $query->result();
    }
    function bacadataUser() {
        $this->load->database();
        $this->db->select("*");
        $this->db->from(" tbl_ktp as a JOIN tbl_alamat as b ON a.nik = b. nik  Join tbl_user as c ON a.nik = c. nik");
        $this->db->where("c.stat_validasi = True");
        $query = $this->db->get();
        return $query->result();
    }

    function add(){
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
        );
        $this->db->insert($this->table,$data);
    }
    function adminlist(){
        $query=$this->db->select('*')->from('tbl_admin')->where_not_in('username',$this->session->userdata('admin')['username'])->get();
        return $query->result();
    }
    function cekadmin(){
        $query=$this->db->select()->from($this->table)->where('username',$this->session->userdata('admin')['username'])->get();
        return $query->row();
    }
    function hapus($username){
        $this->db->where('username',$username);
        $this->db->delete($this->table);
    }
    function ubahpassadmin(){
        $data=array(
            'password'=>$this->input->post('baru')
        );
        $this->db->where('username',$this->session->userdata('admin')['username']);
        $this->db->update($this->table,$data);
    }
    
    function getvalidasiUser() {
        $this->load->database();
        $this->db->select("*");
        $this->db->from(" tbl_ktp as a JOIN tbl_alamat as b ON a.nik = b. nik  Join tbl_user as c ON a.nik = c. nik");
        $this->db->where("c.stat_validasi = False");
        $query = $this->db->get();
        return $query->result();
    }
    function lihat_gambar(){
        $query=$this->db->select('*')->from('tbl_upload')->get();
        return $query->result();
    }
    public function per_page_gambar($limited,$offset){
        $this->db->order_by('tgl_upload','desc');
        $this->db->limit($limited, $offset);
        $query = $this->db->get('tbl_upload');
        return $query->result();
    }
    function hapusgambar($nama){
        $this->db->where('nama_gambar',$nama);
        $this->db->delete('tbl_upload');
    }
    public function jumlah_baris_gambar(){
        $query=$this->db->select('*')->from('tbl_upload')->get();
        return $query->num_rows();
    }
    function tambah($data){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d h:i:sa');
        $gambar=$data['nm_gbr'];
        $data=array(
            'nama_gambar'=>$gambar,
            'judul_gambar'=>$this->input->post('judul_gambar'),
            'username'=>$this->session->userdata('admin')['username'],
            'tgl_upload'=>$date
        );
        $this->db->insert('tbl_upload',$data);
    }
    
    function validasiUser() {
        $this->db->where('stat_validasi = False');
        $stat_validasi = $this->input->post('stat_validasi');
        $data = array(
            'stat_validasi'=>$stat_validasi
        );
        $this->db->update('tbl_user',$data);	
    }
    

}
