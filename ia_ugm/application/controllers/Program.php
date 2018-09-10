<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mprogram');

	}

	public function index()
	{
		$data['program']= $this->Mprogram->tampil_program();
		$data['title'] = "Program";

		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/program-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['program'] = $this->Mprogram->ambil_data($id);
		$data['title'] = $data['program']['program_name'];
		// echo "<pre>";
		// echo var_dump($data);
		// echo "</pre>";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/program-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */