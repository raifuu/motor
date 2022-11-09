<div class="container pt-2">
	<h5><i class="fas fa-shopping-cart mr-2" style="font-size: 25px; letter-spacing: 3px;"></i>Keranjang Belanja</h5>
      <div class="dropdown-divider mb-3"></div>
	<?php  
        $keranjang = '' .$this->cart->total_items(). ' Items'
    ?>

	<table class="table table-bordered table-striped table-hover mt-3 border-dark">
		
		<tr class="text-center">
			<td>No</td>
			<td>Nama Motor</td>
			<td>Unit</td>
			<td>Harga</td>
			<td>Sub Total</td>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?> Unit</td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?> ,-</td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?> ,-</td>
			</tr>

		<?php endforeach; ?>
			<tr>
				<td colspan="4">Total Harga :</td>
				<td style="color: mediumaquamarine;" align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?> ,-</td>
			</tr>

	</table>

	<div align="center" class="pt-2 pb-2">
		<a href="<?php echo base_url('dashboard') ?>"><div class="btn btn-sm text-white bg-dark" style="letter-spacing: 3px;">Kembali</div></a>
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger" style="letter-spacing: 3px;">Hapus</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm text-white bg-primary" style="letter-spacing: 3px;">Pesan Motor</div></a>
	</div>

	

</div>