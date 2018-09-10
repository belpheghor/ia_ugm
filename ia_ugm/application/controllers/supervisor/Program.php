<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtimeline');
		$this->load->model('Mprogram');
	}

	public function index()
	{
		$data['login'] = $this->session->userdata("supervisor");
		$data['program']= $this->Mprogram->tampil_program();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/program/tampil', $data);
		$this->load->view('supervisor/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {


			$this->Mprogram->simpan_program($input);


			redirect('supervisor/program','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		// nambah program ngambil data timeline
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/program/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){

		$this->Mprogram->hapus_program($id);

		redirect('supervisor/program','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mprogram->ubah_program($input,$id);
			redirect('supervisor/program','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['program'] = $this->Mprogram->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/program/ubah', $data);
		$this->load->view('supervisor/footer');
	}
}



/* End of file Program.php */
/* Location: ./application/controllers/supervisor/Program.php */