<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_motor"><i class="fas fa-plus fa-sm"></i> Tambah Motor</button>

	<table class="table table-bordered">
		<tr>
			<th>No Motor</th>
			<th>Type Motor</th>
			<th>Plat Nomer</th>
			<th>Warna Motor</th>
			<th>Merk Motor</th>
			<th>Harga Sewa</th>
			<th>Gambar Motor</th>
			<th colspan="3">Aksi</th>
		</tr>
		
		<?php
		$no=1;
		foreach($motor as $mtr) :?>

			<tr>
				
				<td><?php echo $mtr->Id_motor ?></td>
				<td><?php echo $mtr->Type_motor ?></td>
				<td><?php echo $mtr->Plat_nomer ?></td>
				<td><?php echo $mtr->Warna_motor ?></td>
				<td><?php echo $mtr->Merk_motor ?></td>
        <td><?php echo $mtr->Harga_Sewa ?></td>
				<!-- <td><img src=""   ><?php echo $mtr->gambar ?></td"> -->
				<td><img src="<?php echo base_url()."assets/img/$mtr->gambar" ?>" style="width: 300px; height: auto;"><?php echo $mtr->gambar; ?> </td>
				<td><?php echo anchor('admin/data_motor/edit/' .$mtr->Id_motor, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_motor/hapus/' .$mtr->Id_motor, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_motor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT MOTOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_motor/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Type Motor</label>
        		<input type="text" name="Type_motor" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Plat Nomer</label>
        		<input type="text" name="Plat_nomer" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Warna Motor</label>
        		<input type="text" name="Warna_motor" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Merk Motor</label>
            <select name="Merk_motor" class="form-control">
              <option>Honda</option>
              <option>Yamaha</option>
              <option>Kawasaki</option>
              <option>Viar</option>
              <option>SM Sport</option>
            </select>
        	</div>

        	<div class="form-group">
        		<label>Harga Sewa</label>
        		<input type="text" name="Harga_Sewa" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Motor</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

  		</form>

    </div>
  </div>
</div>