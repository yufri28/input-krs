<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_krs extends CI_Model
{
    public function get_data_semester($status)
    {
        $this->db->where('status',$status);
        return $this->db->get('semester')->result();
    }
    public function get_data_mk($semester)
    {
        $this->db->join('semester', 'semester.id_semester = mata_kuliah.f_id_semester');
        $this->db->where('f_id_semester',$semester);
        return $this->db->get('mata_kuliah')->result();
    }
    public function get_all_mk($semester)
    {
        $this->db->join('semester', 'semester.id_semester = mata_kuliah.f_id_semester');
        $this->db->where('f_id_semester',$semester);
        return $this->db->get('mata_kuliah')->result();
    }
    public function count_all_mk()
    {
        return $this->db->count_all('mata_kuliah');
    }
}