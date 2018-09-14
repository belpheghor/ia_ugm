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
		$data['login'] = $this->session->userdata("admin");
		$data['program']= $this->Mprogram->tampil_program2();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/program/tampil', $data);
		$this->load->view('admin/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {


			$this->Mprogram->simpan_program($input);


			redirect('admin/program','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		// nambah program ngambil data timeline
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/program/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){

		$this->Mprogram->hapus_program($id);

		redirect('admin/program','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mprogram->ubah_program($input,$id);
			redirect('admin/program','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['program'] = $this->Mprogram->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/program/ubah', $data);
		$this->load->view('admin/footer');
	}
}



/* End of file Program.php */
/* Location: ./application/controllers/admin/Program.php */