<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    function lengkapidata($data) {
        $this->db->where('nisn', $this->session->userdata('nisn'));
        $simpan = $this->db->update('tbl_registrasi', $data);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
        
    }

    function uplodfoto()
    {
        
        $config['upload_path'] = './uploads/foto/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '5000';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $object = ['foto' => $this->upload->data('file_name')];
            $this->db->where('nisn', $this->session->userdata('nisn'));
            $this->db->update('tbl_registrasi', $object);
            return 'success';
        }
        
    }

    function uplodkk()
    {
        
        $config['upload_path'] = './uploads/kk/';
        $config['allowed_types'] = 'jpg|png|pdf';
        $config['max_size']  = '5000';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $object = ['bukti_kk' => $this->upload->data('file_name')];
            $this->db->where('nisn', $this->session->userdata('nisn'));
            $this->db->update('tbl_registrasi', $object);
            return 'success';
        }
        
    }

    function uplodraport()
    {
        
        $config['upload_path'] = './uploads/raport/';
        $config['allowed_types'] = 'jpg|png|pdf';
        $config['max_size']  = '5000';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $object = ['bukti_raport' => $this->upload->data('file_name')];
            $this->db->where('nisn', $this->session->userdata('nisn'));
            $this->db->update('tbl_registrasi', $object);
            return 'success';
        }
        
    }

    function uplodprestasi()
    {
        
        $config['upload_path'] = './uploads/prestasi/';
        $config['allowed_types'] = 'jpg|png|pdf';
        $config['max_size']  = '5000';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $object = ['bukti_prestasi' => $this->upload->data('file_name')];
            $this->db->where('nisn', $this->session->userdata('nisn'));
            $this->db->update('tbl_registrasi', $object);
            return 'success';
        }
        
    }

}

/* End of file M_siswa.php */
