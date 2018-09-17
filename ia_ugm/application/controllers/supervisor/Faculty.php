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
		$data['login'] = $this->session->userdata("supervisor");
		// model Mfaculty menjalankan fungsi tampil_fakultas()
		$data['faculty']=$this->Mfaculty->tampil_fakultas();

		// load view

		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/faculty/tampil', $data);
		$this->load->view('supervisor/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mfaculty jalankan fungsi simpan_fakultas
			$this->Mfaculty->simpan_fakultas($inputan);

			// redirect tampilan supervisor/faculty/index
			redirect('supervisor/faculty','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$this->load->view('supervisor/header', $data); 
		$this->load->view('supervisor/faculty/tambah');
		$this->load->view('supervisor/footer'); 
		
	}

	function delete($id){
		
		$this->Mfaculty->hapus_fakultas($id);

		// kembali ke controller pegawai function tampil

		redirect('supervisor/faculty','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mfaculty->ubah_fakultas($inputan,$id);
			redirect('supervisor/faculty','refresh');
		}
		$data['login'] = $this->session->userdata("supervisor");
		//bagian pengambilan data dari function ambil_data()
		$data['faculty'] = $this->Mfaculty->ambil_data($id);
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/faculty/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mfaculty->ubah_status_faculty($id);
		redirect('supervisor/faculty','refresh');
	}


	

}

/* End of file faculty.php */
/* Location: ./application/controllers/supervisor/faculty.php */