<?php

class Jurusan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jurusan');
    }


    public function proses_tambah()
    {
        $this->M_jurusan->proses_tambah();
        redirect('Home/jurusan');
    }

    public function proses_edit()
    {
        $this->M_jurusan->proses_edit($this->input->post('id'));
        redirect('Home/jurusan');
    }

    public function hapus($id)
    {
        $this->M_jurusan->hapus($id);
        redirect('Home/jurusan');
    }
}
