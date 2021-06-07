<?php

class Detail extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Detail';
        $this->load->view('templates/header_detail_item',$data);
        $this->load->view('User/detail_item');
        $this->load->view('templates/footer_detail_item');
    }
}
