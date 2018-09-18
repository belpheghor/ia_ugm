<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mstartup');
	
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$data['startup'] = $this->Mstartup->tampil_startup();
		$this->load->view('operator/header',$data);
		$this->load->view('operator/startup/tampil', $data);
		$this->load->view('operator/footer');

		// echo "<pre>";
		// echo print_r($data['startup']);
		// echo "</pre>";
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mstartup->simpan_startup($input);

			redirect('operator/startup','refresh');

		}
		$data['login'] = $this->session->userdata("operator");

		$this->load->view('operator/header', $data);
		$this->load->view('operator/startup/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){
		
		$this->Mstartup->hapus_startup($id);

		redirect('operator/startup','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mstartup->ubah_startup($input,$id);
			redirect('operator/startup','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['startup'] = $this->Mstartup->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/startup/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mstartup->ubah_status_startup($id);
		redirect('operator/startup','refresh');
	}


}

/* End of file Startup.php */
/* Location: ./application/controllers/operator/Startup.php */