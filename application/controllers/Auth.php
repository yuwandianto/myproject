<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function register()
    {
        $this->form_validation->set_rules('nisn', 'nisn', 'trim|required|exact_length[10]|numeric|is_unique[tbl_registrasi.nisn]', [
            'exact_length' => 'NISN harus 10 angka',
            'numeric'      => 'NISN harus berupa angka',
            'is_unique'     => 'NISN sudah terdaftar'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            # jika form validasi tidak terpenuhi...
            $a = rand(1, 9);
            $b = rand(1, 9);
            $c = $a + $b;

            $array = array(
                'key' => $c,
            );

            $data['a'] = $a;
            $data['b'] = $b;

            $this->session->set_userdata($array);

            $this->load->view('front/register', $data);
        } else {
            # jika form validasi terpenuhi...
            $this->register_();
        }
    }

    private function register_()
    {
        $nisn         = $this->input->post('nisn', true);
        $nama         = $this->input->post('nama', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $tgl_lahir    = $this->input->post('tgl_lahir', true);
        $validasi     = $this->input->post('validasi', true);

        if ($validasi == $this->session->userdata('key')) {
            # jika kode validasi benar lakukan input data...
            $this->session->unset_userdata('key');

            $data = [
                "nisn" => $this->input->post('nisn'),
                "nama" => $this->input->post('nama'),
                "tempat_lahir" => $this->input->post('tempat_lahir'),
                "tgl_lahir" => $this->input->post('tgl_lahir'),
            ];

            $this->db->insert('tbl_registrasi', $data);
            redirect('auth/login');
        } else {
            # jika kode validasi salah tampilkan pesan error...
            $this->session->set_flashdata('error', 'Validasi salah');
            redirect('auth/register', 'refresh');
        }
    }

    public function login()
    {
        $this->load->view('front/login');
    }
}

/* End of file Auth.php */
