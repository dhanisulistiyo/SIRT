<?php

class Organisasi_model extends CI_Model {
    var $table='tbl_organisasi';
    function __construct() {
        parent::__construct();
    }

    function tampil(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    function getStruktur($id){
        $query=$this->db->select('*')->from($this->table)->where('id_org',$id)->get();
        return $query;
    }
    function getRW(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','RW')->get();
        return $query->row();
    }
    function getRT(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','RT')->get();
        return $query->row();
    }
    function getSekertaris(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Sekertaris')->get();
        return $query->row();
    }
    function getBendahara(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Bendahara')->get();
        return $query->row();
    }
    function getKeamanan(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Keamanan')->get();
        return $query->row();
    }

    function getKerohanian(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Kerohanian')->get();
        return $query->row();
    }
    function getHumas(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Humas')->get();
        return $query->row();
    }
    function getKoperasi(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Koperasi')->get();
        return $query->row();
    }
	
	    function getKeamanan1(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Keamanan 1')->get();
        return $query->row();
    }
	
		function getKeamanan2(){
        $query=$this->db->select('*')->from($this->table)->where('jabatan','Keamanan 2')->get();
        return $query->row();
    }
	
	
	
	
    function ubah(){
        $data=array(
            'ketua_rt'=>$this->input->post('rt'),
            'ketua_rw'=>$this->input->post('rw'),
            'sekertaris'=>$this->input->post('sekertaris'),
            'bendahara'=>$this->input->post('bendahara'),
            'kerohanian'=>$this->input->post('kerohanian'),
            'keamanan'=>$this->input->post('keamanan'),
            'humas'=>$this->input->post('humas'),
            'koperasi'=>$this->input->post('koperasi'),
			'keamanan1'=>$this->input->post('keamanan1'),
            'keamanan2'=>$this->input->post('keamanan2')
        );
        $this->db->where('id_org',1);
        $this->db->update($this->table,$data);
    }
    function ubahstruktur($id){
        $data=array(
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('telepon'),
            'email'=>$this->input->post('email'),
            'telepon'=>$this->input->post('telepon'),
        );
        $this->db->where('id_org',$id);
        $this->db->update($this->table,$data);
    }
}