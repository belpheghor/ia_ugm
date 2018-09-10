<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_tag extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Mnews');
		$this->load->model('Mnewstag');
		$this->load->model('Mtag');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("admin");
		$data["news_tag"] = $this->Mnewstag->tampil_newstag();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/news_tag/tampil', $data);
		$this->load->view('admin/footer');
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mcategory jalankan fungsi simpan_newstag
			$this->Mnewstag->simpan_newstag($inputan);

			// redirect tampilan admin/news_tag/index
			redirect('admin/news_tag','refresh');

		}

		$this->load->view('admin/header'); 
		$this->load->view('admin/news_tag/tambah');
		$this->load->view('admin/footer'); 
		
	}

	function delete($id){
		
		$this->Mnewstag->hapus_newstag($id);

		// kembali ke controller pegawai function tampil

		redirect('admin/news_tag','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mnewstag->ubah_newstag($inputan,$id);
			redirect('admin/news_tag','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['news_tag'] = $this->Mnewstag->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/news_news_tag/ubah', $data);
		$this->load->view('admin/footer');
	}


}

/* End of file Newstag.php */
/* Location: ./application/controllers/admin/Newstag.php */