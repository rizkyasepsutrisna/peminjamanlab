<?php

class Confirm extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Peminjaman Berhasil';
        $this->load->view('templates/header_booking_confirm',$data);
        $this->load->view('User/booking_confirm');
        $this->load->view('templates/header_booking_confirm');
    }
}