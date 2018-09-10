<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mmentor');
	}
	public function index()
	{
		$data['mentor'] = $this->Mmentor->tampil_mentor();
		$this->load->view('admin/header');
		$this->load->view('admin/mentor/tampil', $data);
		$this->load->view('admin/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mmentor->simpan_mentor($input);
			redirect('admin/mentor','refresh');

		}

		$this->load->view('admin/header');
		$this->load->view('admin/mentor/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){

		$this->Mmentor->hapus_mentor($id);

		redirect('admin/mentor','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mmentor->ubah_mentor($input,$id);
			redirect('admin/mentor','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['mentor'] = $this->Mmentor->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/mentor/ubah', $data);
		$this->load->view('admin/footer');
	}


}

/* End of file Mentor.php */
/* Location: ./application/controllers/admin/Mentor.php */