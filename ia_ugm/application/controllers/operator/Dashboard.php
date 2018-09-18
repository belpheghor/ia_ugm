<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data);
		$this->load->view('operator/dashboard');
		$this->load->view('operator/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/operator/Dashboard.php */