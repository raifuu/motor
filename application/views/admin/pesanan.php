<div class="container">
	<div>
		
		<table class="table table-striped table-hover table-bordered">
		<tr class="text-center">
			<th>No</th>
			<th>Nama Penyewa</th>
			<th>No KTP</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Status Pembayaran</th>
			<th>Tanggal</th>
			<th>Batas</th>
			<th>Action</th>
		</tr>

		<?php
		$no=1;
		foreach($penyewaan as $psn) :?>

		<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $psn->nama ?></td>
				<td><?php echo $psn->ktp ?></td>
				<td><?php echo $psn->tlp ?></td>
				<td><?php echo $psn->alamat ?></td>
				<td><?php echo $psn->status_pembayaran ?></td>
				<td><?php echo $psn->tgl ?></td>
				<td><?php echo $psn->batas ?></td>
				<td><?php echo anchor('admin/data_pesanan/edit/' .$psn->id_penyewaan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>

		</table>

	</div>
</div>