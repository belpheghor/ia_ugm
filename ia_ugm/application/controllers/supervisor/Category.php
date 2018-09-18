<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mcategory');
	}
	

	public function index()
	{
		$data['login'] = $this->session->userdata("supervisor");
		// model Mcategory menjalankan fungsi tampil_kategori()
		$data['category']=$this->Mcategory->tampil_kategori();

		// load view

		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/news_category/tampil', $data);
		$this->load->view('supervisor/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mcategory jalankan fungsi simpan_kategori
			$this->Mcategory->simpan_kategori($inputan);

			// redirect tampilan supervisor/category/index
			redirect('supervisor/category','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/news_category/tambah');
		$this->load->view('supervisor/footer'); 
		
	}

	function delete($id){
		
		$this->Mcategory->hapus_kategori($id);

		// kembali ke controller pegawai function tampil

		redirect('supervisor/category','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mcategory->ubah_kategori($inputan,$id);
			redirect('supervisor/category','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['category'] = $this->Mcategory->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/news_category/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mcategory->ubah_status_category($id);
		redirect('supervisor/category','refresh');
	}

	

}

/* End of file Category.php */
/* Location: ./application/controllers/supervisor/Category.php */