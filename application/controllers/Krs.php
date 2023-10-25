<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_krs');
	}

	public function index()
	{
		$data_krs = $this->db->query(
			"SELECT * FROM krs JOIN mata_kuliah mk 
			ON mk.kode_mk=krs.f_kode_mk JOIN 
			mahasiswa mhs ON mhs.nim=krs.f_nim JOIN semester sem ON sem.id_semester=krs.f_id_semester")->result();
		
		$data = [
			'data_krs' => $data_krs
		];	
		$this->load->view('admin/krs/index',$data);
	}

	public function show_add()
	{
		$data_krs = $this->db->query(
			"SELECT * FROM krs JOIN mata_kuliah mk 
			ON mk.kode_mk=krs.f_kode_mk JOIN 
			mahasiswa mhs ON mhs.nim=krs.f_nim JOIN semester sem ON sem.id_semester=krs.f_id_semester");
		
		$data_semester = $this->m_krs->get_data_semester('active');

		$data = [
			'data_krs' => $data_krs,
			'data_semester' => $data_semester
		];	
		$this->load->view('admin/krs/add',$data);
	}

}