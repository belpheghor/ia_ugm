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
		$data['login'] = $this->session->userdata("admin");
		$data['startup'] = $this->Mstartup->tampil_startup();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/startup/tampil', $data);
		$this->load->view('admin/footer');

		// echo "<pre>";
		// echo print_r($data['startup']);
		// echo "</pre>";
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mstartup->simpan_startup($input);

			redirect('admin/startup','refresh');

		}
		$data['login'] = $this->session->userdata("admin");

		$this->load->view('admin/header', $data);
		$this->load->view('admin/startup/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Mstartup->hapus_startup($id);

		redirect('admin/startup','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mstartup->ubah_startup($input,$id);
			redirect('admin/startup','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['startup'] = $this->Mstartup->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/startup/ubah', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Startup.php */
/* Location: ./application/controllers/admin/Startup.php */