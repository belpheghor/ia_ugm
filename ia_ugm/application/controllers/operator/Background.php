<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Background extends CI_Controller {
 
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mbackground');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$data['background'] = $this->Mbackground->tampil_background();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/background/tampil', $data);
		$this->load->view('operator/footer');
		
	}
	function add()
	{
		$input = $this->input->post();
 
		if ($input) {

			$this->Mbackground->simpan_background();

			redirect('operator/background','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/background/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){
		
		$this->Mbackground->hapus_background($id);

		redirect('operator/background','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mbackground->ubah_background($input,$id);
			redirect('operator/background','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['background'] = $this->Mbackground->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/background/ubah', $data);
		$this->load->view('operator/footer');
	}
	function select($id){
		$this->Mbackground->select_background($id);
		redirect('operator/background','refresh');
	}
	function status($id)
	{
		$this->Mbackground->ubah_status_background($id);
		redirect('operator/background','refresh');
	}
}

/* End of file Background.php */
/* Location: ./application/controllers/operator/Background.php */