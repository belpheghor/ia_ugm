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
		$data['login'] = $this->session->userdata("supervisor");
		$data['mentor'] = $this->Mmentor->tampil_mentor();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/mentor/tampil', $data);
		$this->load->view('supervisor/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mmentor->simpan_mentor($input);
			redirect('supervisor/mentor','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/mentor/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){

		$this->Mmentor->hapus_mentor($id);

		redirect('supervisor/mentor','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mmentor->ubah_mentor($input,$id);
			redirect('supervisor/mentor','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['mentor'] = $this->Mmentor->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/mentor/ubah', $data);
		$this->load->view('supervisor/footer');
	}


}

/* End of file Mentor.php */
/* Location: ./application/controllers/supervisor/Mentor.php */