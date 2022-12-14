<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/banner3.png') ?>" class="d-block w-100" alt="...">
            </div>

            
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/banner41.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/silder2.jpg') ?>" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" style="background-color: transparent !important; border:none !important;" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" style="background-color: transparent !important; border:none !important;" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    
    <div class="row text-center mt-5">

        <?php foreach ($bedroom as $brg) {  ?>
            <div class="card ml-3 mt-3" style="width: 18rem;">
                <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg; ?></h5>                    
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.'); ?></span> <br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-danger">Tambah ke keranjang</div>'); ?>
                    <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>'); ?>
                    <!-- <a href="#" class="btn btn-sm btn-primary">Tambah ke Keranjang</a> -->
                    
                </div>
            </div>
        <?php } ?>
    </div>

</div>