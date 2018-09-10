<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
		
	}
	public function index()
	{
		$input=$this->input->post();
		if ($input) {
			$hasil = $this->Mlogin->login_user($input);
			if ($hasil=="success") {
				echo "<script>alert('Login Successful');</script>";
				redirect('admin/dashboard','refresh');
			}
			elseif ($hasil=="success-supervisor") {
				echo "<script>alert('Login Successful');</script>";
				redirect('supervisor/dashboard','refresh');
			}
			elseif ($hasil=="success-operator") {
				echo "<script>alert('Login Successful');</script>";
				redirect('operator/dashboard','refresh');
			}
			else
			{
				echo "<script>alert('Login Attempt Failed');</script>";
				redirect('login','refresh');
			}
		}

		$this->load->view('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */