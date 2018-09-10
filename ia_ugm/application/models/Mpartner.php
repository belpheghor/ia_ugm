<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpartner extends CI_Model {

	function tampil_partner() 
	{
		$ambil_partner = $this->db->get('partner');
		$pecah_partner = $ambil_partner->result_array();
		return $pecah_partner;
	}
	function simpan_partner($input)
	{
		$config['upload_path']          = './assets/partner/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('partner_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['partner_image'] = $this->upload->data('file_name');
		}
		$ambil = $this->db->insert('partner', $input);
	}
	function ambil_data($id){
		$this->db->where('partner_id', $id);
		$ambil=$this->db->get('partner');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_partner($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['partner_image'];
		// untuk hapus foto
		unlink("assets/partner/$hapus");
		// hapus data
		$this->db->where('partner_id', $id);
		$this->db->delete('partner');
	}
	function ubah_partner($input, $id){
		$config['upload_path']          = './assets/partner/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('partner_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['partner_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/partner/$hapus")) {
				unlink("./assets/partner/$hapus");
			}
			// upload foto baru
			$input['partner_image'] = $this->upload->data('file_name');
		}
		$this->db->where('partner_id', $id);
		$this->db->update('partner', $input);
	}

}

/* End of file Mpartner.php */
/* Location: ./application/models/Mpartner.php */