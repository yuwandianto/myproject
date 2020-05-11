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
		must_admin();
		$data['title'] = 'Halaman Admin';
		$data['total_siswa'] = $this->m->hitungjumlahsiswa();
		
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/home');
		$this->load->view('back/footer');
	}

	public function Dashboard()
	{
		must_admin();
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/dashboard');
		$this->load->view('back/footer');
	}
}
