<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtimeline');
		$this->load->model('Mprogram');
	}

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$data['timeline']= $this->Mtimeline->tampil_timeline2();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/timeline/tampil', $data);
		$this->load->view('operator/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			
			$this->Mtimeline->simpan_timeline($input);


			redirect('operator/timeline','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		// nambah timeline ngambil data program 
		$data['program'] = $this->Mprogram->tampil_program();
		$this->load->view('operator/header', $data);
		// kirim data program
		$this->load->view('operator/timeline/tambah', $data);
		$this->load->view('operator/footer');
	}
	function delete($id){
		
		$this->Mtimeline->hapus_timeline($id);

		redirect('operator/timeline','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mtimeline->ubah_timeline($input,$id);
			redirect('operator/timeline','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("operator");
		$data['program'] = $this->Mprogram->tampil_program();
		$data['timeline'] = $this->Mtimeline->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/timeline/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mtimeline->ubah_status_timeline($id);
		redirect('operator/timeline','refresh');
	}

 
}

/* End of file Timeline.php */
/* Location: ./application/controllers/operator/Timeline.php */