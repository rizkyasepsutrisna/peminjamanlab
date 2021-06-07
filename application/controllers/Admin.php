<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data ['judul'] = "Dashboard";
        $this->load->view('templates/header_admin_dashboard',$data);
        $this->load->view('Admin/index');
        $this->load->view('templates/footer_admin_dashboard');
    }
}
