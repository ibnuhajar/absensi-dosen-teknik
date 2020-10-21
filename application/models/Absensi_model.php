<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_model extends CI_Model
{

	public function updateAbsen()
	{
		$dosen = htmlspecialchars($this->input->post('namedosen', true));
		$matakuliah = htmlspecialchars($this->input->post('matakuliah', true));

		$absen	= $this->input->post('absen', true);
		$absen 	+= 1 ;

		$this->db->set('absen', $absen);
		$this->db->where('matakuliah', $matakuliah);
		$this->db->update('kelas');
	}
}

/* End of file Absensi_model.php */
