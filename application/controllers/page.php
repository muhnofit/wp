<?php
defined('BASEPATH') or exit('No direct script access allowed');
class page extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 //cek_login();
 }

//manajemen Buku
public function page()
{
    $this->load->view('home');
}

public function about()
{
    $this->load->view('about');
}

public function contact()
{
    $this->load->view('contact');
}
}
