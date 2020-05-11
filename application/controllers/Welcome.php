<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['judul'] = $this->db->get('judul');
		$data['title'] = 'PPDB';
		$this->load->view('front/meta', $data);
		$this->load->view('front/header');
		$this->load->view('front/content', $data);
		$this->load->view('front/footer');
		$this->load->view('front/script');
	}
}
