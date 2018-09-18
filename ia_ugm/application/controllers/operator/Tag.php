<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mtag');
	}
	

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		// model Mtag menjalankan fungsi tampil_tag()
		$data['tag']=$this->Mtag->tampil_tag();

		// load view

		$this->load->view('operator/header', $data); 
		$this->load->view('operator/tag/tampil', $data);
		$this->load->view('operator/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mtag jalankan fungsi simpan_tag
			$this->Mtag->simpan_tag($inputan);

			// redirect tampilan operator/tag/index
			redirect('operator/tag','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data); 
		$this->load->view('operator/tag/tambah');
		$this->load->view('operator/footer'); 
		
	}

	function delete($id){
		
		$this->Mtag->hapus_tag($id);

		// kembali ke controller pegawai function tampil

		redirect('operator/tag','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mtag->ubah_tag($inputan,$id);
			redirect('operator/tag','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['tag'] = $this->Mtag->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/tag/ubah', $data);
		$this->load->view('operator/footer');
	}

	function status($id)
	{
		$this->Mtag->ubah_status_tag($id);
		redirect('operator/tag','refresh');
	}
}

/* End of file Tag.php */
/* Location: ./application/controllers/operator/Tag.php */