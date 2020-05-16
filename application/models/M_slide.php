<?php

class M_slide extends CI_Model
{
    public function ambil_id_slide($id)

    {
        return $this->db->get_where('tbl_slide', ['id' => $id])->row_array();
    }

    public function tampil_data()
    {
        return $this->db->get('tbl_slide')->result_array();
    }

    public function proses_edit_slide()
    {
        $data = [
            "judul" => $this->input->post('judul', TRUE),
            "text"  => $this->input->post('text', TRUE),
            "gambar"  => $this->input->post('gambar', TRUE)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_slide', $data);
    }

    public function hapus_slide($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_slide');
    }

    public function updateFile($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbl_slide', $data);
    }
}
