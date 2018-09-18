<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Muser');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("operator");

		$data['user'] = $this->Muser->tampil_user();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/user/tampil', $data);
		$this->load->view('operator/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Muser->simpan_user($input);

			redirect('operator/user','refresh');

		}

		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/user/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){
		
		$this->Muser->hapus_user($id);

		redirect('operator/user','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Muser->ubah_user($input,$id);
			redirect('operator/user','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['user'] = $this->Muser->ambil_data($id);
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/user/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id){
		$this->Muser->ubah_status_user($id);
		redirect('operator/user','refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/operator/User.php */