<?php

class M_slide extends CI_Model
{
    public function ambil_id_slide1($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set1()
    {
        $data = [
            "slide1" => $this->input->post('slide1', TRUE),
            "title1" => $this->input->post('title1', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }
    public function ambil_id_slide2($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set2()
    {
        $data = [
            "slide2" => $this->input->post('slide2', TRUE),
            "title2" => $this->input->post('title2', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }

    public function ambil_id_slide3($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set3()
    {
        $data = [
            "slide3" => $this->input->post('slide3', TRUE),
            "title3" => $this->input->post('title3', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }


    public function ambil_id_slide4($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set4()
    {
        $data = [
            "slide4" => $this->input->post('slide4', TRUE),
            "title4" => $this->input->post('title4', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }
    public function ambil_id_slide5($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set5()
    {
        $data = [
            "slide5" => $this->input->post('slide5', TRUE),
            "title5" => $this->input->post('title5', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }


    public function ambil_id_slide6($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set6()
    {
        $data = [
            "slide6" => $this->input->post('slide6', TRUE),
            "title6" => $this->input->post('title6', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }

    public function ambil_id_slide7($id)
    {
        return $this->db->get_where('slide', ['id' => $id])->row_array();
    }

    public function set7()
    {
        $data = [
            "slide7" => $this->input->post('slide7', TRUE),
            "title7" => $this->input->post('title7', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('slide', $data);
    }
}
