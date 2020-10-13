<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$data['judul'] 		= 'Site - administrator';
		$data['status'] 	= 'active';
		$data['page'] 		= 'Administrator';
		$this->load->view('template/header', $data);
		$this->load->view('administrator/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function admin()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('note', 'Note', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] 		= 'Site - administrator';
			$data['status'] 	= 'active';
			$data['page'] 		= 'Administrator';
			$this->load->view('template/header', $data);
			$this->load->view('administrator/index', $data);
			$this->load->view('template/footer', $data);
		} else {
			
		}
		
	}

	public function reset()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('repassword', 'Repassword', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] 		= 'Site - administrator';
			$data['status'] 	= 'active';
			$data['page'] 		= 'Administrator';
			$this->load->view('template/header', $data);
			$this->load->view('administrator/index', $data);
			$this->load->view('template/footer', $data);
		} else {
			
		}
	}

}

/* End of file Administrator.php */

