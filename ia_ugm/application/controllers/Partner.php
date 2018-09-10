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
		$data['partner'] = $this->Mpartner->tampil_partner();
		$data['title'] = "Partner";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/partner-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */