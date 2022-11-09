<?php


class model_pesanan extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('penyewaan');
	}

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama 		= $this->input->post('nama');
		$ktp 		= $this->input->post('ktp');
		$tlp 		= $this->input->post('tlp');
		$alamat 	= $this->input->post('alamat');
		$pembayaran = $this->input->post('pembayaran');

		$pesanan = array (
			'nama' 			=> $nama,
			'ktp'			=> $ktp,
			'tlp'			=> $tlp,
			'alamat' 		=> $alamat,
			'status_pembayaran' => 'Belum Lunas',
			'tgl'			=> date('Y-m-d H:i:s'),
			'batas'			=> date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 2, date('Y'))),
		);

		$this->db->insert('penyewaan', $pesanan);
		$id_penyewaan = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array (
				'id_penyewaan'	=> $id_penyewaan,
				'Id_motor'		=> $item['id'],
				'admin'			=> 10000,
				'kuantitas'		=> $item['qty'],
				'total'			=> $item['price'] * $item['qty'] + 10000,
			);
			$this->db->insert('detail_penyewaan', $data);
		}

		echo "<script>alert('Pesanan Anda Sedang di Proses')</script>";
		return true;
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}