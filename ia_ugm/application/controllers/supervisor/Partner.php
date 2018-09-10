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
		$data['login'] = $this->session->userdata("supervisor");
		$data['partner'] = $this->Mpartner->tampil_partner();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/partner/tampil', $data);
		$this->load->view('supervisor/footer');
		
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mpartner->simpan_partner($input);

			redirect('supervisor/partner','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/partner/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){
		
		$this->Mpartner->hapus_partner($id);

		redirect('supervisor/partner','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mpartner->ubah_partner($input,$id);
			redirect('supervisor/partner','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("supervisor");
		$data['partner'] = $this->Mpartner->ambil_data($id);
		$this->load->view('supervisor/header',$data);
		$this->load->view('supervisor/partner/ubah', $data);
		$this->load->view('supervisor/footer');
	}

}

/* End of file Partner.php */
/* Location: ./application/controllers/supervisor/Partner.php */