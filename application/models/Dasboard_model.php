<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard_model extends CI_Model
{

	/* bagian model untuk utiliti di controller dasboard */

	public function getCount($table)
	{
		$data = $this->db->count_all($table);
		return $data;
	}

	public function getAll($table)
	{
		$data = $this->db->get($table)->result_array();
		return $data;
	}

	public function getById($table, $id)
	{
		$data = $this->db->get_where($table, ["id" => $id])->row_array();
		return $data;
	}


	/* bagian model untuk method jurusan */

	public function update_jurusan()
	{
		$nama_jurusan 	= htmlspecialchars($this->input->post('namajurusan', true));
		$url_jurusan 	= htmlspecialchars($this->input->post('urljurusan', true));
		$deskripsi 		= $this->input->post('deskripsi', true);
		$date 			= htmlspecialchars($this->input->post('date', true));

		$this->db->set('url_jurusan', $url_jurusan);
		$this->db->set('deskripsi_jurusan', $deskripsi);
		$this->db->set('date_jurusan', $date);
		$this->db->where('nama_jurusan', $nama_jurusan);
		$this->db->update('jurusan');
	}


	/* bagian model untuk method matakuliah */

	public function insert_mk()
	{
		$nama_mk 		= htmlspecialchars($this->input->post('matakuliah', true));
		$sks_mk 		= htmlspecialchars($this->input->post('sks', true));
		$semester_mk 	= htmlspecialchars($this->input->post('semester', true));
		$jurusan_mk 	= htmlspecialchars($this->input->post('namajurusan', true));
		$deskripsi_mk 	= $this->input->post('deskripsi', true);
		$date_mk 		= htmlspecialchars($this->input->post('date', true));

		$data = [
			'nama_mk' 		=> $nama_mk,
			'sks_mk'		=> $sks_mk,
			'semester_mk' 	=> $semester_mk,
			'jurusan_mk' 	=> $jurusan_mk,
			'deskripsi_mk' 	=> $deskripsi_mk,
			'date_mk' 		=> $date_mk,
		];

		$this->db->insert('mata_kuliah', $data);
	}

	public function mk_hapus($id)
	{
		$where = $this->db->where('id_mk', $id);
		$this->db->delete('mata_kuliah', $where);
	}


	/* bagian model untuk method pengajar */

	public function insert_p()
	{
		$nip 		= htmlspecialchars($this->input->post('nip', true));
		$nama 		= htmlspecialchars($this->input->post('namapengajar', true));
		$jurusan 	= htmlspecialchars($this->input->post('namajurusan', true));
		$username 	= htmlspecialchars($this->input->post('username', true));
		$password 	= htmlspecialchars($this->input->post('password', true));
		$deskripsi 	= $this->input->post('deskripsi', true);
		$date 		= htmlspecialchars($this->input->post('date', true));

		$data = [
			"nip_pengajar" 			=> $nip,
			"nama_pengajar" 		=> $nama,
			"username" 				=> $username,
			"password" 				=> $password,
			"jurusan_pengajar" 		=> $jurusan,
			"deskripsi_pengajar" 	=> $deskripsi,
			"date_pengajar" 		=> $date,
		];

		$this->db->insert('pengajar', $data);
	}

	public function p_hapus($id)
	{
		$where = $this->db->where('id_pengajar', $id);
		$this->db->delete('pengajar', $where);
	}


	/* bagian model untuk method pengajar */
	public function k_insert()
	{
		$matakuliah = htmlspecialchars($this->input->post('matakuliah', true));
		$pengajar	= htmlspecialchars($this->input->post('pengajar', true));
		$jurusan	= htmlspecialchars($this->input->post('jurusan', true));
		$absen		= htmlspecialchars($this->input->post('absen', true));
		$date		= htmlspecialchars($this->input->post('date', true));
		$data = [
			'dosen' 		=> $pengajar,
			'matakuliah' 	=> $matakuliah,
			'jurusan' 		=> $jurusan,
			'absen' 		=> $absen,
			'date' 			=> $date,
		];

		$this->db->insert('kelas', $data);
	}

	public function k_update()
	{
		$id 		= htmlspecialchars($this->input->post('id', true));
		$matakuliah = htmlspecialchars($this->input->post('matakuliah', true));
		$pengajar	= htmlspecialchars($this->input->post('pengajar', true));
		$jurusan	= htmlspecialchars($this->input->post('jurusan', true));
		$absen		= htmlspecialchars($this->input->post('absen', true));
		$date		= htmlspecialchars($this->input->post('date', true));
		$data = [
			'dosen' 		=> $pengajar,
			'matakuliah' 	=> $matakuliah,
			'jurusan' 		=> $jurusan,
			'absen' 		=> $absen,
			'date' 			=> $date,
		];
		$where = $this->db->where('id', $id);
		$this->db->update('kelas', $data, $where);
	}

	public function k_hapus($id)
	{
		$where = $this->db->where('id', $id);
		$this->db->delete('kelas', $where);
	}

	
}

/* End of file Dasboard_model.php */
