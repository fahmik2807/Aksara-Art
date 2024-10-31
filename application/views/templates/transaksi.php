<div class="container-fluid">	
	<h4>Riwayat Transaksi</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Nama Penerima</th>
			<th>Alamat Penerima</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Status</th>
			<th>Keterangan</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
		foreach ($transaksi->result() as $inv): ?>
			<tr>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php if($inv->status == 1){
					echo "Proses Pengiriman";
				}else if($inv->status == 2){
					echo "Menunggu Verifikasi";
				}else {
					?>Silakan Melakukan Pembayaran
					<?php
				} ?></td>
				<td><a href="<?php echo base_url();?>dashboard/detail_belanja/<?php echo $inv->id ?>" type="button" class="btn btn-info">Detail</a></td>
				<td> 
					<?php if($inv->status == 1){
				}else if($inv->status == 2){

				}else {
					?>
					<a href="<?php echo base_url(); ?>dashboard/upload/<?php echo $inv->id ?>" type="button" class="btn btn-primary">Upload</a>
					<?php
				} ?>
				</td>
				<td>
				<?php echo anchor('dashboard/hapus_transaksi/' .$inv->id, '<div class="btn btn-danger btn-sm">Hapus</div>')  ?>
			</td>
			</tr>
		<?php endforeach; ?>
		
	</table>
</div>