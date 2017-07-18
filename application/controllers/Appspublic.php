<?php

class Appspublic extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        //echo $this->config->item('base_url');
        $this->load->helper(array('url','text'));
        $this->load->model('News_model');
        $this->load->model('Message_model');
        $this->load->model('M_kontak');
        $this->load->model('Organisasi_model');
//		$this->data['base']= $this->config->item('base_url');
//		$this->data['css']= $this->config->item('css');
//		$this->data['css2']= $this->config->item('css2');			
    }

    public function index() {
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $this->load->view('public/cor_index');
    }

    public function news() {
        $hal=number_format($this->uri->segment(3));
        $per_page=2;
        $config['base_url'] = site_url('appspublic/news');
        $config['total_rows'] = $this->News_model->jumlah_baris();
        $config['per_page'] = $per_page;
        $config['full_tag_open'] = '<li>';
        $config['full_tag_close']='<li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links($config);
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $data['news']=$this->News_model->per_page($per_page,$hal);
        $this->load->view('public/cor_news',$data);
    }

    public function gallery() {
        $this->load->model('MAdmin');
        $hal=number_format($this->uri->segment(3));
        $per_page=12;
        $config['base_url'] = site_url('appspublic/gallery');
        $config['total_rows'] = $this->MAdmin->jumlah_baris_gambar();
        $config['per_page'] = $per_page;
        $config['full_tag_open'] = '<li>';
        $config['full_tag_close']='<li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links($config);
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $data['gambar']=$this->MAdmin->per_page_gambar($per_page,$hal);

        //$data['gambar']=$this->MAdmin->lihat_gambar();
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $this->load->view('public/gallery', $data);
    }


    public function about() {
        $title = 'Sistem Informasi RT : About';
        $data['title'] = $title;
        $this->load->view('layout/header', $data);
        $this->load->view('public/about');
        $this->load->view('layout/footer');
    }

    public function registeruser() {
        if($this->input->post('submit')){
            if($this->input->post('password')==$this->input->post('konf_password')) {
                $this->load->model('Register');
                $this->Register->form_insert();
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil Menambah User</div></div>");
                redirect('appspublic/registeruser');
            }
            else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Password Tidak Sama</div></div>");
                redirect('appspublic/registeruser');
            }
		}		
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $this->load->view('public/cor_header', $data);
        $this->load->view('public/register', $data);
        $this->load->view('public/cor_footer');
    }
    public function berita($slug){
        $data['news']=$this->News_model->getBerita($slug);
        $this->load->view('public/cor_news_single',$data);
    }
    public function findnews(){
        $data['pencarian']=$this->input->post('cari');
        $data['news']=$this->News_model->cariberita();
        $this->load->view('public/cor_news_cari',$data);

    }
    function organisasi(){
        $data['RT']=$this->Organisasi_model->getRT();
        $data['RW']=$this->Organisasi_model->getRW();
        $data['bendahara']=$this->Organisasi_model->getBendahara();
        $data['sekertaris']=$this->Organisasi_model->getSekertaris();
        $data['humas']=$this->Organisasi_model->getHumas();
        $data['keamanan']=$this->Organisasi_model->getKeamanan();
        $data['koperasi']=$this->Organisasi_model->getKoperasi();
        $data['kerohanian']=$this->Organisasi_model->getKerohanian();
		$data['keamanan1']=$this->Organisasi_model->getKeamanan1();
		$data['keamanan2']=$this->Organisasi_model->getKeamanan2();
        $data['organisasi']=$this->Organisasi_model->tampil();
        $this->load->view('public/cor_organisasi',$data);
    }
    public function contact() {
        $title = 'Sistem Informasi RT';
        $data['title'] = $title;
        $this->load->view('layout/header', $data);
        $this->load->view('public/contact', $data);
        $this->load->view('layout/footer');
    }

    public function login() {
        $title = 'Sistem Informasi RT : Login';
        $data['title'] = $title;
        $this->load->helper(array('form'));
        $this->load->view('public/login',$data);
    }
    public function kontak(){
        $contents['kontak']=$this->M_kontak->index();
        $this->load->view('public/v_kontak',$contents);
    }
    public function kirimpesan(){
        if ($_POST){
            $this->Message_model->insert();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil mengirim pesan</div></div>");
            redirect('appspublic/kontak');
        }
        else
        {
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal mengirim pesan</div></div>");
            redirect('appspublic/kontak');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */