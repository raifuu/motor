 <div class="container-fluid pt-2">
	<h5><i class="fas fa-money-bill mr-2" style="font-size: 25px;"></i>Pemesanan</h5>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm text-white bg-success">
				<?php 
				$grand_total=0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $items)
					{
						$grand_total = $grand_total + $items['subtotal'];
					}
				echo "<h6>Total Pesanan Adalah : Rp. " .number_format($grand_total,0,',','.').  " ,-";
				} ?>
			</div>
		<br><br>
		<h3 style="letter-spacing: 2px;">Input Detail Pemesanan</h3>

		<form method="post" action="<?php echo base_url('dashboard/pesanan') ?>">
				
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" required>
			</div>

			<div class="form-group">
				<label>No KTP</label>
				<input type="number" name="ktp" placeholder="KTP penyewa" class="form-control" required>
			</div>

			<div class="for-group">
    			<label>Nomor Telepon</label>
    			<input type="text" id="phone_number" name="tlp" onkeyup="format_number(this)"class="form-control" >
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" placeholder="Alamat Lengkap Anda" class="form-control"></textarea>
			</div>

			<button type="submit" class="btn btn-sm text-white mb-3 bg-primary">Pesan</button>
 
		</form>
		
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
