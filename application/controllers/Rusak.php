<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rusak extends CI_Controller {

    public function index()
    {
        $this->load->view('errors/html/error_404_');
        
    }

}

/* End of file Rusak.php */
