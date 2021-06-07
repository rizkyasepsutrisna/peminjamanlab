<?php

class Admin_editbarang extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Edit Barang';
        $this->load->view('templates/header_admin_editbarang',$data);
        $this->load->view('Admin/edit_barang');
        $this->load->view('templates/footer_admin_editbarang');
    }
}