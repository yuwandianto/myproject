<?php


class M_dashboard extends Ci_Model
{
    public function tampil_data()
    {
        return $this->db->get('jadwal')->row_array();
    }
    public function tampil_data_berita()
    {
        return $this->db->get('berita')->row_array();
    }
    public function tampil_data_tabel()
    {
        return $this->db->get('tabel_jadwal')->result_array();
    }
}
