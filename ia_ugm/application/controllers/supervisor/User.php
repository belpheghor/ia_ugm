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
		$data['login'] = $this->session->userdata("supervisor");

		$data['user'] = $this->Muser->tampil_user();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/user/tampil', $data);
		$this->load->view('supervisor/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Muser->simpan_user($input);

			redirect('supervisor/user','refresh');

		}

		$this->load->view('supervisor/header');
		$this->load->view('supervisor/user/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Muser->hapus_user($id);

		redirect('supervisor/user','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Muser->ubah_user($input,$id);
			redirect('supervisor/user','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['user'] = $this->Muser->ambil_data($id);
		$this->load->view('supervisor/header');
		$this->load->view('supervisor/user/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id){
		$this->Muser->ubah_status_user($id);
		redirect('supervisor/user','refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/supervisor/User.php */