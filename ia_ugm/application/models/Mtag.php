<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtag extends CI_Model {

	
	function tampil_tag()
	{
		// select * from tag
		$ambil = $this->db->get('tag');
		// pecah ke array multidimensi
		return $ambil->result_array();

	}
	function simpan_tag($inputan)
	{
		$this->db->insert('tag', $inputan);
	}

	function ambil_data($id){
		$this->db->where('tag_id', $id);
		$ambil=$this->db->get('tag');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_tag($id){
		// hapus data
		$this->db->where('tag_id', $id);
		$this->db->delete('tag');
	}
	// parameter $input harus sama dengan variabel yang dibawah ($input)
	function ubah_tag($inputan, $id){
		// ubah data di db
		// $id, $input harus sama dengan parameternya
		$this->db->where('tag_id', $id);
		$this->db->update('tag', $inputan);
	}
	function ubah_status_tag($id)
	{
		$status="";
		$data['tag_status']="Pending";
		$this->db->query("UPDATE tag SET tag_status='$status' WHERE tag_id !='$id'");
		$this->db->where('tag_id', $id);
		$this->db->update('tag', $data);
	}
	function select_tag($id)
	{
		$status="";
		$data['tag_status']="Accepted";
		$this->db->query("UPDATE tag SET tag_status='$status' WHERE tag_id !='$id'");
		$this->db->where('tag_id', $id);
		$this->db->update('tag', $data);
	}

}

/* End of file Mtag.php */
/* Location: ./application/models/Mtag.php */