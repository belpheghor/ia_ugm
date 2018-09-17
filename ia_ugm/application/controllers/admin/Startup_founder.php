<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup_founder extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstartup_founder');
		$this->load->model('Mstartup');
		$this->load->model('Mmajor');
		$this->load->model('Mfaculty');
	} 
	public function index()
	{
		$data['login'] = $this->session->userdata("admin");
		$data['startup_founder'] = $this->Mstartup_founder->tampil_startup_founder();
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('admin/header', $data);
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
		$data['login'] = $this->session->userdata("admin");
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('admin/header', $data);
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
		$data['login'] = $this->session->userdata("admin");
		$data['startup_founder'] = $this->Mstartup_founder->ambil_data($id);
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/startup_founder/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Mstartup_founder->select_sf($id);
		redirect('admin/timeline','refresh');
	}

}

/* End of file Startup_founder.php */
/* Location: ./application/controllers/admin/Startup_founder.php */