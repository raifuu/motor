<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT PESANAN</h3>

	<?php foreach($penyewaan as $psn) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_pesanan/update' ?>">

			<div class="for-group">
				<label>Nama Penyewa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $psn->id_penyewaan ?>">
				<input disabled type="text" name="nama" class="form-control" value="<?php echo $psn->nama ?>">
			</div>

			<div class="for-group">
				<label>Status Pembayaran</label><br>
				<input type="checkbox" <?=($psn->status_pembayaran=='Lunas'?'checked':'Belum Lunas')?> class="form-check-input ml-2" name="status_pembayaran" value="Lunas"><br>
				<small></small>
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
			
		</form>

	<?php endforeach; ?>
</div>