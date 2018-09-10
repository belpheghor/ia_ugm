<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstaff');

	}

	public function index()
	{
		$data['staff']= $this->Mstaff->tampil_staff();
		$data['title'] = "Staff";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/staff-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['staff'] = $this->Mstaff->ambil_data($id);
		$data['title'] = $data['staff']['front_degree']." ".$data['staff']['first_name']." ".$data['staff']['last_name']." ".$data['staff']['back_degree'] ;

		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/staff-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */