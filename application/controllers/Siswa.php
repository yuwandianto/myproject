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

        $this->load->view('student/meta', $data);
        $this->load->view('student/navbar');
        $this->load->view('student/subnavbar');
        $this->load->view('student/main');
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
                'nama'             => $this->input->post('nama', true),
                'tempat_lahir'     => $this->input->post('tempat_lahir', true),
                'tgl_lahir'        => $this->input->post('tgl_lahir', true),
                'bln_lahir'        => $this->input->post('bln_lahir', true),
                'thn_lahir'        => $this->input->post('thn_lahir', true),
                'jk'               => $this->input->post('jk', true),
                'agama'            => $this->input->post('agama', true),
                'penerima_kip'     => $this->input->post('penerima_kip', true),
                'alamat_jalan'     => $this->input->post('alamat_jalan', true),
                'rt'               => $this->input->post('rt', true),
                'rw'               => $this->input->post('rw', true),
                'desa'             => $this->input->post('desa', true),
                'kecamatan'        => $this->input->post('kecamatan', true),
                'sekolah_asal'     => $this->input->post('sekolah_asal', true),
                'tahun_lulus'      => $this->input->post('tahun_lulus', true),
                'bin1'             => $this->input->post('bin1', true),
                'big1'             => $this->input->post('big1', true),
                'mtk1'             => $this->input->post('mtk1', true),
                'ipa1'             => $this->input->post('ipa1', true),
                'bin2'             => $this->input->post('bin2', true),
                'big2'             => $this->input->post('big2', true),
                'mtk2'             => $this->input->post('mtk2', true),
                'ipa2'             => $this->input->post('ipa2', true),
                'bin3'             => $this->input->post('bin3', true),
                'big3'             => $this->input->post('big3', true),
                'mtk3'             => $this->input->post('mtk3', true),
                'ipa3'             => $this->input->post('ipa3', true),
                'bin4'             => $this->input->post('bin4', true),
                'big4'             => $this->input->post('big4', true),
                'mtk4'             => $this->input->post('mtk4', true),
                'ipa4'             => $this->input->post('ipa4', true),
                'bin5'             => $this->input->post('bin5', true),
                'big5'             => $this->input->post('big5', true),
                'mtk5'             => $this->input->post('mtk5', true),
                'ipa5'             => $this->input->post('ipa5', true),
                'tingkat_prestasi' => $this->input->post('tingkat_prestasi', true),
                'juara_prestasi'   => $this->input->post('juara_prestasi', true),
                'bidang_prestasi'  => $this->input->post('bidang_prestasi', true),
                'nama_prestasi'    => $this->input->post('nama_prestasi', true),
                'benar'    => $this->input->post('benar', true),
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

    function uplodkk()
    {
        $simpan = $this->s->uplodkk();
        if ($simpan == 'success') {
            # code...
            redirect('siswa','refresh');
        } 

    }

    function uplodraport()
    {
        $simpan = $this->s->uplodraport();
        if ($simpan == 'success') {
            # code...
            redirect('siswa','refresh');
        } 

    }

    function uplodprestasi()
    {
        $simpan = $this->s->uplodprestasi();
        if ($simpan == 'success') {
            # code...
            redirect('siswa','refresh');
        } 

    }

    function cetakbukti()
    {
        $siswa = $this->db->get_where('tbl_registrasi', ['nisn' => $this->session->userdata('nisn')])->row_array();
        if ($siswa['jk'] == '1') {
            $jk = 'Laki - laki';
        } else {
            $jk = 'Perempuan';
        }

        if ($siswa['tingkat_prestasi'] !='') {
            $tingkat = $siswa['tingkat_prestasi'];
        } else {
            $tingkat = '-';
        }

        if ($siswa['juara_prestasi'] !='') {
            $juara = $siswa['juara_prestasi'];
        } else {
            $juara = '-';
        }

        if ($siswa['bidang_prestasi'] !='') {
            $bidang = $siswa['bidang_prestasi'];
        } else {
            $bidang = '-';
        }

        if ($siswa['nama_prestasi'] !='') {
            $prestasi = $siswa['nama_prestasi'];
        } else {
            $prestasi = '-';
        }
        

        require(APPPATH.'/libraries/fpdf/fpdf.php');

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Image('./assets/images/logo_prov.png',10,10,30);
        $pdf->Cell(30,0,'',0);

        $pdf->Cell(160,8,'PEMERINTAH PROVINSI KALIMANTAN SELATAN',0, 0 , 'C');
        $pdf->Ln(6);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(30,0,'',0);
        $pdf->Cell(160,7,'DINAS PENDIDIKAN DAN KEBUDAYAAN',0 , 0 , 'C');
        $pdf->Ln(5);
        $pdf->Cell(30,0,'',0);
        $pdf->Cell(160,7,'SMA NEGERI 1 JORONG',0 , 0 , 'C');
        $pdf->Ln(5);
        $pdf->Cell(30,0,'',0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(160,6,'Jl A Yani Km 96 Jorong Kecamatan Jorong Tanah Laut',0,0,'C');
        $pdf->Ln(9);
        $pdf->Cell(190,0,'',1);

        $pdf->Ln(5);
        $pdf->SetFont('Arial','BU',14);
        $pdf->Cell(190,0,'BUKTI PENDAFTARAN',0,0,'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,5,'Saya yang bertanda tangan di bawah ini:',0,0,'J');
        $pdf->Ln(8);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Nama',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['nama'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'NISN',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['nisn'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Tempat, Tgl Lahir',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['tempat_lahir'].', '.$siswa['tgl_lahir'].' - '.$siswa['bln_lahir'].' - '.$siswa['thn_lahir'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Jenis Kelamin',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$jk,0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Agama',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['agama'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Sekolah Asal',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['sekolah_asal'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Tahun Lulus',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['tahun_lulus'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Penerima KIP',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$siswa['penerima_kip'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Alamat',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->MultiCell(125,5,$siswa['alamat_jalan'].' RT '.$siswa['rt'].' RW '.$siswa['rw'].' Desa '.$siswa['desa'].' Kecamatan '.$siswa['kecamatan'],0,'J');
        $pdf->Ln(0);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Pilihan Jurusan 2',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,'',0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Pilihan Jurusan 1',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,'',0,'J');
        
        $pdf->Ln(7);
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(190,5,'Nilai Raport',0,0,'C');
        

        $pdf->Ln(7);
        $pdf->Cell(10,5,'');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,5,'Semester 1',0,'J');
        $pdf->Cell(65,5,'Semester 2',0,'J');
        $pdf->Cell(65,5,'Semester 3',0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['bin1'],0,'J');
        $pdf->Cell(40,5,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['bin2'],0,'J');
        $pdf->Cell(40,5,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['bin3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Matematika',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['mtk1'],0,'J');
        $pdf->Cell(40,5,'Matematika',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['mtk2'],0,'J');
        $pdf->Cell(40,5,'Matematika',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['mtk3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['big1'],0,'J');
        $pdf->Cell(40,5,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['big2'],0,'J');
        $pdf->Cell(40,5,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['big3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'IPA',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['ipa1'],0,'J');
        $pdf->Cell(40,5,'IPA',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['ipa2'],0,'J');
        $pdf->Cell(40,5,'IPA',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['ipa3'],0,'J');
        
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(65,5,'Semester 4',0,'J');
        $pdf->Cell(65,5,'Semester 5',0,'J');
        
        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['bin4'],0,'J');
        $pdf->Cell(40,5,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['bin5'],0,'J');


        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Matematika',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['mtk4'],0,'J');
        $pdf->Cell(40,5,'Matematika',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['mtk5'],0,'J');


        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['big4'],0,'J');
        $pdf->Cell(40,5,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['big5'],0,'J');
   

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(40,5,'IPA',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['ipa4'],0,'J');
        $pdf->Cell(40,5,'IPA',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(20,5,$siswa['ipa5'],0,'J');

        $pdf->Ln(7);
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(190,5,'Prestasi Non Akademik',0,0,'C');

        $pdf->Ln(7);
        $pdf->Cell(10,5,'');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(50,5,'Prestasi Tingkat',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$tingkat,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Juara ',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$juara,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Bidang',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->Cell(125,5,$bidang,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,5,'');
        $pdf->Cell(50,5,'Nama Kegiatan',0,'J');
        $pdf->Cell(5,5,':',0,'J');
        $pdf->MultiCell(125,5,$prestasi,0,'J');
       
        

        $pdf->Ln(10);
        $pdf->SetFont('Arial','',12);
        $pdf->Multicell(190,5,'Menyatakan bahwa data di atas adalah benar dan dapat dipertanggungjawabkan. Jika dikemudian hari ditemukan adanya kecurangan saya bersedia menerima konsekuensi termasuk dinyatakan gugur dari seleksi penerimaan peserta didik baru.',0,'J');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(80,3.5,'a/n. '.$siswa['nama'], 0, 0, 'C');
        $pdf->Cell(30,3.5,'', 0, 0, 'C');
        $pdf->Cell(80,3.5,'Tanah Laut, '.date('d M Y'), 0, 0, 'C');
        $pdf->Image('./uploads/foto/'.$siswa['foto'],115,245,20, 30);
        
        $pdf->Ln(3.5);
        $pdf->Cell(80,3.5,'menyetujui data di atas', 0, 0, 'C');
        $pdf->Cell(30,3.5,'', 0, 0, 'C');
        $pdf->Cell(80,3.5,'menyetujui data di atas', 0, 0, 'C');

        $pdf->Ln(3.5);
        $pdf->Cell(80,3.5,'Ortu / Wali Calon Peserta Didik', 0, 0, 'C');
        $pdf->Cell(30,3.5,'', 0, 0, 'C');
        $pdf->Cell(80,3.5,'Calon Peserta Didik', 0, 0, 'C');

        $pdf->Ln(20);
        $pdf->Cell(80,3.5,'............................ ', 0, 0, 'C');
        $pdf->Cell(30,3.5,'', 0, 0, 'C');
        $pdf->Cell(80,3.5,$siswa['nama'], 0, 0, 'C');


        $pdf->Output();
        $pdf->Output('./buktidaftar/'.$siswa['nisn'].'.pdf', 'F');
    }

}

/* End of file Siswa.php */
