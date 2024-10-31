<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>UPDATE DATA INVOICE</h3>

		<?php foreach ($invoice as $inv): ?>
		<form method="post" action="<?php echo base_url(). 'admin/invoice/update_resi' ?>">

			<div class="for-group">
				<label>Nama Pemesan</label>
				<input type="hidden" name="id_invoice" class="form-control" value="<?php echo $inv->id ?>">
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $inv->nama ?>">
			</div>

			<div class="for-group">
				<label>Alamat</label>
				<input type="hidden" name="id_brg" class="form-control" value="">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $inv->alamat ?>">
			</div>

			<div class="for-group">
				<label>No Telepon</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $inv->no_telepon ?>">
			</div>

			<div class="for-group">
				<label>Status</label>
				<input type="text" name="harga" class="form-control" value="<?php if($inv->status == 1){
					echo  "Lunas";
				} else if($inv->status == 2) {
					echo "Menunggu Verifikasi";
				} else{
					echo "Menunggu Pembayaran";
				}

				?>">
			</div>

			<div class="for-group">
				<label>No Resi</label>
				<input type="text" name="no_resi" class="form-control" value="">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
			
		</form>

	<?php endforeach; ?>

</div>