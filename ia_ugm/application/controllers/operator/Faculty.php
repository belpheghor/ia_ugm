<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mfaculty');
	}
	

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		// model Mfaculty menjalankan fungsi tampil_fakultas()
		$data['faculty']=$this->Mfaculty->tampil_fakultas();

		// load view

		$this->load->view('operator/header', $data); 
		$this->load->view('operator/faculty/tampil', $data);
		$this->load->view('operator/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mfaculty jalankan fungsi simpan_fakultas
			$this->Mfaculty->simpan_fakultas($inputan);

			// redirect tampilan operator/faculty/index
			redirect('operator/faculty','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data); 
		$this->load->view('operator/faculty/tambah');
		$this->load->view('operator/footer'); 
		
	}

	function delete($id){
		
		$this->Mfaculty->hapus_fakultas($id);

		// kembali ke controller pegawai function tampil

		redirect('operator/faculty','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mfaculty->ubah_fakultas($inputan,$id);
			redirect('operator/faculty','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['faculty'] = $this->Mfaculty->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/faculty/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mfaculty->ubah_status_faculty($id);
		redirect('operator/faculty','refresh');
	}


	

}

/* End of file faculty.php */
/* Location: ./application/controllers/operator/faculty.php */