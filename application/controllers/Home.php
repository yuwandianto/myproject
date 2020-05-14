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
		// $data['judul'] = $this->M_admin_home->tampildata();
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

	public function tambah_tabel()
	{
		$data['title'] = 'Tambah tabel';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/tambah_tabel', $data);
		$this->load->view('back/footer');
	}

	public function proses_tambah_tabel()
	{
		$this->M_admin_home->proses_tambah_tabel();
		redirect('home/dashboard');
	}

	public function berita()
	{
		$data['berita'] = $this->M_admin_home->tampil_data_berita();
		$data['isi_berita'] = $this->M_admin_home->tampil_data_isiberita();
		// $data['judul'] = $this->M_admin_home->tampildata();
		$data['title'] = 'Berita';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/berita/dashboard', $data);
		$this->load->view('back/footer');
	}

	public function edit_berita()
	{
		$data['berita'] = $this->M_admin_home->tampil_data_berita();
		$data['title'] = 'Edit Berita';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/berita/edit', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_berita()
	{
		$this->M_admin_home->proses_edit_berita();
		redirect('home/berita');
	}

	public function hapus_berita($id)
	{
		$this->M_admin_home->proses_hapus_berita($id);
		redirect('home/berita');
	}

	public function tambah_isib()
	{
		$data['title'] = 'Tambah isi Berita';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/berita/tambah_isib', $data);
		$this->load->view('back/footer');
	}

	public function proses_tambah_isib()
	{
		$this->M_admin_home->proses_tambah_isib();
		redirect('Home/berita');
	}

	public function edit_isiberita($id)
	{
		$data['isi_berita'] = $this->M_admin_home->ambil_id_isib($id);
		$data['title'] = 'Edit Berita';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/berita/edit_isib', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_isib()
	{
		$this->M_admin_home->proses_edit_isib();
		redirect('home/berita');
	}

	public function hapus_isib($id)
	{
		$this->M_admin_home->hapus_isib($id);
		redirect('home/berita');
	}

	public function slide()
	{
		$data['slide1'] = $this->M_admin_home->slide1();
		$data['title'] = 'Setting Slide 1';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide1', $data);
		$this->load->view('back/footer');
	}

	public function slide2()
	{
		$data['slide2'] = $this->M_admin_home->slide2();
		$data['title'] = 'Setting Slide 2';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide2', $data);
		$this->load->view('back/footer');
	}

	public function slide3()
	{
		$data['slide3'] = $this->M_admin_home->slide3();
		$data['title'] = 'Setting Slide 3';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide3', $data);
		$this->load->view('back/footer');
	}
	public function slide4()
	{
		$data['slide4'] = $this->M_admin_home->slide4();
		$data['title'] = 'Setting Slide 4';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide4', $data);
		$this->load->view('back/footer');
	}
	public function slide5()
	{
		$data['slide5'] = $this->M_admin_home->slide5();
		$data['title'] = 'Setting Slide 5';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide5', $data);
		$this->load->view('back/footer');
	}
	public function slide6()
	{
		$data['slide6'] = $this->M_admin_home->slide6();
		$data['title'] = 'Setting Slide 6';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide6', $data);
		$this->load->view('back/footer');
	}
	public function slide7()
	{
		$data['slide7'] = $this->M_admin_home->slide7();
		$data['title'] = 'Setting Slide 7';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/slide/slide7', $data);
		$this->load->view('back/footer');
	}
}
