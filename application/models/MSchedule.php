<?php

class MSchedule extends CI_Model {
    var $table='schedule_tbl';
    function __construct() {
        parent::__construct();
    }
    function add($id)
    {
        $w = $this->input->post('warga');
        foreach ($w as $d) {
            $data = array(
                'nik' => $d,
                'ronda_id' => $id
            );
            $this->db->insert($this->table, $data);

        }
    }
    function rondalist(){
        $query=$this->db->select('*')->from($this->table)->join('tbl_ktp',$this->table.'.nik=tbl_ktp.nik')
            ->join('ronda_tbl',$this->table.'.ronda_id=ronda_tbl.ronda_id')->group_by($this->table.'.ronda_id')->order_by($this->table.'.ronda_id')->get();
        return $query->result();
    }
    function deleteall(){
        $this->db->truncate($this->table);
    }

}
