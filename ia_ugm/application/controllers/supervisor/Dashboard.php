<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/dashboard');
		$this->load->view('supervisor/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/supervisor/Dashboard.php */