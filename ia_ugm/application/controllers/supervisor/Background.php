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
		$data['login'] = $this->session->userdata("supervisor");
		$data['background'] = $this->Mbackground->tampil_background();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/background/tampil', $data);
		$this->load->view('supervisor/footer');
		
	}
	function add()
	{
		$input = $this->input->post();
 
		if ($input) {

			$this->Mbackground->simpan_background();

			redirect('supervisor/background','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/background/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Mbackground->hapus_background($id);

		redirect('supervisor/background','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mbackground->ubah_background($input,$id);
			redirect('supervisor/background','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['background'] = $this->Mbackground->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/background/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function select($id){
		$this->Mbackground->select_background($id);
		redirect('supervisor/background','refresh');
	}
	function status($id)
	{
		$this->Mbackground->ubah_status_background($id);
		redirect('supervisor/background','refresh');
	}
}

/* End of file Background.php */
/* Location: ./application/controllers/supervisor/Background.php */