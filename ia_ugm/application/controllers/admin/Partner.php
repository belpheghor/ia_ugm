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
		$data['login'] = $this->session->userdata("admin");
		$data['partner'] = $this->Mpartner->tampil_partner();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/partner/tampil', $data);
		$this->load->view('admin/footer');
		
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Mpartner->simpan_partner($input);

			redirect('admin/partner','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data);
		$this->load->view('admin/partner/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Mpartner->hapus_partner($id);

		redirect('admin/partner','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Mpartner->ubah_partner($input,$id);
			redirect('admin/partner','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("admin");
		$data['partner'] = $this->Mpartner->ambil_data($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/partner/ubah', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Partner.php */
/* Location: ./application/controllers/admin/Partner.php */