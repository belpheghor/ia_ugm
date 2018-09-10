<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstartup');

	}

	public function index()
	{
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['title'] = "Startup";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/startup-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['startup'] = $this->Mstartup->ambil_data($id);
		$data['title'] = $data['startup']['startup_name'];
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/startup-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */