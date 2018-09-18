<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class News extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mnews');
		$this->load->model('Mcategory');
		$this->load->model('Muser');
		$this->load->model('Mtag');
	}
	public function index()
	{
   		$data['login'] = $this->session->userdata("supervisor");
		$data['news']=$this->Mnews->display_news();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/news/tampil', $data);
		$this->load->view('supervisor/footer');
	}
	function detail($news_id)
	{
		$data['news_detail']=$this->Mnews->news_detail($news_id);
		$this->load->view('supervisor/header');
		$this->load->view('supervisor/news/detail', $data);
		$this->load->view('supervisor/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {
			// karena data yang disimpan di dalam input banyak maka diambil data yang hanya menyimpan tag_id
			$tag_id = $input['tag_id'];
			// memisahkan data dg di hapus 
			unset($input['tag_id']);
			$id = $this->Mnews->simpan_nama($input);
			$this->Mnews->simpan_gambar($id, $input);
			foreach ($tag_id as $key => $value) {
				$this->Mnews->simpan_tagnews($value,$id);
			}

			redirect('supervisor/news','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$data['tag'] = $this->Mtag->tampil_tag();
		// nambah berita ngambil data kategori 
		$data['category'] = $this->Mcategory->tampil_kategori();
		$data['user'] = $this->Muser->tampil_user();
		$this->load->view('supervisor/header', $data);
		// untuk kirim data variabel category&user
		$this->load->view('supervisor/news/tambah', $data);
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Mnews->hapus_news($id);

		redirect('supervisor/news','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mnews->ubah_news($id,$input);
			echo "<script>alert('Berhasil Diubah');</script>";
			redirect('supervisor/news','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		$data['tag'] = $this->Mtag->tampil_tag();
		$data['category'] = $this->Mcategory->tampil_kategori();
		$data['user'] = $this->Muser->tampil_user();

		//bagian pengambilan data dari function ambil_data()
		$data['news'] = $this->Mnews->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/news/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mnews->ubah_status_news($id);
		redirect('supervisor/news','refresh');
	}

}

/* End of file News.php */
/* Location: ./application/controllers/supervisor/News.php */