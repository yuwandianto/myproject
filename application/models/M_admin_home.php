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
            "title_jadwal" => $this->input->post('title_jadwal', TRUE)
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
}
