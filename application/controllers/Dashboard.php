<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
    }

    //load halaman dashboard
    public function index(){
        $this->load->view('account/v_dashboard');
    }
}