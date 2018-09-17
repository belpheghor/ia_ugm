<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstartup_founder extends CI_Model {
	function tampil_startup_founder()
	{
		$this->db->join('startup', 'startup_founder.startup_id = startup.startup_id', 'left');
		$this->db->join('faculty', 'startup_founder.faculty_id = faculty.faculty_id', 'left');
		$this->db->join('major', 'startup_founder.major_id = major.major_id', 'left');
		$ambil=$this->db->get('startup_founder');
		$pecah = $ambil->result_array();
		return $pecah;
	}
	function simpan_startup_founder($input)
	{
		$config['upload_path']          = './assets/startup_founder/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('sf_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['sf_image']=$this->upload->data('file_name');
		}
		$this->db->insert('startup_founder', $input);
	}
	function ambil_data($id){
		$this->db->where('sf_id', $id);
		$ambil=$this->db->get('startup_founder');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_startup_founder($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['sf_image'];
		// untuk hapus foto
		unlink("assets/startup_founder/$hapus");
		// hapus data
		$this->db->where('sf_id', $id);
		$this->db->delete('startup_founder');
	}
	function ubah_startup_founder($input, $id){
		$config['upload_path']          = './assets/startup_founder/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('sf_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['sf_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/startup_founder/$hapus")) {
				unlink("./assets/startup_founder/$hapus");
			}
			// upload foto baru
			$input['sf_image'] = $this->upload->data('file_name');
		}
		$this->db->where('sf_id', $id);
		$this->db->update('startup_founder', $input);
	}
	function ubah_status_sf($id)
	{
		$status="";
		$data['sf_status']="Pending";
		$this->db->query("UPDATE startup_founder SET sf_status='$status' WHERE sf_id !='$id'");
		$this->db->where('sf_id', $id);
		$this->db->update('sf', $data);
	}
	function select_sf($id)
	{
		$status="";
		$data['sf_status']="Accepted";
		$this->db->query("UPDATE startup_founder SET sf_status='$status' WHERE sf_id !='$id'");
		$this->db->where('sf_id', $id);
		$this->db->update('sf', $data);
	}
	

}

/* End of file Mstartup_founder.php */
/* Location: ./application/models/Mstartup_founder.php */