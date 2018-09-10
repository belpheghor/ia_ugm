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
		$data['timeline']= $this->Mtimeline->tampil_timeline();
		$this->load->view('admin/header');
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
		// nambah timeline ngambil data program 
		$data['program'] = $this->Mprogram->tampil_program();
		$this->load->view('admin/header');
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
		$data['program'] = $this->Mprogram->tampil_program();
		$data['timeline'] = $this->Mtimeline->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/timeline/ubah', $data);
		$this->load->view('admin/footer');
	}

 
}

/* End of file Timeline.php */
/* Location: ./application/controllers/admin/Timeline.php */