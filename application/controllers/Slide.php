<?php


class Slide extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_slide');
        $this->load->library('form_validation');
    }


    public function Slide()
    {
        $data['slide'] = $this->db->get('tbl_slide')->result_array();
        $data['title'] = 'Setting Slide ';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/slide', $data);
        $this->load->view('back/footer');
    }

    public function tambah_slide()
    {
        $data['title'] = 'Tambah Slide ';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/tambah_slide', $data);
        $this->load->view('back/footer');
    }
}
