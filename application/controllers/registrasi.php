<?php

class registrasi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_daftar');
		$this->load->library('form_validation');
	}
 

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('registrasi');
		$this->load->view('templates/footer');
	}

	public function daftar()
	{

		$nama			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');

		$data = array (
				'nama'			=>$nama,
				'username'		=>$username,
				'password'		=>$password,
			);

		$this->model_daftar->daftar($data, 'user');
		redirect('form_login');
	}
}