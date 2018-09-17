<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmajor extends CI_Model {

	function tampil_jurusan()
	{
		$this->db->join('faculty', 'major.faculty_id = faculty.faculty_id', 'left');
		// select * from major
		$ambil = $this->db->get('major');
		// pecah ke array multidimensi
		return $ambil->result_array();

	}
	function simpan_jurusan($inputan)
	{
		$this->db->insert('major', $inputan);
	}

	function ambil_data($id){
		$this->db->join('faculty', 'major.faculty_id = faculty.faculty_id', 'left');
		$this->db->where('major_id', $id);
		$ambil=$this->db->get('major');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_jurusan($id){
		// hapus data
		$this->db->where('major_id', $id);
		$this->db->delete('major');
	}
	// parameter $input harus sama dengan variabel yang dibawah ($input)
	function ubah_jurusan($inputan, $id){
		// ubah data di db
		// $id, $input harus sama dengan parameternya
		$this->db->where('major_id', $id);
		$this->db->update('major', $inputan);
	}
	function ubah_status_major($id)
	{
		$status="";
		$data['major_status']="Pending";
		$this->db->query("UPDATE major SET major_status='$status' WHERE major_id !='$id'");
		$this->db->where('major_id', $id);
		$this->db->update('major', $data);
	}
	function select_major($id)
	{
		$status="";
		$data['major_status']="Accepted";
		$this->db->query("UPDATE major SET major_status='$status' WHERE major_id !='$id'");
		$this->db->where('major_id', $id);
		$this->db->update('major', $data);
	}
}

	/* End of file Mmajor.php */
/* Location: ./application/models/Mmajor.php */