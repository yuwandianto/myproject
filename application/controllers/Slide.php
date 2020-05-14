<?php


class Slide extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_slide');
    }



    public function proses_set1()
    {
        $this->M_slide->set1();
        redirect('home/slide');
    }
    public function set_slide1($id)
    {
        $data['slide1'] = $this->M_slide->ambil_id_slide1($id);
        $data['title'] = 'Setting Slide 1';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide1', $data);
        $this->load->view('back/footer');
    }

    public function proses_set2()
    {
        $this->M_slide->set2();
        redirect('home/slide2');
    }
    public function set_slide2($id)
    {
        $data['slide2'] = $this->M_slide->ambil_id_slide2($id);
        $data['title'] = 'Setting Slide 2';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide2', $data);
        $this->load->view('back/footer');
    }

    public function proses_set3()
    {
        $this->M_slide->set3();
        redirect('home/slide3');
    }
    public function set_slide3($id)
    {
        $data['slide3'] = $this->M_slide->ambil_id_slide3($id);
        $data['title'] = 'Setting Slide 1';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide3', $data);
        $this->load->view('back/footer');
    }

    public function proses_set4()
    {
        $this->M_slide->set4();
        redirect('home/slide4');
    }
    public function set_slide4($id)
    {
        $data['slide4'] = $this->M_slide->ambil_id_slide4($id);
        $data['title'] = 'Setting Slide 1';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide4', $data);
        $this->load->view('back/footer');
    }

    public function proses_set5()
    {
        $this->M_slide->set5();
        redirect('home/slide5');
    }
    public function set_slide5($id)
    {
        $data['slide5'] = $this->M_slide->ambil_id_slide5($id);
        $data['title'] = 'Setting Slide 1';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide5', $data);
        $this->load->view('back/footer');
    }

    public function proses_set6()
    {
        $this->M_slide->set6();
        redirect('home/slide6');
    }
    public function set_slide6($id)
    {
        $data['slide6'] = $this->M_slide->ambil_id_slide6($id);
        $data['title'] = 'Setting Slide 1';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide6', $data);
        $this->load->view('back/footer');
    }

    public function proses_set7()
    {
        $this->M_slide->set7();
        redirect('home/slide7');
    }
    public function set_slide7($id)
    {
        $data['slide7'] = $this->M_slide->ambil_id_slide7($id);
        $data['title'] = 'Setting Slide 7';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide7', $data);
        $this->load->view('back/footer');
    }
}
