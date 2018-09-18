<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstaff extends CI_Model {

	
	function tampil_staff()
	{
		$this->db->where('person_level', 'staff');
		$ambil=$this->db->get('person');
		$pecah = $ambil->result_array();
		return $pecah;
	}
	function simpan_staff($input)
	{
		$config['upload_path']          = './assets/staff/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('person_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['person_image']=$this->upload->data('file_name');
		}
		$this->db->insert('person', $input);
	}
	function ambil_data($id){
		$this->db->where('person_id', $id);
		$ambil=$this->db->get('person');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_staff($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['person_image'];
		// untuk hapus foto
		unlink("assets/staff/$hapus");
		// hapus data
		$this->db->where('person_id', $id);
		$this->db->delete('person');
	}
	function ubah_staff($input, $id){
		$config['upload_path']          = './assets/staff/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('person_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['person_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/staff/$hapus")) {
				unlink("./assets/staff/$hapus");
			}
			// upload foto baru
			$input['person_image'] = $this->upload->data('file_name');
		}
		$this->db->where('person_id', $id);
		$this->db->update('person', $input);
	}
	function ubah_status_staff($id)
	{
		$status="";
		$data['person_status']="Pending";
		$this->db->query("UPDATE person SET person_status='$status' WHERE person_id !='$id'");
		$this->db->where('person_id', $id);
		$this->db->update('person', $data);
	}
	function select_staff($id)
	{
		$status="";
		$data['person_status']="Accepted";
		$this->db->query("UPDATE person SET person_status='$status' WHERE person_id !='$id'");
		$this->db->where('person_id', $id);
		$this->db->update('person', $data);
	}

}

/* End of file Mstaff.php */
/* Location: ./application/models/Mstaff.php */