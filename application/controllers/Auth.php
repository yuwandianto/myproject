<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function register()
    {
        $this->load->view('front/register');
        
    }

    public function login()
    {
        $this->load->view('front/login');
        
    }

}

/* End of file Auth.php */
