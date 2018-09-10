<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('operator/header');
		$this->load->view('operator/dashboard');
		$this->load->view('operator/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */