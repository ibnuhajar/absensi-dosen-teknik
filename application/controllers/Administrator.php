<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('username'))) {
			$this->session->set_flashdata('message', 'Silahkan login dulu sebagai admin');
			redirect('auth');
		}
	}



	public function index()
	{
		$data['judul'] 		= 'Site - administrator';
		$data['status'] 	= 'active';
		$data['page'] 		= 'Administrator';
		$data['admin']  	= $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		// $data['admin']		= $this->Administrator_model->get('admin');
		$this->load->view('template/header', $data);
		$this->load->view('administrator/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function admin()
	{
		$this->form_validation->set_rules('nama', 'Name', 'trim|required');
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
			$data['admin']  	= $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

			$this->load->view('template/header', $data);
			$this->load->view('administrator/index', $data);
			$this->load->view('template/footer', $data);
		} else {
			$image = $_FILES['foto'];

			if ($image == null) {
				$data['judul'] 		= 'Site - administrator';
				$data['status'] 	= 'active';
				$data['page'] 		= 'Administrator';
				$data['admin']  	= $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
				$this->load->view('template/header', $data);
				$this->load->view('administrator/index', $data);
				$this->load->view('template/footer', $data);
			} else {
				$config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|png';
				$config['file_name']            = 'admin';

				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto')) {
					$images = $this->upload->data('file_name');
					$this->Administrator_model->admin($images);
					// flash data
					$this->session->set_flashdata('massage', 'diubah');
					redirect('administrator');
				} else {
					// flash data
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert"><strong>Oh Tidak !!!</strong> Gagal di perbaharui .</div>');
					redirect('administrator');
				}
			}
		}
	}

	public function reset()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('repassword', 'Repassword', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] 		= 'Site - administrator';
			$data['status'] 	= 'active';
			$data['page'] 		= 'Administrator';
			$data['admin']  	= $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
			$this->load->view('template/header', $data);
			$this->load->view('administrator/index', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->Administrator_model->reset();
			$this->session->set_flashdata('massage', 'diubah');
			redirect('administrator');
		}
	}
}

/* End of file Administrator.php */
