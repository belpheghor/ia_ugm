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
		$data['login'] = $this->session->userdata("supervisor");
		$data['startup'] = $this->Mstartup->tampil_startup();
		$this->load->view('supervisor/header',$data);
		$this->load->view('supervisor/startup/tampil', $data);
		$this->load->view('supervisor/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mstartup->simpan_startup($input);

			redirect('supervisor/startup','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");

		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/startup/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Mstartup->hapus_startup($id);

		redirect('supervisor/startup','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mstartup->ubah_startup($input,$id);
			redirect('supervisor/startup','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['startup'] = $this->Mstartup->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/startup/ubah', $data);
		$this->load->view('supervisor/footer');
	}

}

/* End of file Startup.php */
/* Location: ./application/controllers/supervisor/Startup.php */