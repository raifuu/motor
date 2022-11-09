<?php 

class dashboard extends CI_Controller{

	function __construct(){
	parent::__construct();
	
	if($this->session->userdata('status') != "login"){
			redirect(base_url("form_login"));
		}
	}

	public function index()
	{
		$data['motor'] = $this->model_motor->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
	
	public function tambah_keranjang($id)
	{
		$motor = $this->model_motor->find($id);

			$data = array(
	        'id'      => $motor->Id_motor,
	        'qty'     => 1,
	        'price'   => $motor->Harga_Sewa,
	        'name'    => $motor->Type_motor
			);

			$this->cart->insert($data);
			redirect('dashboard');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	} 

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pesanan()
	{
		$is_processed = $this->model_pesanan->index();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('keranjang');
			$this->load->view('templates/footer');
		} else {
			echo "onclick='return confirm(`Maaf, Pesanan Gagal di Proses !`)'";
		}
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function detail($Id_motor)
	{
		$data['motor'] = $this->model_motor->detail_mtr($Id_motor);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_motor',$data);
		$this->load->view('templates/footer');
	}

}