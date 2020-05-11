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
        return $this->db->get('judul')->result_array();
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('judul');
    }

    public function ambil_id($id)
    {
        return $this->db->get_where('judul', ['id' => $id])->row_array();
    }


    public function proses_edit_data()
    {
        $data = [
            "judul1" => $this->input->post('judul1', TRUE)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('judul', $data);
    }
}
