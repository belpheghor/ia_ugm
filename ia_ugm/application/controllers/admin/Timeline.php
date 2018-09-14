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
		$data['login'] = $this->session->userdata("admin");
		$data['timeline']= $this->Mtimeline->tampil_timeline2();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/timeline/tampil', $data);
		$this->load->view('admin/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			
			$this->Mtimeline->simpan_timeline($input);


			redirect('admin/timeline','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		// nambah timeline ngambil data program 
		$data['program'] = $this->Mprogram->tampil_program();
		$this->load->view('admin/header', $data);
		// kirim data program
		$this->load->view('admin/timeline/tambah', $data);
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Mtimeline->hapus_timeline($id);

		redirect('admin/timeline','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mtimeline->ubah_timeline($input,$id);
			redirect('admin/timeline','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("admin");
		$data['program'] = $this->Mprogram->tampil_program();
		$data['timeline'] = $this->Mtimeline->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/timeline/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Mtimeline->select_timeline($id);
		redirect('admin/timeline','refresh');
	}

 
}

/* End of file Timeline.php */
/* Location: ./application/controllers/admin/Timeline.php */