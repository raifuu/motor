<?php

class Model_motor extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('motor');
	}

	public function tambah_data($data, $table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('Id_motor', $id)
							->limit(1)
							->get('motor');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_mtr($Id_motor)
	{
		$result = $this->db->where('Id_motor',$Id_motor)->get('motor');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}