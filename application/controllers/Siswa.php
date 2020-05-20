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
                'email'            => $this->input->post('email', true),
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
    

    function cetakbuktidaftar($status = null)
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

        if ($siswa['foto'] != '') {
            $foto = $siswa['foto'];
        } else {
            $foto = 'default.png';
        }
        
        

        require(APPPATH.'/libraries/fpdf/fpdf.php');

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetMargins(10,5,10);
        $pdf->Image('./assets/images/logo_prov.png',10,10,30);
        $pdf->Cell(30,0,'',0);
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(160,8,'PEMERINTAH PROVINSI KALIMANTAN SELATAN',0, 0 , 'C');
        $pdf->Ln(6);
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(30,0,'',0);
        $pdf->Cell(160,7,'DINAS PENDIDIKAN DAN KEBUDAYAAN',0 , 0 , 'C');
        $pdf->Ln(5);
        $pdf->Cell(30,0,'',0);
        $pdf->Cell(160,7,'SMA NEGERI 1 JORONG',0 , 0 , 'C');
        $pdf->Ln(5);
        $pdf->Cell(30,0,'',0);
        $pdf->SetFont('Times','',10);
        $pdf->Cell(160,6,'Jl A Yani Km 96 Jorong Kecamatan Jorong Tanah Laut',0,0,'C');
        $pdf->Ln(7);
        $pdf->Cell(190,0,'',1);
        $pdf->Ln(0.5);
        $pdf->Cell(190,0,'',1);

        $pdf->Ln(5);
        $pdf->SetFont('Times','BU',14);
        $pdf->Cell(190,0,'BUKTI PENDAFTARAN',0,0,'C');
        $pdf->Ln(10);
        $pdf->SetFont('Times','',11);
        $pdf->Cell(190,4,'Saya yang bertanda tangan di bawah ini:',0,0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Nama',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['nama'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'NISN',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['nisn'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Tempat, Tgl Lahir',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['tempat_lahir'].', '.$siswa['tgl_lahir'].' - '.$siswa['bln_lahir'].' - '.$siswa['thn_lahir'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Jenis Kelamin',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$jk,0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Agama',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['agama'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Sekolah Asal',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['sekolah_asal'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Tahun Lulus',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['tahun_lulus'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Penerima KIP',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$siswa['penerima_kip'],0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Alamat',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->MultiCell(125,4,$siswa['alamat_jalan'].' RT '.$siswa['rt'].' RW '.$siswa['rw'].' Desa '.$siswa['desa'].' Kecamatan '.$siswa['kecamatan'],0,'J');
        $pdf->Ln(0);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Pilihan Jurusan 1',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,'',0,'J');
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Pilihan Jurusan 2',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,'',0,'J');
        
        $pdf->Ln(7);
        $pdf->SetFont('Times','BU',12);
        $pdf->Cell(190,5,'Nilai Raport',0,0,'C');
        

        $pdf->Ln(7);
        $pdf->Cell(10,4,'');
        $pdf->SetFont('Times','',11);
        $pdf->Cell(65,4,'Semester 1',0,'J');
        $pdf->Cell(65,4,'Semester 2',0,'J');
        $pdf->Cell(65,4,'Semester 3',0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['bin1'],0,'J');
        $pdf->Cell(40,4,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['bin2'],0,'J');
        $pdf->Cell(40,4,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['bin3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Matematika',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['mtk1'],0,'J');
        $pdf->Cell(40,4,'Matematika',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['mtk2'],0,'J');
        $pdf->Cell(40,4,'Matematika',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['mtk3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['big1'],0,'J');
        $pdf->Cell(40,4,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['big2'],0,'J');
        $pdf->Cell(40,4,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['big3'],0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'IPA',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['ipa1'],0,'J');
        $pdf->Cell(40,4,'IPA',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['ipa2'],0,'J');
        $pdf->Cell(40,4,'IPA',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['ipa3'],0,'J');
        
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(65,4,'Semester 4',0,'J');
        $pdf->Cell(65,4,'Semester 5',0,'J');
        
        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['bin4'],0,'J');
        $pdf->Cell(40,4,'Bahasa Indonesia',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['bin5'],0,'J');


        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Matematika',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['mtk4'],0,'J');
        $pdf->Cell(40,4,'Matematika',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['mtk5'],0,'J');


        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['big4'],0,'J');
        $pdf->Cell(40,4,'Bahasa Inggris',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['big5'],0,'J');
   

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(40,4,'IPA',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['ipa4'],0,'J');
        $pdf->Cell(40,4,'IPA',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(20,4,$siswa['ipa5'],0,'J');

        $pdf->Ln(7);
        $pdf->SetFont('Times','BU',12);
        $pdf->Cell(190,5,'Prestasi Non Akademik',0,0,'C');

        $pdf->Ln(7);
        $pdf->Cell(10,5,'');
        $pdf->SetFont('Times','',11);
        $pdf->Cell(50,4,'Prestasi Tingkat',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$tingkat,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Juara ',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$juara,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Bidang',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->Cell(125,4,$bidang,0,'J');

        $pdf->Ln(5);
        $pdf->Cell(10,4,'');
        $pdf->Cell(50,4,'Nama Kegiatan',0,'J');
        $pdf->Cell(5,4,':',0,'J');
        $pdf->MultiCell(125,4,$prestasi,0,'J');

        $pdf->Ln(5);
        $pdf->SetFont('Times','',11);
        $pdf->Multicell(190,5,'Menyatakan bahwa data di atas adalah benar dan dapat dipertanggungjawabkan. Jika dikemudian hari ditemukan adanya kecurangan saya bersedia menerima konsekuensi termasuk dinyatakan gugur dari seleksi penerimaan peserta didik baru.',0,'J');

        $pdf->Ln(13);
        $pdf->SetFont('Times','',10);
        $pdf->Cell(80,3.5,'a/n. '.$siswa['nama'], 0, 0, 'C');
        $pdf->Cell(30,3.5,'', 0, 0, 'C');
        $pdf->Cell(80,3.5,'Tanah Laut, '.date('d M Y'), 0, 0, 'C');
        $pdf->Image('./uploads/foto/'.$foto,115,227,20, 30);
        
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

        // Position at 1.5 cm from bottom
        $pdf->SetY(-31);
        // Arial italic 8
        $pdf->SetFont('Arial','I',8);
        // Text color in gray
        $pdf->SetTextColor(128);
        // Page number
        $pdf->Cell(0,10,'File Bukti Pendaftaran Peserta Didik Baru. '. $siswa['nama']);

        if ($status == null) {
            # code...
            $pdf->Output();
            $pdf->Output('./buktidaftar/'.$siswa['nisn'].'.pdf', 'F');
        } else {
            # code...
            $pdf->Output('./buktidaftar/'.$siswa['nisn'].'.pdf', 'F');
            redirect('siswa/kirimbuktidaftar','refresh');
                      
        }
        
    }

    function kirimbuktidaftar()
    {
        $content = file_exists('./buktidaftar/'.$this->session->userdata('nisn').'.pdf');
        $file = base_url().'./buktidaftar/'.$this->session->userdata('nisn').'.pdf';


        if ($content == 1) {

            $sekolah = $this->db->get('tbl_sekolah',1)->row_array();
            $e = $sekolah['kirim_mail'];
            $pe = base64_decode($sekolah['pass_mail']);

            $sis = $this->db->get_where('tbl_registrasi', ['nisn' => $this->session->userdata('nisn')])->row_array();
            
            $this->load->library('email');

            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'Codeigniter';
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "400";
            $config['smtp_user']= $e;
            $config['smtp_pass']= $pe;
            $config['crlf']="\r\n";
            $config['newline']="\r\n";
            $config['wordwrap'] = TRUE;
            
            //memanggil library email dan set konfigurasi untuk pengiriman email
            $this->email->initialize($config);
            
            //konfigurasi pengiriman
            $this->email->from($e);
            $this->email->to($sis['email']);
            $this->email->subject("Bukti Pendaftaran");
            $this->email->message('Terimakasih telah menyelesaikan proses pendaftaran peserta didik baru di '.$sekolah['nama_sekolah'].'. Silahkan simpan bukti pendaftaran berikut sebagai bukti bahwa anda telah melakukan pendaftaran secara online. Untuk informasi lebih lanjut silahkan hubungi nomor tlp yang tertera di '.site_url());
            
            $this->email->attach($file);

            if ($this->email->send()) {

                $this->session->set_flashdata('pesan', '<strong>Alhamdulillah..</strong> Email berhasil dikirim.');
                $this->session->set_flashdata('jenis', 'alert-success');
                redirect('siswa','refresh');
                
            } else {
                $this->session->set_flashdata('pesan', '<strong>Maaf..</strong> Email gagal dikirim.');
                $this->session->set_flashdata('jenis', 'alert-danger');
                redirect('siswa','refresh');
            }

        } else {
            $this->cetakbuktidaftar('belum');         
            redirect('siswa','refresh');
            
        }
        

        
    }

}

/* End of file Siswa.php */
