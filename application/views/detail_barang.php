<div class="container-fluid">
	
<div class="card">
	<h5 class="card-header">Detail Produk</h5>
  	<div class="card-body">
  	<?php foreach($barang as $brg) : ?>
  		<div class="row">
  			<div class="col-md-4">
  				<img src="<?php echo base_url().'/image/'.$brg->gambar ?>" class="card-img-top">
  			</div>
  			<div class="col-md-8">
  				<table class="table">
  						<tr>
  							<td>Nama Produk</td>
  							<td><strong><?php echo $brg->nama_brg ?></strong></td>
  						</tr>

  						<tr>
  							<td>Keterangan</td>
  							<td><strong><?php echo $brg->keterangan ?></strong></td>
  						</tr>

  						<tr>
  							<td>Kategori</td>
  							<td><strong><?php echo $brg->kategori ?></strong></td>
  						</tr>

  						<tr>
  							<td>Lokasi</td>
  							<td><strong><?php echo $brg->lokasi ?></strong></td>
  						</tr>

  						<tr>
  							<td>Stock Barang</td>
  							<td><strong><?php echo $brg->stock ?></strong></td>
  						</tr>

  						<tr>
  							<td>Harga Barang</td>
  							<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
  						</tr>
  				</table>
  				<?php if( $brg->stock >= 1) : ?>
  				<?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg.'/dashboard', '<div class="btn btn-primary"> Cart</div>') ?>
				  <?php endif; ?>
          <?php echo anchor('welcome','<div class="btn btn-danger">Back</div>') ?>
  			</div>

  			</div>
  		<?php endforeach; ?>
  		 </div>
	</div>
</div>