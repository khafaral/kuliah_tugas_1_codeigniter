<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function index()
    {
        $data['nik'] = '12180024';
        $data['nama'] = 'Dama Sukma K.D';
        $data['kelas'] = '12.3C.11';
        $data['matkul'] = 'WEB PROGRAMMING 2';
        $this->load->view('biodata/index', $data);
    }

}