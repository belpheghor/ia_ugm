<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	function login_user($input)
	{
		$email = $input['user_email'];
		$password = sha1($input['user_password']);
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$this->db->where('user_level', 'admin');
		$ambil = $this->db->get('user');
		$hasil = $ambil->num_rows();
		if ($hasil==1) {
			$this->session->set_userdata('admin',$ambil->row_array());
			return "success";
		}
		else
		{
			$this->db->where('user_email', $email);
			$this->db->where('user_password', $password);
			$this->db->where('user_level', 'supervisor');
			$ambil = $this->db->get('user');
			$hasil = $ambil->num_rows();
			if ($hasil==1) {
				$this->session->set_userdata('supervisor',$ambil->row_array());
				return "success-supervisor";
			}
			else
			{
				$this->db->where('user_email', $email);
				$this->db->where('user_password', $password);
				$this->db->where('user_level', 'operator');
				$ambil = $this->db->get('user');
				$hasil = $ambil->num_rows();
				if ($hasil==1) {
					$this->session->set_userdata('operator',$ambil->row_array());
					return "success-operator";
				}
				else
				{
					return "gagal";
				}
			}

		}
	}
	

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */