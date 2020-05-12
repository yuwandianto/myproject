<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin_home');
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		$data['title'] = 'Halaman Admin';
		$data['total_siswa'] = $this->M_admin_home->hitungjumlahsiswa();
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/home');
		$this->load->view('back/footer');
	}

	public function Dashboard()
	{
		$data['jadwal'] = $this->M_admin_home->tampildata();
		$data['judul'] = $this->M_admin_home->tampildata();
		$data['judul1'] = $this->M_admin_home->tampildata1();
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/dashboard', $data);
		$this->load->view('back/footer');
	}

	public function edit_data($id)
	{
		$data['jadwal'] = $this->M_admin_home->ambil_id($id);
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/edit', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit()
	{
		$this->M_admin_home->proses_edit_data();
		redirect('home/dashboard');
	}

	public function hapus_data($id)
	{
		$this->M_admin_home->hapus_data($id);
		redirect('home/dashboard');
	}

	public function hapus_tabel($id)
	{
		$this->M_admin_home->hapus_tabel($id);
		redirect('home/dashboard');
	}

	public function edit_tabel($id)
	{
		$data['judul'] = $this->M_admin_home->ambil_id_tabel($id);
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/edit_tabel', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_tabel()
	{
		$this->M_admin_home->proses_edit_tabel();
		redirect('home/dashboard');
	}

	public function hapus_tabel($id)
	{
		$this->M_admin_home->hapus_tabel($id);
		redirect('home/dashboard');
	}

	public function edit_tabel($id)
	{
		$data['judul'] = $this->M_admin_home->ambil_id_tabel($id);
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/edit_tabel', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_tabel()
	{
		$this->M_admin_home->proses_edit_tabel();
		redirect('home/dashboard');
	}
}
