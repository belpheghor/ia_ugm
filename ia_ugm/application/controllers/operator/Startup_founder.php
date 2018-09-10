<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup_founder extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstartup_founder');
	}
	public function index()
	{
		$data['startup_founder'] = $this->Mstartup_founder->tampil_startup_founder();
		$this->load->view('admin/header');
		$this->load->view('admin/startup_founder/tampil', $data);
		$this->load->view('admin/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mstartup_founder->simpan_startup_founder($input);
			redirect('admin/startup_founder','refresh');

		}

		$this->load->view('admin/header');
		$this->load->view('admin/startup_founder/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){

		$this->Mstartup_founder->hapus_startup_founder($id);

		redirect('admin/startup_founder','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mstartup_founder->ubah_startup_founder($input,$id);
			redirect('admin/startup_founder','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['startup_founder'] = $this->Mstartup_founder->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/startup_founder/ubah', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Startup_founder.php */
/* Location: ./application/controllers/admin/Startup_founder.php */