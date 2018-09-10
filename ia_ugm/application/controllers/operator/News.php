<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class News extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mnews');
		$this->load->model('Mcategory');
		$this->load->model('Muser');
	}
	public function index()
	{
   
		$data['news']=$this->Mnews->display_news();
		$this->load->view('admin/header');
		$this->load->view('admin/news/tampil', $data);
		$this->load->view('admin/footer');
	}
	function detail($news_id)
	{
		$data['news_detail']=$this->Mnews->news_detail($news_id);
		$this->load->view('admin/header');
		$this->load->view('admin/news/detail', $data);
		$this->load->view('admin/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$id = $this->Mnews->simpan_nama($input);
			$this->Mnews->simpan_gambar($id, $input);

			redirect('admin/news','refresh');

		}
		// nambah berita ngambil data kategori 
		$data['category'] = $this->Mcategory->tampil_kategori();
		$data['user'] = $this->Muser->tampil_user();
		$this->load->view('admin/header');
		// untuk kirim data variabel category&user
		$this->load->view('admin/news/tambah', $data);
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Mnews->hapus_news($id);

		redirect('admin/news','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mnews->ubah_news($id,$input);
			echo "<script>alert('Berhasil Diubah');</script>";
			redirect('admin/news','refresh');
		}
		$data['category'] = $this->Mcategory->tampil_kategori();
		$data['user'] = $this->Muser->tampil_user();

		//bagian pengambilan data dari function ambil_data()
		$data['news'] = $this->Mnews->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/news/ubah', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file News.php */
/* Location: ./application/controllers/admin/News.php */