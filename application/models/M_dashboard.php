<?php


class M_dashboard extends Ci_Model
{
    public function tampil_data()
    {
        return $this->db->get('jadwal')->row_array();
    }
    public function tampil_data_tabel()
    {
        return $this->db->get('tabel_jadwal')->result_array();
    }
    public function tampil_data_berita()
    {
        return $this->db->get('berita')->row_array();
    }
    public function tampil_data_isiberita()
    {
        return $this->db->get('isi_berita')->result_array();
    }
    public function tampil_data_slider()
    {
        return $this->db->get('tbl_slide')->result_array();
    }

    public function pdf()
    {
        return $this->db->get('tbl_panduan')->result();
    }
}
