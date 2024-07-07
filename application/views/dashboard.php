<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 1"></button>
  </div>
  <div class="carousel-inner mb-2">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>

    <div class="row text-center mt-3">

        <?php foreach($barang as $brg) : ?>

            <div class="card ml-2 mb-2" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
                <medium><?php echo $brg->keterangan ?></medium><br>
                <span class="badge badge-pill badge-success mb-2">Rp. <?php echo $brg->harga ?></span>
                <a href="#" class="btn btn-sm btn-primary mb-2">Tambah Ke Keranjang</a>
                <a href="#" class="btn btn-sm btn-success">Detail</a>
            </div>
            </div>

        <?php endforeach;?>
    </div>
    <a href="http://www.freepik.com">Slide Picture Designed by Freepik</a>
</div>