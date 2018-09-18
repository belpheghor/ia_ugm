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
		$data['login'] = $this->session->userdata("admin");
		// model Mcategory menjalankan fungsi tampil_kategori()
		$data['category']=$this->Mcategory->tampil_kategori();

		// load view

		$this->load->view('admin/header', $data); 
		$this->load->view('admin/news_category/tampil', $data);
		$this->load->view('admin/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mcategory jalankan fungsi simpan_kategori
			$this->Mcategory->simpan_kategori($inputan);

			// redirect tampilan admin/category/index
			redirect('admin/category','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data); 
		$this->load->view('admin/news_category/tambah');
		$this->load->view('admin/footer'); 
		
	}

	function delete($id){
		
		$this->Mcategory->hapus_kategori($id);

		// kembali ke controller pegawai function tampil

		redirect('admin/category','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mcategory->ubah_kategori($inputan,$id);
			redirect('admin/category','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['category'] = $this->Mcategory->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/news_category/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Mcategory->select_category($id);
		redirect('admin/category','refresh');
	}

	

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */