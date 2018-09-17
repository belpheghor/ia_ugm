<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfaculty extends CI_Model {

	function tampil_fakultas()
	{
		// select * from faculty
		$ambil = $this->db->get('faculty');
		// pecah ke array multidimensi
		return $ambil->result_array();

	}
	function simpan_fakultas($inputan)
	{
		$this->db->insert('faculty', $inputan);
	}

	function ambil_data($id){
		$this->db->where('faculty_id', $id);
		$ambil=$this->db->get('faculty');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_fakultas($id){
		// hapus data
		$this->db->where('faculty_id', $id);
		$this->db->delete('faculty');
	}
	// parameter $input harus sama dengan variabel yang dibawah ($input)
	function ubah_fakultas($inputan, $id){
		// ubah data di db
		// $id, $input harus sama dengan parameternya
		$this->db->where('faculty_id', $id);
		$this->db->update('faculty', $inputan);
	}
	function ubah_status_faculty($id)
	{
		$status="";
		$data['faculty_status']="Pending";
		$this->db->query("UPDATE faculty SET faculty_status='$status' WHERE faculty_id !='$id'");
		$this->db->where('faculty_id', $id);
		$this->db->update('faculty', $data);
	}
	function select_faculty($id)
	{
		$status="";
		$data['faculty_status']="Accepted";
		$this->db->query("UPDATE faculty SET faculty_status='$status' WHERE faculty_id !='$id'");
		$this->db->where('faculty_id', $id);
		$this->db->update('faculty', $data);
	}
}

	/* End of file Mfaculty.php */
/* Location: ./application/models/Mfaculty.php */