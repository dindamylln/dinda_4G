<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Hallo" ;
		$data['mahasiswas'] = $this->model_mahasiswa->getDataMahasiswa();
		$this->load->view('home.php', $data);
	}

	public function formInput() {
		$data["judul"] = "Hallo";
		$this->load->view('form_input', $data);
		if($this->input->post('tombolInsert')){
			$this->model_mahasiswa->insertDataMahasiswa();
			redirect('welcome');
		}
	}

	public function formEdit($id) {
		$data["judul"] = "Hallo";
		$data["mahasiswas"] = $this->model_mahasiswa->getDataMahasiswaById($id);
		$this->load->view('form_edit', $data);
		
		if ($this->input->post('tombolEdit')){
			$this->model_mahasiswa->updateDataMahasiswa();
			redirect('welcome');
		}
	}

	public function delete($id) {
		$this->model_mahasiswa->hapusDataMahasiswa($id);
		redirect('welcome');
	}
}
