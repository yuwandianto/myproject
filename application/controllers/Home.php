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
		$data['tbl_jadwal'] = $this->M_admin_home->tbl_jadwal();
		$data['title'] = 'Dashboard';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jadwal/dashboard', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_jadwal($id)
	{
		$this->M_admin_home->proses_edit_jadwal($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Diubah</b>!
	  </div>');
		redirect('home/dashboard');
	}

	public function hapus_data($id)
	{
		$this->M_admin_home->hapus_data($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Diubah</b>!
	  </div>');
		redirect('home/dashboard');
	}

	public function hapus_tabel($id)
	{
		$this->M_admin_home->hapus_tabel($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Dihapus</b>!
	  </div>');
		redirect('home/dashboard');
	}
	public function proses_edit_tabel()
	{
		$this->M_admin_home->proses_edit_tabel();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Diubah</b>!
	  </div>');
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
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Ditambah</b>!
	  </div>');
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

	public function proses_edit_berita()
	{
		$this->M_admin_home->proses_edit_berita();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		Data berita berhasil <b>Diubah</b>!
	  </div>');
		redirect('home/berita');
	}

	// public function hapus_berita($id)
	// {
	// 	$this->M_admin_home->proses_hapus_berita($id);
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
	// 	Data berita berhasil <b>Dihapus</b>!
	//   </div>');
	// 	redirect('home/berita');
	// }

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
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Ditambah</b>!
	  </div>');
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
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Diubah</b>!
	  </div>');
		redirect('home/berita');
	}

	public function hapus_isib($id)
	{
		$this->M_admin_home->hapus_isib($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data berhasil <b>Dihapus</b>!
	  </div>');
		redirect('home/berita');
	}

	public function jurusan()
	{
		$data['jrs'] = $this->M_admin_home->tampil_j();
		$data['title'] = 'Jurusan';
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/jurusan/dashboard', $data);
		$this->load->view('back/footer');
	}

	public function sekolah()
	{
		$data['title'] = 'Jurusan';
		$data['sekolah'] = $this->M_admin_home->tampil_sekolah();
		$this->load->view('back/header', $data);
		$this->load->view('back/sidebar');
		$this->load->view('back/topbar');
		$this->load->view('back/sekolah/dashboard', $data);
		$this->load->view('back/footer');
	}

	public function proses_edit_sekolah()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);
		// Jika tidak ada gambar
		if (!$this->upload->do_upload('userfile')) {
			$nama_sekolah = $this->input->post('nama_sekolah', TRUE);
			$alamat 		= $this->input->post('alamat', TRUE);
			$email_sekolah 	= $this->input->post('email_sekolah', TRUE);
			$tlp_sekolah	= $this->input->post('tlp_sekolah', TRUE);

			$data = array(
				'nama_sekolah' => $nama_sekolah,
				'alamat' => $alamat,
				'email_sekolah' => $email_sekolah,
				'tlp_sekolah' => $tlp_sekolah,
			);
			$this->db->where('id', $id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
           Data berhasil <b>Diubah</b>!
          </div>');
			$this->db->update('tbl_sekolah', $data);
			redirect('Home/sekolah');
			// jika ada gambar
		} else {
			$logo = $this->upload->data();
			$logo = $logo['file_name'];
			$nama_sekolah = $this->input->post('nama_sekolah', TRUE);
			$alamat 		= $this->input->post('alamat', TRUE);
			$email_sekolah 	= $this->input->post('email_sekolah', TRUE);
			$tlp_sekolah	= $this->input->post('tlp_sekolah', TRUE);

			$data = array(
				'nama_sekolah' => $nama_sekolah,
				'alamat' => $alamat,
				'email_sekolah' => $email_sekolah,
				'tlp_sekolah' => $tlp_sekolah,
				'logo' => $logo,
			);
			$this->db->where('id', $id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
           Data berhasil <b>Diubah</b>!
          </div>');
			$this->db->update('tbl_sekolah', $data);
			redirect('Home/sekolah');
		}
	}
}
