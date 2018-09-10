<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtimeline');

	}

	public function index()
	{
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$data['title'] = "Timeline";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/timeline-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['timeline'] = $this->Mtimeline->ambil_data($id);
		
		$this->load->view('front_user/header');
		$this->load->view('front_user/timeline-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
		// echo "<pre>";
		// echo var_dump($data);
		// echo "</pre>";
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */