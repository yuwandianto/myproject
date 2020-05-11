<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin_home extends CI_Model {
    
    public function hitungjumlahsiswa()
    {
        $query = $this->db->get('tbl_registrasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    

}

/* End of file M_admin_home.php */

