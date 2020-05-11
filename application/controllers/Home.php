<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin_home', 'm');
	}
	public function index()
	{
		$data['title'] = 'Halaman Admin';
		$data['total_siswa'] = $this->m->hitungjumlahsiswa();
		
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/dashboard_admin');
		$this->load->view('back/footer');
	}
}
