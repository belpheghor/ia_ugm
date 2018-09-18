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
		$data['login'] = $this->session->userdata("supervisor");
		$data['staff'] = $this->Mstaff->tampil_staff();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/staff/tampil', $data);
		$this->load->view('supervisor/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mstaff->simpan_staff($input);
			redirect('supervisor/staff','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header',$data);
		$this->load->view('supervisor/staff/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){

		$this->Mstaff->hapus_staff($id);

		redirect('supervisor/staff','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mstaff->ubah_staff($input,$id);
			redirect('supervisor/staff','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("supervisor");
		$data['staff'] = $this->Mstaff->ambil_data($id);
		$this->load->view('supervisor/header',$data);
		$this->load->view('supervisor/staff/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mstaff->ubah_status_staff($id);
		redirect('supervisor/staff','refresh');
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/supervisor/Staff.php */