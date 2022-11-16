<?= $this->extend('front/layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Start Trending Product Area -->
<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4" style="height: 350px; margin-left: auto; margin-right: auto;">
                            <img src="<?= $logo ?>" class="img-fluid rounded-start" alt="..." style="width: 90%; position: relative; max-height: 350px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Nama Bumdes :</p>
                                <h3 class="card-title"><?= $nama_bumdes ?></h3>
                                <p class="card-text">No Registrasi :</p>
                                <p class="text-body fs-5 fw-bold"><?= $no_registrasi ?></p>
                                <p class="card-text">Desa :</p>
                                <p class="text-body fs-6 fw-bold"><?= $desa ?></p>
                                <p class=" card-text">Alamat :</p>
                                <p class="text-body fs-6 fw-bold"><?= $alamat ?></p>
                                <p class="card-text">Ket :</p>
                                <p class="text-body"><?= $ket ?></p>
                                <!-- <p class="card-text">No Registrasi: <small class="text-muted"><?= $no_registrasi ?></small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="text-center">list Product <?= $nama_bumdes ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($profil as $p) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image" style="height: 220px; width: 100%; margin-left: auto; margin-right: auto;">
                            <img src="<?= $p['foto'] ?>" alt="#" style="width: 90%; position: relative; max-height: 220px">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category"><?= $p['kode'] ?></span>
                            <h4 class="title">
                                <a href="product-grids.html"><?= $p['nama'] ?></a>
                            </h4>
                            <!-- <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul> -->
                            <span class="category mt-2" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $p['deskripsi'] ?></span>
                            <div class="price">
                                <span>Rp. <?= number_format($p['harga'], 0, '', '.') ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            <?php endforeach; ?>
        </div>
        <div class="pagination center">
            <ul class="pagination-list">
                <li><a href="javascript:void(0)">1</a></li>
                <li class="active"><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">4</a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Trending Product Area -->

<?= $this->endSection() ?>