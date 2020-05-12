<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        must_siswa();
        $this->load->view('student/meta');
        $this->load->view('student/navbar');
        $this->load->view('student/subnavbar');
        $this->load->view('student/main');
        $this->load->view('student/footer');
        $this->load->view('student/script');
        
    }

}

/* End of file Siswa.php */
