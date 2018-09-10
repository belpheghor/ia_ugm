<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmentor extends CI_Model {

	function tampil_mentor()
	{
		$this->db->where('person_level', 'mentor');
		$this->db->order_by('person.person_priority', 'asc');
		$this->db->limit('4');
		$ambil=$this->db->get('person');
		$pecah = $ambil->result_array();
		return $pecah;
	}

	function tampil_mentor_all()
	{
		$this->db->where('person_level', 'mentor');
		$this->db->order_by('person.person_priority', 'asc');
		$ambil=$this->db->get('person');
		$pecah = $ambil->result_array();
		return $pecah;
	}

	function simpan_mentor($input)
	{
		$config['upload_path']          = './assets/mentor/';
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
	function hapus_mentor($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['person_image'];
		// untuk hapus foto
		unlink("assets/mentor/$hapus");
		// hapus data
		$this->db->where('person_id', $id);
		$this->db->delete('person');
	}
	function ubah_mentor($input, $id){
		$config['upload_path']          = './assets/mentor/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('person_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['person_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/mentor/$hapus")) {
				unlink("./assets/mentor/$hapus");
			}
			// upload foto baru
			$input['person_image'] = $this->upload->data('file_name');
		}
		$this->db->where('person_id', $id);
		$this->db->update('person', $input);
	}	

}

/* End of file Mmentor.php */
/* Location: ./application/models/Mmentor.php */