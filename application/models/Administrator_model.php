<?php 
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Administrator_model extends CI_Model {
  
	public function admin($poto)
	{
		$nama  		= htmlspecialchars($this->input->post('nama',true));
		$email 		= htmlspecialchars($this->input->post('email',true));
		$username 	= htmlspecialchars($this->input->post('username',true));
		$password 	= htmlspecialchars($this->input->post('password',true));
		$pendidikan = $this->input->post('pendidikan',true);
		$alamat 	= $this->input->post('alamat',true);
		$note 		= $this->input->post('note',true);
		$foto 		= $poto;
		$date 		= htmlspecialchars($this->input->post('date',true));

		$data = [
			"nama" 			=> $nama,
			"email"			=> $email,
			"username" 		=> $username,
			"password" 		=> $password,
			"pendidikan" 	=> $pendidikan,
			"alamat" 		=> $alamat,
			"note"			=> $note,
			"foto"			=> $foto,
			"date"			=> $date
		];
		
		$this->db->replace('admin', $data);
	}
  
  }
  
  /* End of file Administrator_model.php */
  