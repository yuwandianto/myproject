<?php

class M_admin_home extends CI_Model
{
    public function hitungjumlahsiswa()
    {
        $query = $this->db->get('tbl_registrasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function tampildata()
    {
        return $this->db->get('jadwal')->row_array();
    }
    public function tampildata1()
    {
        return $this->db->get('tabel_jadwal')->result_array();
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jadwal');
    }

    public function ambil_id($id)
    {
        return $this->db->get_where('jadwal', ['id' => $id])->row_array();
    }


    public function proses_edit_data()
    {
        $data = [
            "nama_jadwal" => $this->input->post('nama_jadwal', TRUE),
            "title_jadwal" => $this->input->post('title_jadwal', TRUE),
            "ket" => $this->input->post('ket', TRUE)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jadwal', $data);
    }

    public function hapus_tabel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabel_jadwal');
    }

    public function ambil_id_tabel($id)
    {
        return $this->db->get_where('tabel_jadwal', ['id' => $id])->row_array();
    }

    public function proses_edit_tabel()
    {
        $data = [
            "kegiatan" => $this->input->post('kegiatan', TRUE),
            "dibuka" => $this->input->post('dibuka', TRUE),
            "ditutup" => $this->input->post('ditutup', TRUE)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tabel_jadwal', $data);
    }

    public function proses_tambah_tabel()
    {
        $data = [
            "kegiatan" => $this->input->post('kegiatan', TRUE),
            "dibuka" => $this->input->post('dibuka', TRUE),
            "ditutup" => $this->input->post('ditutup', TRUE)
        ];

        $this->db->insert('tabel_jadwal', $data);
    }

    public function tampil_data_berita()
    {
        return $this->db->get('berita')->row_array();
    }

    public function ambil_id_berita($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }

    public function proses_edit_berita()
    {
        $data = [
            "nama_berita" => $this->input->post('nama_berita', TRUE),
            "title_berita" => $this->input->post('title_berita', TRUE)
        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita', $data);
    }

    public function proses_hapus_berita($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }

    public function tampil_data_isiberita()
    {
        return $this->db->get('isi_berita')->result_array();
    }

    public function ambil_id_isiberita($id)
    {
        return $this->db->get_where('isi_berita', ['id' => $id])->row_array();
    }

    public function proses_tambah_isib()
    {
        $data = [
            "berita" => $this->input->post('berita', TRUE),
            "link" => '#'
        ];

        $this->db->insert('isi_berita', $data);
    }

    public function proses_edit_isib()
    {
        $data = [
            "berita"    => $this->input->post('berita', TRUE),
            "link"      => '#'             // "link" => $this->input->post('link', TRUE)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('isi_berita', $data);
    }

    public function ambil_id_isib($id)
    {
        return $this->db->get_where('isi_berita', ['id' => $id])->row_array();
    }

    public function hapus_isib($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('isi_berita');
    }
    public function tampil_p()
    {
        return $this->db->get('tbl_registrasi')->result_array();
    }

    public function tampil_j()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function tampil_sekolah()
    {
        return $this->db->get('tbl_sekolah')->row_array();
    }

    public function proses_ubah_pengguna()
    {
        $data = [
            "xemail" => $this->input->post('xemail', TRUE),
            "xpass" => $this->input->post('xpass', TRUE),
            "nama" => $this->input->post('nama', TRUE),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_pengguna', $data);
    }
}
