<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstaff');
	}
	public function index()
	{
		$data['staff'] = $this->Mstaff->tampil_staff();
		$this->load->view('admin/header');
		$this->load->view('admin/staff/tampil', $data);
		$this->load->view('admin/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mstaff->simpan_staff($input);
			redirect('admin/staff','refresh');

		}

		$this->load->view('admin/header');
		$this->load->view('admin/staff/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){

		$this->Mstaff->hapus_staff($id);

		redirect('admin/staff','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mstaff->ubah_staff($input,$id);
			redirect('admin/staff','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['staff'] = $this->Mstaff->ambil_data($id);
		$this->load->view('admin/header');
		$this->load->view('admin/staff/ubah', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/admin/Staff.php */