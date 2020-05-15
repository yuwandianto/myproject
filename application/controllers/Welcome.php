<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{

		$data['berita'] = $this->M_dashboard->tampil_data_berita();
		$data['isi_b'] = $this->M_dashboard->tampil_data_isiberita();
		$data['jadwal'] = $this->M_dashboard->tampil_data();
		$data['j_tabel'] = $this->M_dashboard->tampil_data_tabel();
		

		// ambil data dari database
		$data['new_sld'] = $this->db->get('tbl_slide')->result();
		// jumlah baris di database
		$data['jml_sld'] = $this->db->get('tbl_slide')->num_rows();
		
		$data['title'] = 'PPDB';
		$this->load->view('front/meta', $data);
		$this->load->view('front/header');
		$this->load->view('front/content', $data);
		$this->load->view('front/footer');
		$this->load->view('front/script');
	}
}
