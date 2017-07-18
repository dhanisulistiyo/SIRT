<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('MAdmin');
    }
    public function login(){
        if ($this->session->userdata('login_admin') == true) {
            redirect('admin');
        }
        else {
            $this->load->view('admin/v_login');
            if($_POST){
                $result=$this->MAdmin->validasi_admin($_POST);
                if(!empty($result)){
                    $data_admin=["username" =>$result->username,
                        "password"=>$result->password,
                    ];
                    $this->session->set_userdata('login_admin',true);
                    $this->session->set_userdata('admin',$data_admin);
                    redirect('admin');
                }

            }
        }
    }
        public function index(){
            if ($this->session->userdata('login_admin') == true) {
                $title = 'Admin || Sistem Informasi RT';
                $data['title'] = $title;

                $this->load->view('admin/layout/header',$data);
                $this->load->view('admin/data_admin',$data);
                $this->load->view('admin/layout/footer');
            }
            else {
                redirect('admin/login');
            }
 }

	public function data_user()
	{
        if ($this->session->userdata('login_admin') == true) {
            $this->load->model('MAdmin');
            $data['query'] =$this->MAdmin->bacadataUser();

            $title = 'Admin || Sistem Informasi RT';
            $data['title'] = $title;

            $this->load->view('admin/layout/header',$data);
            $this->load->view('admin/data_user',$data);
            $this->load->view('admin/layout/footer');
        }
        else {
            redirect('admin/login');
        }

	}
        
        public function data_validasi()
	{
        if ($this->session->userdata('login_admin') == true) {
            if ($this->input->post('submit')) {
                $this->load->model('MAdmin');
                $this->MAdmin->validasiUser();
                redirect('admin/blank_validasi');
            }
            $this->load->model('MAdmin');
            $data['query'] = $this->MAdmin->getvalidasiUser();
            $title = 'Admin || Sistem Informasi RT';
            $data['title'] = $title;

            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/data_validasi', $data);
            $this->load->view('admin/layout/footer');
        }
        else {
            redirect('admin/login');
        }
            
	}
    public function blank_validasi(){
                $title = 'Admin || Sistem Informasi RT';
                $data['title'] = $title;

                $this->load->view('admin/layout/header',$data);
		$this->load->view('admin/notfound');
                $this->load->view('admin/layout/footer');
            
        }
        function logout()
 {
   $this->session->unset_userdata('login_admin');
   session_destroy();
   redirect('home', 'refresh');
 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */