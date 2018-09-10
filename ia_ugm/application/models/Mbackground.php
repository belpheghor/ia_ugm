<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbackground extends CI_Model {
 
	function tampil_background() 
	{
		$ambil_background = $this->db->get('background');
		$pecah_background = $ambil_background->result_array();
		return $pecah_background;
	}
	function simpan_background()
	{
		$config['upload_path']          = './assets/background/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('background_img');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
		$data['background_img']=$this->upload->data('file_name');
		$this->db->insert('background', $data);
		}
	}
	function ambil_data($id){
		$this->db->where('background_id', $id);
		$ambil=$this->db->get('background');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_background($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['background_img'];
		// untuk hapus foto
		unlink("assets/background/$hapus");
		// hapus data
		$this->db->where('background_id', $id);
		$this->db->delete('background');
	}
	function ubah_background($input, $id){
		$config['upload_path']          = './assets/background/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('background_img');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['background_img'];
			// hapus foto yang lama *bisakan pakai petik 2
			unlink("assets/background/$hapus");
			// upload foto baru
			$input['background_img'] = $this->upload->data('file_name');
		}
		$this->db->where('background_id', $id);
		$this->db->update('background', $input);
	}
		function select_background($background_id){
			$none="none";
			$data['background_status'] = "selected";
			$this->db->query("UPDATE background SET background_status='$none' WHERE background_id!='$background_id'");
			$this->db->where('background_id', $background_id);
			$this->db->update('background', $data);
		}
		function ambil_background_selected($status)
		{
			$this->db->where('background_status', $status);
			$ambil = $this->db->get('background');
			$pecah = $ambil->row_array();
			return $pecah;
		}
	

}
/* End of file Mbackground.php */
/* Location: ./application/models/Mbackground.php */