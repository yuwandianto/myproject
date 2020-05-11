<?php


class M_dashboard extends Ci_Model
{
    public function tampil_data()
    {
        return $this->db->get('judul')->result_array();
    }
}
