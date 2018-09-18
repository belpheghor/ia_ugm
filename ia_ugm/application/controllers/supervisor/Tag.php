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
		$data['login'] = $this->session->userdata("supervisor");
		// model Mtag menjalankan fungsi tampil_tag()
		$data['tag']=$this->Mtag->tampil_tag();

		// load view

		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/tag/tampil', $data);
		$this->load->view('supervisor/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mtag jalankan fungsi simpan_tag
			$this->Mtag->simpan_tag($inputan);

			// redirect tampilan supervisor/tag/index
			redirect('supervisor/tag','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/tag/tambah');
		$this->load->view('supervisor/footer'); 
		
	}

	function delete($id){
		
		$this->Mtag->hapus_tag($id);

		// kembali ke controller pegawai function tampil

		redirect('supervisor/tag','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mtag->ubah_tag($inputan,$id);
			redirect('supervisor/tag','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['tag'] = $this->Mtag->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/tag/ubah', $data);
		$this->load->view('supervisor/footer');
	}

	function status($id)
	{
		$this->Mtag->ubah_status_tag($id);
		redirect('supervisor/tag','refresh');
	}
}

/* End of file Tag.php */
/* Location: ./application/controllers/supervisor/Tag.php */