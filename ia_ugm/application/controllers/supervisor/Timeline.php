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
		$data['login'] = $this->session->userdata("supervisor");
		$data['timeline']= $this->Mtimeline->tampil_timeline();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/timeline/tampil', $data);
		$this->load->view('supervisor/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			
			$this->Mtimeline->simpan_timeline($input);


			redirect('supervisor/timeline','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		// nambah timeline ngambil data program 
		$data['program'] = $this->Mprogram->tampil_program();
		$this->load->view('supervisor/header', $data);
		// kirim data program
		$this->load->view('supervisor/timeline/tambah', $data);
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Mtimeline->hapus_timeline($id);

		redirect('supervisor/timeline','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mtimeline->ubah_timeline($input,$id);
			redirect('supervisor/timeline','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("supervisor");
		$data['program'] = $this->Mprogram->tampil_program();
		$data['timeline'] = $this->Mtimeline->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/timeline/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mtimeline->select_timeline($id);
		redirect('supervisor/timeline','refresh');
	}

 
}

/* End of file Timeline.php */
/* Location: ./application/controllers/supervisor/Timeline.php */