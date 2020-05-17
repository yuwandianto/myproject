<?php


class Slide extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_slide');
        $this->load->library('form_validation');
    }


    public function Slide()
    {
        $data['slide'] = $this->M_slide->tampil_data();
        $data['title'] = 'Setting Slide ';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/slide', $data);
        $this->load->view('back/footer');
    }

    public function tambah_slide()
    {
        $data['title'] = 'Tambah Slide ';
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/tambah_slide', $data);
        $this->load->view('back/footer');
    }

    public function proses_tambah_slide()
    {

        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|JPG|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Upload";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $judul = $this->input->post('judul', true);
            $text = $this->input->post('text', true);
            $data = array(
                'judul'    => $judul,
                'text'    => $text,
                'gambar' => $gambar
            );
            $this->db->insert('tbl_slide', $data);
            redirect('Slide/slide');
        }
    }

    public function edit_slide($id)
    {
        $data['title'] = 'Edit Slide ';
        $data['id_slide'] = $this->M_slide->ambil_id_slide($id);
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/topbar');
        $this->load->view('back/slide/edit_slide', $data);
        $this->load->view('back/footer');
    }

    public function proses_edit_slide()
    {
        $id = $this->input->post('id');

        $data = $this->M_slide->ambil_id_slide($id);
        $nama = './assets/images/' . $data['gambar'];

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'png|jpg|gif';
            $config['max_size']             = 2048;
            $config['max_width']            = 40000;
            $config['max_height']           = 40000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('back/slide/slide', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul'    => $this->input->post('judul'),
                    'text'    => $this->input->post('text'),
                    'gambar'    => $name
                );
                $update = $this->M_slide->updateFile($id, $data);

                if ($update) {
                    redirect('Slide');
                } else {
                    echo "Gagal";
                }
            }
        } else {
            echo "Gagal hapus";
        }
    }

    public function hapus_slide($id)
    {
        $this->M_slide->hapus_slide($id);
        redirect('Slide/slide');
    }
}
