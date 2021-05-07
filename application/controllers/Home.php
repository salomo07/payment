<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        // unset($_SESSION['dataUser']);
        // $this->load->model('m_storage');
        $this->load->model('m_home');
        if (!$this->session->userdata('dataUser')) {
            redirect('Login');
        }
    }
    public function index() {
		$this->load->view('home/home');
    }
    public function notfound() {
        // $keluargabaru=['suami'=>3,'istri'=>7];
        // $this->m_home->addFamily($keluargabaru);
        $this->load->view('home/404');
    }
    public function signout()
    {
        unset($_SESSION['dataUser']);
        redirect('Login');             
    }
}
