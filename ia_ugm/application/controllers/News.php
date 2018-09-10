<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Mnews');

	}

	public function index()
	{
		$data['news'] = $this->Mnews->display_news();
		$data['title'] = "News";

		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/news-list', $data);
		$this->load->view('front_user/homepage/home_footer');
		
	}
	function view($id)
	{
		$data['news'] = $this->Mnews->ambil_data($id);
		$related = $data['news']['category_id'];
		$data['related'] = $this->Mnews->related_news($related, $id);
		$data['title'] = $data['news']['news_title'];
		// echo "<pre>";
		// echo var_dump($data);
		// echo "</pre>";
		$this->load->view('front_user/header');
		$this->load->view('front_user/detail-menubar', $data);
		$this->load->view('front_user/news-detail', $data);
		$this->load->view('front_user/homepage/home_footer');
	}
	

}

/* End of file Program-detail.php */
/* Location: ./application/controllers/Program-detail.php */