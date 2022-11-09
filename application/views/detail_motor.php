<div class="container-fluid">
	
	<div class="card">
  		<h5 class="card-header">Detail Motor</h5>
  		<div class="card-body">


  		<?php foreach($motor as $mtr); ?>
    	<div class="row">
    		<div class="col-md-4">	
    			<img src="<?php echo base_url().'/assets/img/'.$mtr->gambar ?>" class="card-img-top">

    		</div>
    		<div class="col-md-8">
    			<table class="table">
    				<tr>
    					<td>Type Motor</td>
    					<td><strong><?php echo $mtr->Type_motor ?></strong></td>
    				</tr>
    				<tr>
    					<td>Plat Nomer</td>
    					<td><strong><?php echo $mtr->Plat_nomer ?></strong></td>
    				</tr>
    				<tr>
    					<td>Warna Motor</td>
    					<td><strong><?php echo $mtr->Warna_motor ?></strong></td>
    				</tr>
    				<tr>
    					<td>Merk Motor</td>
    					<td><strong><?php echo $mtr->Merk_motor ?></strong></td>
    				</tr>
    				<tr>
    					<td>Harga Sewa</td>
    					<td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($mtr->Harga_Sewa,0,',','.')  ?></strong></td>
    				</tr>
    			</table>

    			<?php echo anchor('dashboard/tambah_keranjang/'.$mtr->Id_motor,'<div class="btn btn-primary">Pesan Motor</div>') ?>

    			<?php echo anchor('dashboard/index/','<div class="btn btn-danger">Kembali</div>') ?>
    		</div>
    		
    	</div>
    	
 	 </div>
	</div>
</div>