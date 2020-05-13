<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_siswa', 's');
        
    }
    

    public function index()
    {
        must_siswa();

        $data['siswa'] = $this->db->get_where('tbl_registrasi', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('student/meta');
        $this->load->view('student/navbar');
        $this->load->view('student/subnavbar');
        $this->load->view('student/main', $data);
        $this->load->view('student/footer');
        $this->load->view('student/script');
        
    }

    function lengkapidata()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'trim|required|numeric|exact_length[2]', [
            'exact_length' => '%s harus 2 karakter angka',
            'numeric' => '%s harus berupa angka'
        ]);
        $this->form_validation->set_rules('bln_lahir', 'Bulan lahir', 'trim|required|numeric|exact_length[2]', [
            'exact_length' => '%s harus 2 karakter angka',
            'numeric' => '%s harus berupa angka'
        ]);
        $this->form_validation->set_rules('thn_lahir', 'Tahun lahir', 'trim|required|numeric|exact_length[4]', [
            'exact_length' => '%s harus 4 karakter angka',
            'numeric' => '%s harus berupa angka'
        ]);
        $this->form_validation->set_rules('jk', 'jk', 'trim|required');
        $this->form_validation->set_rules('agama', 'agama', 'trim|required');
        $this->form_validation->set_rules('penerima_kip', 'Penarima Kip', 'trim|required');
        $this->form_validation->set_rules('alamat_jalan', 'alamat_jalan', 'trim');
        $this->form_validation->set_rules('rt', 'rt', 'trim|required|numeric|max_length[3]');
        $this->form_validation->set_rules('rw', 'rw', 'trim|required|numeric|max_length[3]');
        $this->form_validation->set_rules('desa', 'desa', 'trim|required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
        $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'trim|required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'trim|required|numeric|exact_length[4]', [
            'exact_length' => '%s harus 4 karakter angka',
            'numeric' => '%s harus berupa angka'
        ]);
        
        
        if ($this->form_validation->run() == FALSE) {
            # jika validasi gagal...
            $this->session->set_flashdata('pesan', '<strong>Peringatan !</strong> Data gagal disimpan, silahkan periksa kembali data yang dimasukkan');
            $this->session->set_flashdata('jenis', 'alert-danger');
            
            $this->index();
        } else {
            # jika validasi berhasil...
            $data = [
                'nama' => $this->input->post('nama', true),        
                'tempat_lahir' => $this->input->post('tempat_lahir', true),        
                'tgl_lahir' => $this->input->post('tgl_lahir', true),        
                'bln_lahir' => $this->input->post('bln_lahir', true),        
                'thn_lahir' => $this->input->post('thn_lahir', true),        
                'jk' => $this->input->post('jk', true),        
                'agama' => $this->input->post('agama', true),        
                'penerima_kip' => $this->input->post('penerima_kip', true),        
                'alamat_jalan' => $this->input->post('alamat_jalan', true),        
                'rt' => $this->input->post('rt', true),        
                'rw' => $this->input->post('rw', true),        
                'desa' => $this->input->post('desa', true),        
                'kecamatan' => $this->input->post('kecamatan', true),        
                'sekolah_asal' => $this->input->post('sekolah_asal', true),        
                'tahun_lulus' => $this->input->post('tahun_lulus', true),        
            ];

            $simpan = $this->s->lengkapidata($data);

            $this->session->set_flashdata('pesan', '<strong>Alhamdulillah..</strong> Data berhasil disimpan.');
            $this->session->set_flashdata('jenis', 'alert-success');
            redirect('siswa','refresh');
            
        }
        
    }

    function uplodfoto()
    {
        $simpan = $this->s->uplodfoto();
        if ($simpan == 'success') {
            # code...
            redirect('siswa','refresh');
        } 

    }

}

/* End of file Siswa.php */
