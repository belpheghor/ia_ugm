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
		$data['login'] = $this->session->userdata("admin");
		// model Mfaculty menjalankan fungsi tampil_fakultas()
		$data['faculty']=$this->Mfaculty->tampil_fakultas();

		// load view

		$this->load->view('admin/header', $data); 
		$this->load->view('admin/faculty/tampil', $data);
		$this->load->view('admin/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mfaculty jalankan fungsi simpan_fakultas
			$this->Mfaculty->simpan_fakultas($inputan);

			// redirect tampilan admin/faculty/index
			redirect('admin/faculty','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data); 
		$this->load->view('admin/faculty/tambah');
		$this->load->view('admin/footer'); 
		
	}

	function delete($id){
		
		$this->Mfaculty->hapus_fakultas($id);

		// kembali ke controller pegawai function tampil

		redirect('admin/faculty','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mfaculty->ubah_fakultas($inputan,$id);
			redirect('admin/faculty','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['faculty'] = $this->Mfaculty->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/faculty/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Mfaculty->select_faculty($id);
		redirect('admin/faculty','refresh');
	}

	

}

/* End of file faculty.php */
/* Location: ./application/controllers/admin/faculty.php */