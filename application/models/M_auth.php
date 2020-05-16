<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    function daftar($data) {
        $daftar = $this->db->insert('tbl_registrasi', $data);

        if ($daftar) {
            return true;
        } else {
            return false;
        }
        
    }

}

/* End of file M_auth.php */
