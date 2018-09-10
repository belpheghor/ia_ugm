<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	function tampil_user() 
	{
		$ambil_user = $this->db->get('user');
		$pecah_user = $ambil_user->result_array();
		return $pecah_user;
	}
	function simpan_user($input)
	{
		$input['user_password'] = sha1($input['user_password']);
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('user_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['user_image'] = $this->upload->data('file_name');
		}
		$ambil = $this->db->insert('user', $input);
	}
	function ambil_data($id){
		$this->db->where('user_id', $id);
		$ambil=$this->db->get('user');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_user($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['user_image'];
		// untuk hapus foto
		unlink("assets/img/$hapus");
		// hapus data
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}
	function ubah_user($input, $id){
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('user_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['user_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			unlink("assets/img/$hapus");
			// upload foto baru
			$input['user_image'] = $this->upload->data('file_name');
		}
		$this->db->where('user_id', $id);
		$this->db->update('user', $input);
	}
	function ubah_status_user($id)
	{
		$status="";
		$data['user_status']="Pending";
		$this->db->query("UPDATE user SET user_status='$status' WHERE user_id !='$id'");
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
	}
	function select_user($id)
	{
		$status="";
		$data['user_status']="Accepted";
		$this->db->query("UPDATE user SET user_status='$status' WHERE user_id !='$id'");
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
	}

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */