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
		$data['login'] = $this->session->userdata("operator");
		$data['program']= $this->Mprogram->tampil_program2();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/program/tampil', $data);
		$this->load->view('operator/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {


			$this->Mprogram->simpan_program($input);


			redirect('operator/program','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		// nambah program ngambil data timeline
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/program/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){

		$this->Mprogram->hapus_program($id);

		redirect('operator/program','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mprogram->ubah_program($input,$id);
			redirect('operator/program','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['program'] = $this->Mprogram->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/program/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mprogram->ubah_status_program($id);
		redirect('operator/program','refresh');
	}

}



/* End of file Program.php */
/* Location: ./application/controllers/operator/Program.php */