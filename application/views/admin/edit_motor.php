<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA MOTOR</h3>

	<?php foreach($motor as $mtr) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_motor/update' ?>">

			<div class="for-group">
				<label>Type Motor</label>
				<input type="text" name="Type_motor" class="form-control" value="<?php echo $mtr->Type_motor ?>">
			</div>

			<div class="for-group">
				<label>Plat Nomer</label>
				<input type="hidden" name="Id_motor" class="form-control" value="<?php echo $mtr->Id_motor ?>">
				<input type="text" name="Plat_nomer" class="form-control" value="<?php echo $mtr->Plat_nomer ?>">
			</div>

			<div class="for-group">
				<label>Warna Motor</label>
				<input type="text" name="Warna_motor" class="form-control" value="<?php echo $mtr->Warna_motor ?>">
			</div>

			<div class="for-group">
				<label>Merk Motor</label>
				<input type="text" name="Merk_motor" class="form-control" value="<?php echo $mtr->Merk_motor ?>">
			</div>

			<div class="for-group">
				<label>Harga Sewa</label>
				<input type="text" name="Harga_Sewa" class="form-control" value="<?php echo $mtr->Harga_Sewa ?>">
			</div>

			<div class="for-group">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" value="<?php echo $mtr->gambar ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
			
		</form>

	<?php endforeach; ?>
</div>