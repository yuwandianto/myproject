<?php

class Panduan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
    }

    public function index()
    {
        $this->load->library('dompdf_gen');
        $data['panduan'] = $this->M_dashboard->pdf();

        $this->load->view('back/panduan');

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
    }
}
