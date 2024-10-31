<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Status</th>
			<th>Bukti Transfer</th>
			<th>Keterangan</th>
			<th colspan="2">Option</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php if($inv->status == 1){
					echo  "Lunas";
				} else if($inv->status == 2) {
					echo "Menunggu Verifikasi";
				} else{
					echo "Menunggu Pembayaran";
				}

				?></td>
				<td><img src="<?php echo base_url().'/assets/img_transaksi/'.$inv->bukti_transaksi  ?>" height="42" width="42"></td>
				<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
				<?php if($inv->status == 2){  ?>
					
				<td><?php echo anchor('admin/invoice/verif/'.$inv->id,'<div class="btn btn-sm btn-primary">Verif</div>') ?></td>
					
				<?php }else if($inv->status == 1){ ?>
					<td><?php echo anchor('admin/invoice/update/'.$inv->id,'<div class="btn btn-sm btn-secondary">Update</div>') ?></td>
				<?php } ?>
				<td><?php echo anchor('admin/invoice/hapus_invoice/' .$inv->id, '<div class="btn btn-danger btn-sm">Hapus</div>')  ?></td>

				
			</tr>
		<?php endforeach; ?>
		
	</table>
</div>