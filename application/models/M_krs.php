<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_krs extends CI_Model
{
    public function get_data_semester($status)
    {
        $this->db->where('status',$status);
        return $this->db->get('semester');
    }
}