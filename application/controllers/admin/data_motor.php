<?php 

class Data_motor extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('model_motor');
	}

	public function index()
	{
		$data['motor'] = $this->model_motor->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_motor', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$Id_motor 		= $this->input->post('Id_motor');
		$Type_motor 	= $this->input->post('Type_motor');
		$Plat_nomer 	= $this->input->post('Plat_nomer');
		$Warna_motor 	= $this->input->post('Warna_motor');
		$Merk_motor 	= $this->input->post('Merk_motor');
		$Harga_Sewa 	= $this->input->post('Harga_Sewa');
		$gambar 		= $_FILES['gambar']['name'];
		if ($gambar !=''){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal diUpload!";
			}else {
				$this->upload->data();
			}
		}

		$data = array (
			'Id_motor'		=> $Id_motor,
			'Type_motor'	=> $Type_motor,
			'Plat_nomer'	=> $Plat_nomer,
			'Warna_motor'	=> $Warna_motor,
			'Merk_motor'	=> $Merk_motor,
			'Harga_Sewa'	=> $Harga_Sewa,
			'gambar'		=> $gambar
		);

		$this->model_motor->tambah_data($data, 'motor');
		redirect('admin/data_motor/index');
	}

	public function edit($Id_motor)
	{
		$where = array('Id_motor' =>$Id_motor);
		$data['motor'] = $this->model_motor->edit_data($where, 'motor')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_motor', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$Id_motor		= $this->input->post('Id_motor');
		$Type_motor		= $this->input->post('Type_motor');
		$Plat_nomer		= $this->input->post('Plat_nomer');
		$Warna_motor	= $this->input->post('Warna_motor');
		$Merk_motor		= $this->input->post('Merk_motor');
		$Harga_Sewa		= $this->input->post('Harga_Sewa');
		$gambar			= $this->input->post('gambar');

		if ($gambar !=''){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal diUpload!";
			}else {
				$this->upload->data();
			}
		}

		$data = array(

			'Type_motor'	=> $Type_motor,
			'Plat_nomer'	=> $Plat_nomer,
			'Warna_motor'	=> $Warna_motor,
			'Merk_motor'	=> $Merk_motor,
			'Harga_Sewa'	=> $Harga_Sewa,
			'gambar'		=> $gambar
		);

		$where = array(
			'Id_motor'=> $Id_motor
		);

		$this->model_motor->update_data($where,$data,'motor');
		redirect('admin/data_motor/index');
	}

	public function hapus ($Id_motor)
	{
		$where = array('Id_motor' => $Id_motor);
		$this->model_motor->hapus_data($where, 'motor');
		redirect('admin/data_motor/index');
	}
}