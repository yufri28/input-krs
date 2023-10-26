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
		$data_mk = $this->m_krs->get_data_mk(1);
		$jumlah_mk = $this->m_krs->count_all_mk();
		$data = [
			'data_krs' => $data_krs,
			'data_semester' => $data_semester,
			'data_mk' => $data_mk,
			'jumlah_mk' => $jumlah_mk
		];	
		$this->load->view('admin/krs/add',$data);
	}

	public function simpan_krs(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			echo "<pre>";
			print_r ($this->input->post('kode_mk'));
			echo "</pre>";
			$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		}
		redirect('krs/show_add');
	}

}