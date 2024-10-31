<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

	<?php foreach($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_brg/update' ?>">

			<div class="for-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
			</div>

			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
			</div>

			<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
					<option value="<?php echo $brg->kategori ?>" hidden><?php echo $brg->kategori ?></option>
					<option>Lukisan</option>
        			<!--<option>Accessories</option>-->
        		</select>
        	</div>

			<div class="form-group">
        		<label>Lokasi</label>
        		<select class="form-control" name="lokasi">
				<option value="<?php echo $brg->lokasi ?>" hidden><?php echo $brg->lokasi ?></option>
				    <option>Hadiprana Gallery, Jakarta Selatan</option>
        			<option>Galeri salihara, Jakarta Selatan</option>
        			<option>Jo and Do Gallery, Depok</option>
        		</select>
        	</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div>

			<div class="for-group">
				<label>Stock</label>
				<input type="text" name="stock" class="form-control" value="<?php echo $brg->stock ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
			
		</form>

	<?php endforeach; ?>
</div>