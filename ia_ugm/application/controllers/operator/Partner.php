<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mpartner');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$data['partner'] = $this->Mpartner->tampil_partner();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/partner/tampil', $data);
		$this->load->view('operator/footer');
		
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mpartner->simpan_partner($input);

			redirect('operator/partner','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/partner/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){
		
		$this->Mpartner->hapus_partner($id);

		redirect('operator/partner','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mpartner->ubah_partner($input,$id);
			redirect('operator/partner','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("operator");
		$data['partner'] = $this->Mpartner->ambil_data($id);
		$this->load->view('operator/header',$data);
		$this->load->view('operator/partner/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mpartner->ubah_status_partner($id);
		redirect('operator/partner','refresh');
	}

}

/* End of file Partner.php */
/* Location: ./application/controllers/operator/Partner.php */