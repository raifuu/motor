<?php 

class model_daftar extends CI_Model{

	public function daftar($data, $table)
	{
		$this->db->insert($table,$data);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
		 	return false;
		 } else {
		 	return true;
		 }
	}
}