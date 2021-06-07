<?php

class Admin_daftarbarang extends CI_Controller
{
    public function index()
    {
        $data ['judul'] = 'Daftar Barang';
        $this->load->view('templates/header_admin_daftar',$data);
        $this->load->view('Admin/daftar_barang');
        $this->load->view('templates/footer_admin_daftar');
    }
}