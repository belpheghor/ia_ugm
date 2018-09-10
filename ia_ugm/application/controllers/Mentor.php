<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mmentor');

	}

	public function index()
	{
		$data['mentor'] = $this->Mmentor->tampil_mentor_all();
		$data['title'] = "Mentor";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/mentor-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['mentor'] = $this->Mmentor->ambil_data($id);
		$data['title'] = $data['mentor']['front_degree']." ".$data['mentor']['first_name']." ".$data['mentor']['last_name']." ".$data['mentor']['back_degree'] ;
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/mentor-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */