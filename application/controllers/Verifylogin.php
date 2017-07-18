<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
     $this->load->model('MUser');
 }
 
 function index()
 {
     if ($this->session->userdata('login_user') == true) {
         redirect('user');
     }
     else {
         $result = $this->MUser->validasi_user($_POST);
         $cekakun=$this->MUser->cekakun($_POST);
         if (!empty($cekakun)) {
             if (!empty($result)) {
                 $data_user = ["nik" => $result->nik,
                     "password" => $result->password,
                 ];
                 $this->session->set_userdata('login_user', true);
                 $this->session->set_userdata('user', $data_user);
                 redirect('appspublic');
             } else {
                 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda Belum Divalidasi</div></div>");
                 redirect('appspublic/login');
             }
         }
         else {
             $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda Belum Mendaftar</div></div>");
             redirect('appspublic/login');
         }
     }
 }

}
?>