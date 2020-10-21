<?php




defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('nama_pengajar'))) {
			$this->session->set_flashdata('message', 'Silahkan login dulu sebagai admin');
			redirect('auth');
		}
	}


	public function index()
	{
		$data['judul'] = 'Site - Absensi';
		$data['dosen'] = $this->db->get_where('kelas', ['dosen' => $this->session->userdata('nama_pengajar')])->row_array();
		$data['matakuliah'] = $this->db->get_where('kelas', ['dosen' => $this->session->userdata('nama_pengajar')])->result_array();

		$this->load->view('authtemplate/header', $data);
		$this->load->view('auth/absensi', $data);
		$this->load->view('authtemplate/footer');
	}

	public function absen()
	{
		$this->form_validation->set_rules('namedosen', 'Nama Dosen', 'trim|required');
		$this->form_validation->set_rules('matakuliah', 'Mata kuliah', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Site - Absensi';
			$data['dosen'] = $this->db->get_where('kelas', ['dosen' => $this->session->userdata('nama_pengajar')])->row_array();
			$data['matakuliah'] = $this->db->get_where('kelas', ['dosen' => $this->session->userdata('nama_pengajar')])->result_array();

			$this->load->view('authtemplate/header', $data);
			$this->load->view('auth/absensi', $data);
			$this->load->view('authtemplate/footer');
		} else {
			$this->Absensi_model->updateAbsen();
			$this->session->set_flashdata('massage', 'berhasil melakukan absen');
			redirect('absensi');
		}
		
	}
}

/* End of file Absensi.php */
