<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnews extends CI_Model {

	function display_news()
	{
		// join dengan tabel user 
		$this->db->join('user', 'news.user_id = user.user_id', 'left');
		// join dengan tabel kategori
		$this->db->join('news_category', 'news.category_id = news_category.category_id', 'left');
		$this->db->order_by('news.news_release', 'desc');
		$ambil=$this->db->get('news');
		return $ambil->result_array();
	} 
	function simpan_tagnews($tag_id,$id){
		$input['news_id']=$id;
		$input['tag_id']=$tag_id;
		$this->db->insert('news_tag', $input);
	}
	// function news_detail($news_id)
	// {
	// 	// join dg tabel kategori
	// 	$this->db->join('news_category', 'news_category.category_id = news.category_id', 'left');
	// 	// join dengan tabel user
	// 	$this->db->join('user', 'news.user_id = user.user_id', 'left');
	// 	$this->db->where('news_id', $news_id);
	// 	$ambil=$this->db->get('news');
	// 	return $ambil->row_array();
	// }

	function related_news($category_id, $news_id){
		$this->db->order_by('news.news_release', 'desc');
		$this->db->not_like('news_id',$news_id);
		$this->db->where('category_id', $category_id);
		$this->db->limit('3');
		$ambil=$this->db->get('news');
		return $ambil->result_array();	
	}

	function simpan_nama($input)
	{
		// tanggal buat news otomatis
		$input['news_created'] = date("Y_m_d");
		// simpan ke database
		$this->db->insert('news', $input);
		// insert id (agar foto masuk sesuai dengan id datanya)
		$input['news_id'] = $this->db->insert_id();
		$id_news = $input['news_id'];
		return $id_news;
	}
	function simpan_gambar($id, $input)
	{
		$config['upload_path']          = './assets/news/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		foreach ($_FILES as $key => $value) {
			// $no = $key+1
			$id_upload = $this->upload->do_upload($key);
			if ($id_upload){

				$input[$key] = $this->upload->data('file_name');
			}
			// simpan ke database [gambar-gambar]
			$this->db->where('news_id', $id);
			$this->db->update('news', $input);
		}
		
	}
	function ambil_data($id){
		$this->db->where('news.news_id', $id);
		$this->db->join('news_tag', 'news.news_id = news_tag.news_id', 'left');
		$ambil=$this->db->get('news');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_news($id)
	{
		$data=$this->ambil_data($id);
		// hapus data di database
		unset($data['news_id']);
		unset($data['user_id']);
		unset($data['category_id']);
		unset($data['news_title']);
		unset($data['news_summary']);
		unset($data['news_content']);
		unset($data['news_created']);
		unset($data['news_updated']);
		unset($data['news_released']);
		// hapus foto di folder
		foreach ($data as $key => $value) {
			if (file_exists("./assets/news/$value")) {
				unlink("./assets/news/$value");
			}
		}
		$this->db->where('news_id', $id);
		$this->db->delete('news');
	}
	function hapus_tag_news($id)
	{
		$this->db->where('news_id', $id);
		$this->db->delete('news_tag');
	}
	function ubah_news($id, $input){
		$config['upload_path']          = './assets/news/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		foreach ($_FILES as $key => $value) {
			$upload=$this->upload->do_upload($key);
			if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
				$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
				$hapus=$detail[$key];
				if (file_exists("./assets/news/$hapus")) {
					unlink("assets/news/$hapus");
				}
			// hapus foto yang lama *bisakan pakai petik 2
				
			// upload foto baru
				$input[$key] = $this->upload->data('file_name');
			}
			$this->hapus_tag_news($id);
			foreach ($input['tag_id'] as $key => $id_tag) {
				$inputan['tag_id'] = $id_tag;
				$inputan['news_id'] = $id;
				$this->db->insert('news_tag', $inputan);
			}
			$tag_id=$input['tag_id'];

			$data['user_id']=$input['user_id'];
			$data['category_id']=$input['category_id'];
			$data['news_title']=$input['news_title'];
			$data['news_status']=$input['news_status'];
			$data['news_release']=$input['news_release'];
			$data['news_summary']=$input['news_summary'];
			$data['news_content']=$input['news_content'];
			$data['news_updated']=date("Y_m_d");

			$this->db->where('news_id', $id);
			$this->db->update('news', $data);
		}
		
	}
	function ubah_status_news($id)
	{
		$status="";
		$data['permission_status']="Pending";
		$this->db->query("UPDATE news SET permission_status='$status' WHERE news_id !='$id'");
		$this->db->where('news_id', $id);
		$this->db->update('news', $data);
	}
	function select_news($id)
	{
		$status="";
		$data['permission_status']="Accepted";
		$this->db->query("UPDATE news SET permission_status='$status' WHERE news_id !='$id'");
		$this->db->where('news_id', $id);
		$this->db->update('news', $data);
	}

}

/* End of file Mnews.php */
/* Location: ./application/models/Mnews.php */