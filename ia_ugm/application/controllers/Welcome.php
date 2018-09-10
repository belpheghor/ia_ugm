<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mbackground');	
		$this->load->model('Mprogram');
		$this->load->model('Mtimeline');
		$this->load->model('Mstartup');
		$this->load->model('Mpartner');
		$this->load->model('Mmentor');
		$this->load->model('Mnews');
		// $this->load->model('Model File');
		// $this->load->model('Model File');
		// $this->load->model('Model File');
	}
	public function index2()
	{
		$status="selected";
		$data['background'] = $this->Mbackground->ambil_background_selected($status);
		$data['program'] = $this->Mprogram->tampil_program();
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['partner'] = $this->Mpartner->tampil_partner();
		$data['mentor'] = $this->Mmentor->tampil_mentor();

		// $this->load->view('front_user/homepage/home_header', $data);
		$this->load->view('header', $data);
		$this->load->view('background', $data);
		$this->load->view('program', $data);
		$this->load->view('news', $data);
		$this->load->view('timeline', $data);
		$this->load->view('startup', $data);
		$this->load->view('partner', $data);
		$this->load->view('mentor', $data);
		$this->load->view('footer');
		// $this->load->view('front_user/homepage/home_footer');
	}
	function view_news()
	{
		// $data['news'] = $this->Mnews->ambil_data();
		$this->load->view('header');
		$this->load->view('news_list');
		$this->load->view('footer');
	}

	function index(){
		$status="selected";
		$data['background'] = $this->Mbackground->ambil_background_selected($status);
		$data['program'] = $this->Mprogram->tampil_program();
		$data['news'] = $this->Mnews->display_news();
		$data['timeline'] = $this->Mtimeline->tampil_timeline();
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['partner'] = $this->Mpartner->tampil_partner();
		$data['mentor'] = $this->Mmentor->tampil_mentor();

		$this->load->view('front_user/header');
		$this->load->view('front_user/homepage/home_header', $data);
		$this->load->view('background', $data);
		$this->load->view('front_user/homepage/home_program', $data);
		$this->load->view('front_user/homepage/home_news', $data);
		$this->load->view('front_user/homepage/home_timeline', $data);
		$this->load->view('front_user/homepage/home_mentor', $data);
		$this->load->view('front_user/homepage/home_startup', $data);
		$this->load->view('front_user/homepage/home_partner', $data);
		$this->load->view('front_user/homepage/home_footer');
		// echo "<pre>";
		// echo var_dump($data['news']);
		// echo "</pre>";
	}
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */