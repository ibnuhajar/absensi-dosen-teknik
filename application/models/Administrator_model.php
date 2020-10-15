<?php 
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Administrator_model extends CI_Model {


	public function get($table)
	{
		$data = $this->db->get($table)->row_array();
		return $data;
	}
  
	public function admin($poto)
	{
		$id			= htmlspecialchars($this->input->post('id',true));
		$nama  		= htmlspecialchars($this->input->post('nama',true));
		$email 		= htmlspecialchars($this->input->post('email',true));
		$role		= htmlspecialchars($this->input->post('role',true));
		$username 	= htmlspecialchars($this->input->post('username',true));
		$password 	= htmlspecialchars($this->input->post('password',true));
		$pendidikan = $this->input->post('pendidikan',true);
		$alamat 	= $this->input->post('alamat',true);
		$note 		= $this->input->post('note',true);
		$foto 		= $poto;
		$date 		= htmlspecialchars($this->input->post('date',true));

		$data = [
			"id"			=> $id,
			"nama" 			=> $nama,
			"email"			=> $email,
			"role"			=> $role,
			"username" 		=> $username,
			"password" 		=> $password,
			"pendidikan" 	=> $pendidikan,
			"alamat" 		=> $alamat,
			"note"			=> $note,
			"foto"			=> $foto,
			"date"			=> $date
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->replace('admin', $data);
	}
  
	public function reset()
	{
		$username = htmlspecialchars($this->input->post('username',true));
		$password = htmlspecialchars($this->input->post('password',true));
		
		$this->db->where('id',$this->input->post('id',true));
		// $this->db->set('username',$username);
		$this->db->set('password',$password);
		$this->db->update('admin');
	}
  }
  
  /* End of file Administrator_model.php */
  