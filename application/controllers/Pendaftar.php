<?php


class Pendaftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin_home');
    }

    public function data()
    {
        $data['pendaftar'] = $this->M_admin_home->tampil_p();
        $data['title'] = 'Data Pendaftar';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/data_pendaftar', $data);
        $this->load->view('back/footer');
    }
}
