<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstartup extends CI_Model {

	function tampil_startup() 
	{
		// $this->db->join('startup_founder', 'startup_founder.startup_id = startup.startup_id', 'left');
		$ambil_startup = $this->db->get('startup');
		$pecah_startup = $ambil_startup->result_array();
		return $pecah_startup;
	}
	function simpan_startup($input)
	{
		$config['upload_path']          = './assets/startup/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('startup_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['startup_image'] = $this->upload->data('file_name');
		}
		$ambil = $this->db->insert('startup', $input);
	}
	function ambil_data($id){
		$this->db->where('startup_id', $id);
		$ambil=$this->db->get('startup');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_startup($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['startup_image'];
		// untuk hapus foto
		unlink("assets/startup/$hapus");
		// hapus data
		$this->db->where('startup_id', $id);
		$this->db->delete('startup');
	}
	function ubah_startup($input, $id){
		$config['upload_path']          = './assets/startup/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('startup_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['startup_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			unlink("assets/startup/$hapus");
			// upload foto baru
			$input['startup_image'] = $this->upload->data('file_name');
		}
		$this->db->where('startup_id', $id);
		$this->db->update('startup', $input);
	}
	function ubah_status_startup($id)
	{
		$status="";
		$data['permission_status']="Pending";
		$this->db->query("UPDATE startup SET permission_status='$status' WHERE startup_id !='$id'");
		$this->db->where('startup_id', $id);
		$this->db->update('startup', $data);
	}
	function select_startup($id)
	{
		$status="";
		$data['permission_status']="Accepted";
		$this->db->query("UPDATE startup SET permission_status='$status' WHERE startup_id !='$id'");
		$this->db->where('startup_id', $id);
		$this->db->update('startup', $data);
	}

}

/* End of file Mstartup.php */
/* Location: ./application/models/Mstartup.php */