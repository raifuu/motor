<?php

class kategori extends CI_Controller
{
	public function honda()
	{
		$data['honda'] = $this->model_kategori->honda()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('honda',$data);
		$this->load->view('templates/footer');
	}

	public function yamaha()
	{
		$data['yamaha'] = $this->model_kategori->yamaha()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('yamaha',$data);
		$this->load->view('templates/footer');
	}

	public function kawasaki()
	{
		$data['kawasaki'] = $this->model_kategori->kawasaki()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kawasaki',$data);
		$this->load->view('templates/footer');
	}

	public function viar()
	{
		$data['viar'] = $this->model_kategori->viar()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('viar',$data);
		$this->load->view('templates/footer');
	}

	public function sm_sport()
	{
		$data['sm_sport'] = $this->model_kategori->sm_sport()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sm_sport',$data);
		$this->load->view('templates/footer');
	}


}