<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprogram extends CI_Model {
	function tampil_program(){
		
		$this->db->order_by('program.program_level', 'asc');
		$this->db->limit('4');
		$ambil_program = $this->db->get('program');
		$pecah_program = $ambil_program->result_array();
		return $pecah_program;
	}
	function tampil_program2(){
		
	
		$ambil_program = $this->db->get('program');
		$pecah_program = $ambil_program->result_array();
		return $pecah_program;
	}
	function simpan_program($input)
	{
		$config['upload_path']          = './assets/program/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
 
	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('program_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['program_image'] = $this->upload->data('file_name');
		}
		$ambil = $this->db->insert('program', $input);
	}
	function ambil_data($id){
		$this->db->where('program_id', $id);
		$ambil=$this->db->get('program');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_program($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['program_image'];
		// untuk hapus foto
		unlink("assets/program/$hapus");
		// hapus data
		$this->db->where('program_id', $id);
		$this->db->delete('program');
	}
	function ubah_program($input, $id){
		$config['upload_path']          = './assets/program/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('program_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['program_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/program/$hapus")) {
				unlink("./assets/program/$hapus");
			}
			// upload foto baru
			$input['program_image'] = $this->upload->data('file_name');
		}
		$this->db->where('program_id', $id);
		$this->db->update('program', $input);
	}
	

}

/* End of file Mprogram.php */
/* Location: ./application/models/Mprogram.php */