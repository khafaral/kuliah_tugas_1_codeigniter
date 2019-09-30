<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function index()
    {
        $data['nim'] = '12181782';
        $data['nama'] = 'Khafidz Farid A';
        $data['kelas'] = '12.3C.11';
        $data['matkul'] = 'WEB PROGRAMMING 2';
        $this->load->view('index', $data);
    }

}