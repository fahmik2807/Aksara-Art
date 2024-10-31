<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
	<table class="table table-bordered">
		<tr>

			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>LOKASI</th>
			<th>HARGA</th>
			<th>STOCK</th>
			<th colspan="3">AKSI</th>

		</tr>

		<?php 
		$no=3;
		foreach($barang as $brg) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_brg ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->lokasi ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stock ?></td>
				<td><?php echo anchor('admin_galeri/data_brg/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin_galeri/data_brg/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')  ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin_galeri/data_brg/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >

        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
        			<option hidden>Pilih Kategori</option>
        			<option>Lukisan</option>
        			<!--<option>Accessories</option>-->
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Lokasi</label>
        		<select class="form-control" name="lokasi">
        			<option hidden>Pilih Lokasi</option>
        			<option>Hadiprana Gallery, Jakarta Selatan</option>
        			<option>Galeri salihara, Jakarta Selatan</option>
        			<option>Jo and Do Gallery, Depok</option>
        		</select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stock</label>
        		<input type="text" name="stock" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>

    </div>
  </div>
</div>