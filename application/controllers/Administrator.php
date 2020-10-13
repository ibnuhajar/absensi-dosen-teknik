<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$data['judul'] 		= 'Site - administrator';
		$data['status'] 	= 'active';
		$data['page'] 		= 'Administrator';
		$data['jurusan'] 	= $this->Dasboard_model->getCount('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getCount('mata_kuliah');
		$data['dosen'] 		= $this->Dasboard_model->getCount('pengajar');
		$this->load->view('template/header', $data);
		$this->load->view('administrator/index', $data);
		$this->load->view('template/footer', $data);
	}

}

/* End of file Administrator.php */

