<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$data['judul'] 		= 'Site - Absensi';
		$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
		$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
		$this->load->view('authtemplate/header', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('authtemplate/footer');
	}

	public function admin()
	{
		$data['judul'] = 'Site - Admin';
		$this->load->view('authtemplate/header', $data);
		$this->load->view('auth/admin', $data);
		$this->load->view('authtemplate/footer');
	}

	public function loginadmin()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Site - Admin';
			$this->load->view('authtemplate/header', $data);
			$this->load->view('auth/admin', $data);
			$this->load->view('authtemplate/footer');
		} else {

			$username = htmlspecialchars($this->input->post('username', true));
			$password = htmlspecialchars($this->input->post('password', true));

			$user = $this->db->get_where('admin', ['username' => $username])->row_array();
			if ($user == true) {
				if ($user['password'] == $password) {
					$data =[
						'username' 	=> $user['username'],
						'role'		=> $user['role']
					];				
					$this->session->set_userdata( $data );
					$this->session->set_flashdata('massage', 'berhasil login');
					redirect('dasboard');
				}else {
					$this->session->set_flashdata('massage', 'berhasil login');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('massage', 'berhasil login');
				redirect('auth');
			}
		}
	}

	public function logout()
	{
		$data = [
			'username',
			'role'
		];

		
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('massage', 'berhasil logout');
		redirect('auth');
		
	}
}
  
  /* End of file Auth.php */
