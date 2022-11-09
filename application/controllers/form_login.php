<?php

class form_login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
	}
 
	function index(){
		$this->load->view('templates/header');
		$this->load->view('form_login');
		$this->load->view('templates/footer');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login('user' ,$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url(''));
 
		}else{
			echo "<script>alert(`E - Mail atau Password Anda Salah!!`)</script>";
			redirect('form_login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('form_login'));
	}
}