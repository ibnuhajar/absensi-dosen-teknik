<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{

	public function index()
	{
		$data['judul']		= "Site - Dasboard";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Dasboard';
		$data['jurusan'] 	= $this->Dasboard_model->getCount('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getCount('mata_kuliah');
		$data['dosen'] 		= $this->Dasboard_model->getCount('pengajar');
		$this->load->view('template/header', $data);
		$this->load->view('dasboard/index', $data);
		$this->load->view('template/footer', $data);
	}



	/* untuk method jurusan */

	public function jurusan()
	{
		$data['judul']		= "Site - Jurusan";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Jurusan';
		$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
		$this->load->view('template/header', $data);
		$this->load->view('dasboard/jurusan', $data);
		$this->load->view('template/footer', $data);
	}

	public function j_ubah()
	{
		$this->form_validation->set_rules('namajurusan', 'Nama Jurusan', 'trim|required');
		$this->form_validation->set_rules('urljurusan', 'Url Jurusan', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Jurusan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul']		= "Site - Jurusan";
			$data['status'] 	= 'active';
			$data['page'] 		= 'Jurusan';
			$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
			$this->load->view('template/header', $data);
			$this->load->view('dasboard/jurusan', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->Dasboard_model->update_jurusan();
			$this->session->set_flashdata('massage', 'diubah');
			// tambahkan alert
			redirect('dasboard/jurusan');
		}
	}



	/* untuk method matakuliah */

	public function matakuliah()
	{
		$data['judul']		= "Site - Mata Kuliah";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Mata Kuliah';
		$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
		$this->load->view('template/header', $data);
		$this->load->view('dasboard/matakuliah', $data);
		$this->load->view('template/footer', $data);
	}


	public function mk_tambah()
	{
		$this->form_validation->set_rules('matakuliah', 'Nama Mata Kuliah', 'trim|required');
		$this->form_validation->set_rules('namajurusan', 'Nama Jurusan', 'trim|required');
		$this->form_validation->set_rules('sks', 'Jumlah Sks', 'trim|required');
		$this->form_validation->set_rules('semester', 'Jenjang Semester', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Mata Kuliah', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$data['judul']		= "Site - Mata Kuliah";
			$data['status'] 	= 'active';
			$data['page'] 		= 'Mata Kuliah';
			$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
			$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
			$this->load->view('template/header', $data);
			$this->load->view('dasboard/matakuliah', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->Dasboard_model->insert_mk();
			$this->session->set_flashdata('massage', 'ditambah');
			redirect('dasboard/matakuliah');
		}
	}

	public function mk_delete($id)
	{
		$this->Dasboard_model->mk_hapus($id);
		$this->session->set_flashdata('massage', 'dihapus');
		redirect('dasboard/matakuliah');
	}



	/* untuk method pengajar */

	public function pengajar()
	{
		$data['judul']		= "Site - Pengajar";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Pengajar';
		$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
		$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
		$this->load->view('template/header', $data);
		$this->load->view('dasboard/pengajar', $data);
		$this->load->view('template/footer', $data);
	}

	public function p_tambah()
	{
		$this->form_validation->set_rules('nip', 'Nip', 'trim|required');
		$this->form_validation->set_rules('namapengajar', 'Nama Pengajar', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('namajurusan', 'Nama Jurusan', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$data['judul']		= "Site - Pengajar";
			$data['status'] 	= 'active';
			$data['page'] 		= 'Pengajar';
			$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
			$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
			$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
			$this->load->view('template/header', $data);
			$this->load->view('dasboard/pengajar', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->Dasboard_model->insert_p();
			$this->session->set_flashdata('massage','ditambah');
			redirect('dasboard/pengajar');
		}
	}

	public function p_delete($id)
	{
		$this->Dasboard_model->p_hapus($id);
		$this->session->set_flashdata('massage','dihapus');
		redirect('dasboard/pengajar');
	}


	/* untuk method kelas */
	public function kelas()
	{
		$data['judul']		= "Site - Kelas";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Kelas';
		$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
		$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
		$data['kelas'] 		= $this->Dasboard_model->getAll('kelas');
		$this->load->view('template/header', $data);
		$this->load->view('dasboard/kelas', $data);
		$this->load->view('template/footer', $data);
	}

	public function k_tambah()
	{
		$this->form_validation->set_rules('matakuliah', 'Mata Kuliah', 'trim|required');
		$this->form_validation->set_rules('pengajar', 'Pengajar', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$data['judul']		= "Site - Kelas";
			$data['status'] 	= 'active';
			$data['page'] 		= 'Kelas';
			$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
			$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
			$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
			$data['kelas'] 		= $this->Dasboard_model->getAll('kelas');
			$this->load->view('template/header', $data);
			$this->load->view('dasboard/kelas', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->session->set_flashdata('massage','ditambah');
			$this->Dasboard_model->k_insert();
			redirect('dasboard/kelas');
		}
	}



	public function k_ubah()
	{
		$data['judul']		= "Site - Kelas";
		$data['status'] 	= 'active';
		$data['page'] 		= 'Kelas';
		$data['jurusan'] 	= $this->Dasboard_model->getAll('jurusan');
		$data['matakuliah'] = $this->Dasboard_model->getAll('mata_kuliah');
		$data['pengajar'] 	= $this->Dasboard_model->getAll('pengajar');
		$data['kelas'] 		= $this->Dasboard_model->getAll('kelas');

		$this->form_validation->set_rules('matakuliah', 'Mata Kuliah', 'trim|required');
		$this->form_validation->set_rules('pengajar', 'Pengajar', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('dasboard/kelas', $data);
			$this->load->view('template/footer', $data);
		} else {
			$this->Dasboard_model->k_update();
			$this->session->set_flashdata('massage','diubah');
			redirect('dasboard/kelas');
		}
	}

	public function k_delete($id)
	{
		$this->Dasboard_model->k_hapus($id);
		$this->session->set_flashdata('massage','dihapus');
		redirect('dasboard/kelas');
	}
}

/* End of file Dasboard.php */
