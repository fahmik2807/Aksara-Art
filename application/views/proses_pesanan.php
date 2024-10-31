<div class="container-fluid">
	<div class="alert alert-success">
		<p class="text-center align-middle"><li><?php echo $invoice->bank ?></li> <br>Selamat, Pesanan Anda telah Berhasil diproses!! Harap melunasi pembayaran anda malalui rekening yang tertera di atas, Jika sudah transfer, silahkan upload bukti pembayaran anda dengan
			<a href="<?php echo base_url('dashboard/transaksi') ?>">klik disini</a> </p>
				<div class="form-group">
					<div class="col-md-2"><b>Nama Lengkap</b></div>
					<div class="col-md-8"> <?php echo $invoice->nama ?> </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Alamat</b></div>
					<div class="col-md-8"> <?php echo $invoice->alamat ?> </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>No Telepon</b></div>
					<div class="col-md-8"> <?php echo $invoice->no_telepon ?> </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Jasa Pengiriman</b></div>
					<div class="col-md-8"> <?php echo $invoice->jasa_pengiriman ?> </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Kode Unik</b></div>
					<div class="col-md-8"> <?php echo $invoice->kode_unik ?> </div>
				</div>

			<div class="form-group">
				<?php 
				$total = 0;
				foreach ($pesanan as $psn) :
					$subtotal = $psn->jumlah * $psn->harga;
					$total += $subtotal;
				endforeach; 
				$hasil = $total + $invoice->kode_unik + $ongkir;
				 ?>
					<div class="col-md-2"><b>Total Pembayaran</b></div>
					<div class="col-md-8"> Rp. <?php echo number_format($hasil,0,',','.')  ?> </div>
				</div>
	</div>
</div>
<p></p>
				