<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        must_siswa();
        echo 'ini halaman siswa';
    }

}

/* End of file Siswa.php */
