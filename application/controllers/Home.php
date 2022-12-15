<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 //cek_login();
 }

//manajemen Buku
public function stage()
 {
$this->load->view('stage');
}
}