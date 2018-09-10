<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Background extends CI_Controller {
 
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mbackground');
	}
	public function index()
	{
		$data['background'] = $this->Mbackground->tampil_background();
		$this->load->view('admin/header');
		$this->load->view('admin/background/tampil', $data);
		$this->load->view('admin/footer');
		
	}
	function add()
	{
		$input = $this->input->post();
 
		if ($input) {

			$this->Mbackground->simpan_background();

			redirect('admin/background','refresh');

		}

		$this->load->view('admin/header');
		$this->load->view('admin/background/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Mbackground->hapus_background($id);

		redirect('admin/background','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mbackground->ubah_background($input,$id);
			redirect('admin/background','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['background'] = $this->Mbackground->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/background/ubah', $data);
		$this->load->view('admin/footer');
	}
}

/* End of file Background.php */
/* Location: ./application/controllers/admin/Background.php */