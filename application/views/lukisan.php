<div class="container-fluid">
<style>
 img { 
  width: 768px;
  height: 450px; 
  float: left;
}
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" alt="Motif Dayak">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="Pure Bali">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="Ombak">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>




  <div class="row text-center mt-4">
    
    <?php foreach ($lukisan as $brg) : ?>
      <style>
        img {
          width: 300px;
          height: 200px;
        }
      </style>

      <div class="card ml-3 mb-3" style="width: 16rem;">
       <img src="<?php echo base_url().'/image/'.$brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
          <small><?php echo $brg->keterangan ?></small>
          <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga,'0',',','.') ?></span>



          <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-primary"> Cart</div>') ?>
          <?php echo anchor('dashboard/detail/' .$brg->id_brg, '<div class="btn btn-success">Detail</div>') ?>
          
        </div>
      </div>

    <?php endforeach; ?>
    
  </div>
</div>