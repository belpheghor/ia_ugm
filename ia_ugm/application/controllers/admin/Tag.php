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
		$data['login'] = $this->session->userdata("admin");
		// model Mtag menjalankan fungsi tampil_tag()
		$data['tag']=$this->Mtag->tampil_tag();

		// load view

		$this->load->view('admin/header', $data); 
		$this->load->view('admin/tag/tampil', $data);
		$this->load->view('admin/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mtag jalankan fungsi simpan_tag
			$this->Mtag->simpan_tag($inputan);

			// redirect tampilan admin/tag/index
			redirect('admin/tag','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data); 
		$this->load->view('admin/tag/tambah');
		$this->load->view('admin/footer'); 
		
	}

	function delete($id){
		
		$this->Mtag->hapus_tag($id);

		// kembali ke controller pegawai function tampil

		redirect('admin/tag','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mtag->ubah_tag($inputan,$id);
			redirect('admin/tag','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['tag'] = $this->Mtag->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/tag/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Mtag->select_tag($id);
		redirect('admin/tag','refresh');
	}

}

/* End of file Tag.php */
/* Location: ./application/controllers/admin/Tag.php */