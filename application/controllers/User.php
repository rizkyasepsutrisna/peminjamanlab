<?php
class User extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Halaman Peminjaman';
        $this->load->view('templates/header_userhome', $data);
        $this->load->view('User/index');
        $this->load->view('templates/footer_userhome');
    }
}
