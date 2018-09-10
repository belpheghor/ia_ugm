<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnewstag extends CI_Model {

 	function tampil_newstag()
 	{
 		$this->db->join('news', 'news_tag.news_id = news.news_id', 'left');
 		$this->db->join('tag', 'news_tag.tag_id = tag.tag_id', 'left');
 		$ambil = $this->db->get('news_tag');
 		return $ambil->result_array();
 	}
 	function simpan_newstag($inputan)
	{
		$this->db->insert('news_tag', $inputan);
	}

	function ambil_data($id){
		$this->db->where('newstag_id', $id);
		$ambil=$this->db->get('news_tag');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_newstag($id){
		// hapus data
		$this->db->where('newstag_id', $id);
		$this->db->delete('news_tag');
	}
	// parameter $input harus sama dengan variabel yang dibawah ($input)
	function ubah_newstag($inputan, $id){
		// ubah data di db
		// $id, $input harus sama dengan parameternya
		$this->db->where('newstag_id', $id);
		$this->db->update('news_tag', $inputan);
	}
	

}

/* End of file Mnewstag.php */
/* Location: ./application/models/Mnewstag.php */