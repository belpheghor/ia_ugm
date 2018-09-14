<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//load third party google api clinet
require_once(BASEPATH . '../application/vendor/autoload.php');
require_once(BASEPATH . '../application/vendor/google/apiclient/src/Google/Client.php');
require_once(BASEPATH . '../application/vendor/google/apiclient-services/src/Google/Service/Analytics.php');

class Dashboard extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
  		$this->load->helper('url','form','');
      	$this->load->library('google_analytics');
  		$this->load->model('ga_model');
   		$this->load->database();
  	}

	public function index2()
	{
		$data['login'] = $this->session->userdata("admin");
		//initialize google analytics
	    $analytics = $this->google_analytics->initializeAnalytics();

	    //getDateRange($startDate, $endDate)
	    $dateRange = $this->google_analytics->getDateRange('6daysAgo', 'today');
	    $dateRange30days = $this->google_analytics->getDateRange('30daysAgo', 'today');
	    $dateRange7days = $this->google_analytics->getDateRange('6daysAgo', 'today');

	    //get metric and dimension lists
	    $metricList[] = 'ga:pageviews';
	    $dimensionsList[] = 'ga:date';
	    $dimensionsList[] = 'ga:dayOfWeekName';
	    $dimensionsList2[] = 'ga:pagepath';
	    $dimensionsList3[] = 'ga:date';

	    //get metric and dimension data
	    $metrics = $this->google_analytics->getMetrics(count($metricList), $metricList);
	    $dimensions = $this->google_analytics->getDimensions(count($dimensionsList), $dimensionsList);
	    $dimensions2 = $this->google_analytics->getDimensions(count($dimensionsList2), $dimensionsList2);
	    $dimensions3 = $this->google_analytics->getDimensions(count($dimensionsList3), $dimensionsList3);

	    //initialize ordering
	    $ordering = $this->google_analytics->ordering('ga:date');
	    $ordering2 = $this->google_analytics->ordering('ga:pageviews' , "VALUE", "DESCENDING");
	    
	    //get reports data
	    $reports = $this->google_analytics->getReport($analytics , $dateRange, $metrics, $dimensions, $ordering, TRUE);
	    $reports2 = $this->google_analytics->getReport($analytics , $dateRange30days, $metrics, $dimensions2, $ordering2, TRUE);

	    //convert google array format to specific custome array format
	    $convert = $this->google_analytics->convertReport($reports);
	    $convert2 = $this->google_analytics->convertReport($reports2);

	    //convert custome array format to readable format for view
	    $viewMetrics = $this->ga_model->getValue($convert['convert'], 1, 1, $convert['countRow'], $convert['countDim'], $convert['countMet'], $convert['countMetVal']);
	    $viewMetrics2 = $this->ga_model->getValue($convert2['convert'], 1, 1, $convert2['countRow'], $convert2['countDim'], $convert2['countMet'], $convert2['countMetVal']);

	    //change date format from google analytics to custome format
	    $data2['date'] = $this->ga_model->toDate($viewMetrics);

	    //limit data to be show
	    $path = $this->ga_model->limitData(4,$viewMetrics2);
	    $maxvisitpath = $this->ga_model->limitData(1,$viewMetrics2);
	    $top8page = $this->ga_model->limitData(8,$viewMetrics2);

	    //use filter to get specific page
	    $dimfilter = 'ga:pagePath';
	    for ($i=0; $i < count($top8page['dimension']) ; $i++) { 
	      $reports3 = $this->google_analytics->getReportFilter($analytics , $dateRange7days, $metrics, $dimensions3, $ordering, TRUE, $dimfilter, $top8page["dimension"][$i]);
	      $convert3 = $this->google_analytics->convertReport($reports3);
	      $viewMetrics3 = $this->ga_model->getValue($convert3['convert'], 1, 1, $convert3['countRow'], $convert3['countDim'], $convert3['countMet'], $convert3['countMetVal']);
	      $data2['page'][$i] = $this->ga_model->toDate($viewMetrics3);
	    }

	    $data2['path'] = $path;
	    $data2['maxvisit'] = $maxvisitpath;
	    $data2['top8page'] = $top8page;

		$this->load->view('admin/header', $data);
	    $this->load->view('admin/dashboard',@$data2);
		// $this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function index()
	{
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data);
	    $this->load->view('admin/dashboard');
		// $this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */