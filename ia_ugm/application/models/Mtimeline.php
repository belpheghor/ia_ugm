<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtimeline extends CI_Model {
	function tampil_timeline(){
		
		$this->db->join('program', 'timeline.program_id = program.program_id', 'left');
		$this->db->limit('4');
		$ambil_timeline = $this->db->get('timeline');
		$pecah_timeline = $ambil_timeline->result_array();
		return $pecah_timeline;
	}
	function simpan_timeline($input)
	{
		$config['upload_path']          = './assets/timeline/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';

	// panggil library ->yg bertindak utk upload 
		$this->load->library("upload",$config);
		// bagian upload. function do_upload( berfungsi untuk mengupload)
		$upload =$this->upload->do_upload('timeline_image');
		// if
		if ($upload){
			// yang bertindak untuk upload adalah function data, mendapatkan nama_foto
			$input['timeline_image'] = $this->upload->data('file_name');
		}
		$ambil = $this->db->insert('timeline', $input);
	}

	public function toDate($data){
            $max = count($data['timeline_start']);
            for ($i=0; $i < $max ; $i++) { 
                $google_date = $data['timeline_start'][$i];
                $date = DateTime::createFromFormat('Ymd', $google_date);
                $data['dimension'][$i] = $date->format('D, j');
            }
            return $data;

    }

	function ambil_data($id){
		$this->db->where('timeline_id', $id);
		$ambil=$this->db->get('timeline');
		$pecah=$ambil->row_array();
		return $pecah;
	}
	function hapus_timeline($id)
	{
		$data=$this->ambil_data($id);
		$hapus=$data['timeline_image'];
		// untuk hapus foto
		unlink("assets/timeline/$hapus");
		// hapus data
		$this->db->where('timeline_id', $id);
		$this->db->delete('timeline');
	}
	function ubah_timeline($input, $id){
		$config['upload_path']          = './assets/timeline/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$this->load->library("upload", $config);
		$upload=$this->upload->do_upload('timeline_image');
		if ($upload) {
			// akses function ambil_data() untuk ambil nama foto yang lama
			$detail=$this->ambil_data($id);
			// ambil nama_foto yang lama
			$hapus=$detail['timeline_image'];
			// hapus foto yang lama *bisakan pakai petik 2
			if (file_exists("./assets/timeline/$hapus")) {
				unlink("./assets/timeline/$hapus");
			}
			// upload foto baru
			$input['timeline_image'] = $this->upload->data('file_name');
		}
		$this->db->where('timeline_id', $id);
		$this->db->update('timeline', $input);
	}
	function ubah_status_timeline($id)
	{
		$status="";
		$data['timeline_status']="Pending";
		$this->db->query("UPDATE timeline SET timeline_status='$status' WHERE timeline_id !='$id'");
		$this->db->where('timeline_id', $id);
		$this->db->update('timeline', $data);
	}
	function select_timeline($id)
	{
		$status="";
		$data['timeline_status']="Accepted";
		$this->db->query("UPDATE timeline SET timeline_status='$status' WHERE timeline_id !='$id'");
		$this->db->where('timeline_id', $id);
		$this->db->update('timeline', $data);
	}
	
	

}

/* End of file Mtimeline.php */
/* Location: ./application/models/Mtimeline.php */