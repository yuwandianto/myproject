<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $data['pengguna'] = $this->db->get('tbl_pengguna')->row_array();
        $data['title'] = 'Profile Admin';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/profile/index', $data);
        $this->load->view('back/footer');
    }

    public function proses_ubah_pengguna($id)
    {
        $this->M_admin_home->proses_ubah_pengguna($id);
        redirect('Home');
    }
}
