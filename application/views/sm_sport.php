<div class="container-fluid">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url('assets/img/motor1.jpg') ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url('assets/img/motor2.jpg') ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url('assets/img/motor3.jpg') ?>" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>




	<div class="row text-center mt-3">

		<?php foreach ($sm_sport as $mtr) : ?>

		<div class="card ml-3 mb-3" style="width: 18rem;">
 		 <img src="<?php echo base_url(). '/assets/img/'.$mtr->gambar ?>" class="card-img-top" alt="...">
  			<div class="card-body">
    			<h5 class="card-title mb-1"><?php echo $mtr->Type_motor ?></h5>
    			<small><?php echo $mtr->Merk_motor ?></small><br>
    			<span class="badge badge-danger mb-3">Rp. <?php echo $mtr->Harga_Sewa ?></span><br>
    			<?php echo anchor('dashboard/tambah_keranjang/'.$mtr->Id_motor,'<div class="btn btn-primary">Pesan Motor</div>') ?>
    			<?php echo anchor('dashboard/detail/'.$mtr->Id_motor,'<div class="btn btn-success">Detail Motor</div>') ?>
    			
  			</div>
		</div>



		<?php endforeach; ?>

	</div>
</div>