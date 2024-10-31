<div class="container-fluid">
	<div class="alert alert-success">
		<?php 

		$resi_data = $resi->result();

		foreach ($user->result() as $inv){ ?>
		<p class="text-center align-middle"></p>
				<div class="form-group">
					<div class="col-md-2"><b>Nama Penerima</b></div>
					<div class="col-md-8"><?php echo $inv->nama; ?> </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Nama Barang</b></div>
					<?php
						$no=1;
						$total = 0;
						foreach ($detail->result() as $obj) {
							echo "<div class='col-md-8'>".$no.". ". $obj->nama_brg."(".$obj->jumlah.")</div>";
							$total_harga_barang = $obj->harga * $obj->jumlah;
							$total += $total_harga_barang;
							$no++; 
						}
						$total += $inv->kode_unik;
					?>
					
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>No Telepon</b></div>
					<div class="col-md-8"><?php echo $inv->no_telepon; ?>  </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Alamat</b></div>
					<div class="col-md-8"><?php echo $inv->alamat; ?>  </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Total</b></div>
					<div class="col-md-8"><?php echo "Rp " . number_format($total,2,',','.'); ?>   </div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><b>Status</b></div>
					<div class="col-md-8"><?php if($inv->status == 1){
						echo "Proses Pengiriman";
					} else {
						echo "Silakan Melakukan Pembayaran";
					} ?>  </div>
				</div>
				<?php } ?>
				<div class="form-group">
					<div class="col-md-2"><b>No Resi :</b></div>
					<div class="col-md-8"><?php echo $resi_data[0]->resi; ?></div>
				</div>