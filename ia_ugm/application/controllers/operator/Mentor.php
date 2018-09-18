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
		$data['login'] = $this->session->userdata("operator");
		$data['mentor'] = $this->Mmentor->tampil_mentor_all();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/mentor/tampil', $data);
		$this->load->view('operator/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mmentor->simpan_mentor($input);
			redirect('operator/mentor','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/mentor/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){

		$this->Mmentor->hapus_mentor($id);

		redirect('operator/mentor','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mmentor->ubah_mentor($input,$id);
			redirect('operator/mentor','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['mentor'] = $this->Mmentor->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/mentor/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mmentor->ubah_status_mentor($id);
		redirect('operator/mentor','refresh');
	}


}

/* End of file Mentor.php */
/* Location: ./application/controllers/operator/Mentor.php */