<!DOCTYPE html>
<html>
<head>
	<title>Form Input File Transaksi</title>
</head>
<body>
<p class="text-center align-middle">Selamat, Pesanan Anda telah Berhasil diproses!! silahkan melakukan konfirmasi pembayaran </p>
<p></p>

<?php 


echo form_open('dashboard/upload', array('enctype' => 'multipart/form-data'));?>
<input type="hidden" name="id" value="<?php echo $id_invoice ?>">
<input type="file" name="input_gambar" />
	<br /><br />
<input type="submit" name="submit" value="upload" />
 
<?php echo form_close(); ?>

</body>
</html>


