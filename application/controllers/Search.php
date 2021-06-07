<?php
class Search extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');

    }

    public function index()
    {
        $data ['judul'] = 'Daftar Search';
        $data ['item'] = $this->Item_model->getAllItem();
        $this->load->view('templates/header_search',$data);
        $this->load->view('User/search',$data);
        $this->load->view('templates/footer_search');
    }
}
