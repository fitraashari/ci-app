<?php
class Jurusan extends CI_Controller{
    public function index(){
        $data['judul']="Daftar Jurusan";
        $this->load->view('templates/header', $data);
        $this->load->view('jurusan/index');
        $this->load->view('templates/footer');
    }
}