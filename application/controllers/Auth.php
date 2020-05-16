<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_auth', 'a');
        
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
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'trim|required');
        $this->form_validation->set_rules('bln_lahir', 'Bln Lahir', 'trim|required');
        $this->form_validation->set_rules('tahun_lahir', 'Tahun Lahir', 'trim|required');


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

            $data['tgl'] = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
            $data['bln'] = array('01','02','03','04','05','06','07','08','09','10','11','12');

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
        $bln_lahir    = $this->input->post('bln_lahir', true);
        $tahun_lahir  = $this->input->post('tahun_lahir', true);
        $validasi     = $this->input->post('validasi', true);

        if ($validasi == $this->session->userdata('key')) {
            # jika kode validasi benar lakukan input data...
            $this->session->unset_userdata('key');

            $q = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $string = '';
            for($i = 0; $i < 5; $i++) {
                $pos = rand(0, strlen($q)-1);
                $string .= $q{$pos};
            }

            $password = $string;

            $data = [
                'nisn'         => $nisn,
                'nama'         => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir'    => $tgl_lahir,
                'bln_lahir'    => $bln_lahir,
                'thn_lahir'    => $tahun_lahir,
                'pass'         => password_hash($password, PASSWORD_DEFAULT),
                'asli'         => $password,
            ];
            
            $daftar = $this->a->daftar($data);

            if ($daftar) {
                # jika pendfataran berhasil...
                $array = array(
                    'nisn' => $nisn,
                );
                
                $this->session->set_userdata( $array );
                
                # arahkan ke halaman siswa
                redirect('siswa');
            } else {
                # jika pendaftaran gagal...
                $this->session->set_flashdata('error', 'Pendaftaran tidak berhasil, silahkan diulang kembali');
                redirect('auth/register');
            }
            
            
        } else {
            # jika kode validasi salah tampilkan pesan error...
            $this->session->set_flashdata('error', 'Validasi salah');
            redirect('auth/register', 'refresh');
        }
    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $a = rand(1, 9);
            $b = rand(1, 9);
            $c = $a + $b;

            $array = array(
                'key' => $c,
            );

            $data['a'] = $a;
            $data['b'] = $b;

            $this->session->set_userdata($array);

            $data['tgl'] = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
            $data['bln'] = array('01','02','03','04','05','06','07','08','09','10','11','12');

            $this->load->view('front/login', $data);
        } else {

            $this->login_siswa();
        }
    }

    private function login_siswa()
    {
        $username  = $this->input->post('username', true);
        $tgl_lahir = $this->input->post('tgl_lahir', true);
        $bln_lahir = $this->input->post('bln_lahir', true);
        $thn_lahir = $this->input->post('thn_lahir', true);
        $validasi  = $this->input->post('validasi', true);


        if ($validasi == $this->session->userdata('key')) {
            # jika kode validasi benar lakukan input data...
            $this->session->unset_userdata('key');

            $query = $this->db->get_where('tbl_registrasi', ['nisn' => $username])->row_array();

            if ($query) {
                # jika nisn ditemukan...
                $query1 = $this->db->get_where('tbl_registrasi', ['nisn' => $username, 'tgl_lahir' => $tgl_lahir, 'bln_lahir' => $bln_lahir, 'thn_lahir' => $thn_lahir])->row_array();

                if ($query1) {
                    # jika password benar...

                    $array = array(
                        'nisn' => $username
                    );

                    $this->session->set_userdata($array);

                    redirect('siswa', 'refresh');
                } else {
                    # jika password salah...
                    $this->session->set_flashdata('error', 'NISN atau Password tidak ditemukan');
                    redirect('auth/login', 'refresh');
                }
            } else {
                # jika nisn tidak ditemukan/salah...
                $this->session->set_flashdata('error', 'NISN tidak terdaftar');
                redirect('auth/login', 'refresh');
            }
        } else {
            # jika kode validasi salah tampilkan pesan error...
            $this->session->set_flashdata('error', 'Validasi salah');
            redirect('auth/login', 'refresh');
        }
    }


    public function login_admin() 
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('back/login_admin');
        } else {
            # code...
            $this->login_admin_();
        }

    }

    private function login_admin_()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('pass', true);

        $q = $this->db->get_where('tbl_pengguna', ['xemail' => $user])->row_array();
        
        if ($q) {
            # jika email ditemukan...
            if (password_verify($pass, $q['xpass'])) {
                # jika password cocok...
                
                $array = array(
                    'id' => $q['xid']
                );
                
                $this->session->set_userdata( $array );
                
                redirect('home','refresh');
                
                
            } else {
                # jika password tidak cocok...
                $this->session->set_flashdata('error', 'Email atau password salah');
                redirect('login-admin','refresh');
            }
            
        } else {
            # jika email tidak ada...
            $this->session->set_flashdata('error', 'Email atau password salah');
            redirect('login-admin','refresh');
        }
        
    }

    public function logout()
    {
        
        $this->session->sess_destroy();
        
        redirect('','refresh');
        
    }




}

/* End of file Auth.php */
