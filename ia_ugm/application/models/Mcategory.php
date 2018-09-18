<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategory extends CI_Model {

	function tampil_kategori()
	{
		// select * from news_category
		$ambil = $this->db->get('news_category');
		// pecah ke array multidimensi
		return $ambil->result_array();

	}
	function simpan_kategori($inputan)
	{
		$this->db->insert('news_category', $inputan);
	}

	function ambil_data($id){
		$this->db->where('category_id', $id);
		$ambil=$this->db->get('news_category');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_kategori($id){
		// hapus data
		$this->db->where('category_id', $id);
		$this->db->delete('news_category');
	}
	// parameter $input harus sama dengan variabel yang dibawah ($input)
	function ubah_kategori($inputan, $id){
		// ubah data di db
		// $id, $input harus sama dengan parameternya
		$this->db->where('category_id', $id);
		$this->db->update('news_category', $inputan);
	}
	function ubah_status_category($id)
	{
		$status="";
		$data['category_status']="Pending";
		$this->db->query("UPDATE news_category SET category_status='$status' WHERE category_id !='$id'");
		$this->db->where('category_id', $id);
		$this->db->update('news_category', $data);
	}
	function select_category($id)
	{
		$status="";
		$data['category_status']="Accepted";
		$this->db->query("UPDATE news_category SET category_status='$status' WHERE category_id !='$id'");
		$this->db->where('category_id', $id);
		$this->db->update('news_category', $data);
	}
}

	/* End of file Mcategory.php */
/* Location: ./application/models/Mcategory.php */