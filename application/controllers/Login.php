<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        // print_r($this->session->userdata('dataUser'));
        // unset($_SESSION['dataUser']);
        // echo base64_decode("QXNveQ==");

        if ($this->session->userdata('dataUser')) {
            redirect('Home');
        }
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('m_login');
    }
    public function index() {
		$this->load->view('login/index');
    }
    public function checkAccess1()
    {
        
    }
    public function sign_in()
    {
        $data=$this->m_login->verifikasi($_POST['username'],base64_encode($_POST['password']));
        if(isset($data))
        {
            $this->session->set_userdata('dataUser', $data);
            //echo base64_encode($password)."\n".'||';echo base64_decode('cmVqb2ljZQ==');
            $menu['menu1']=$this->m_login->getmenu1($data->idrole);
            $menu['menu2']=$this->m_login->getmenu2($data->idrole);

            // $menubar=$this->load->view('template/menubar',$data,true);
            $this->session->set_userdata('dataMenu', $menu);

            $sidebar=$this->load->view('template/sidebar',$menu,true);
            $menubar=$this->load->view('template/menubar',$menu,true);    
            $this->session->set_userdata('dataSidebar', $sidebar);
            $this->session->set_userdata('dataMenubar', $menubar);
            redirect('Home');
        }
        else{redirect('Login');}
    }
    
}
