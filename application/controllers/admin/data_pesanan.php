<?php 

class data_pesanan extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('model_pesanan');
	}

	public function index()
	{
		$data['penyewaan'] = $this->model_pesanan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pesanan', $data);
		$this->load->view('templates_admin/footer');
	}

		public function edit($id_penyewaan)
	{
		$where = array('id_penyewaan' =>$id_penyewaan);
		$data['penyewaan'] = $this->model_pesanan->edit_data($where, 'penyewaan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_sewa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_penyewaan						= $this->input->post('id_penyewaan');
		$status_pembayaran		= $this->input->post('status_pembayaran');

		$data = array(
			'status_pembayaran'		=> $status_pembayaran
		);

		$where = array(
			'id_penyewaan' => $id_penyewaan
		);

		$this->model_pesanan->update_data($where,$data,'penyewaan');
		redirect('admin/data_pesanan/index');
	}
}