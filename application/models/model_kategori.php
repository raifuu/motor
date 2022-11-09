<?php

class model_kategori extends CI_Model
{
	public function honda()
	{
		return $this->db->get_where("motor", array('Merk_motor' => 'Honda'));
	}

	public function kawasaki()
	{
		return $this->db->get_where("motor", array('Merk_motor' => 'Kawasaki'));
	}

	public function sm_sport()
	{
		return $this->db->get_where("motor", array('Merk_motor' => 'SM Sport'));
	}

	public function viar()
	{
		return $this->db->get_where("motor", array('Merk_motor' => 'Viar'));
	}

	public function yamaha()
	{
		return $this->db->get_where("motor", array('Merk_motor' => 'Yamaha'));
	}

}

