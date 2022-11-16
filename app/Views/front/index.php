<?= $this->extend('front/layouts/layout') ?>

<?= $this->section('content') ?>
<!-- Start Hero Area -->
<?= $this->include('front/layouts/hero') ?>
<!-- End Hero Area -->

<!-- Start Trending Product Area -->
<section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title">
                    <h2>Profil Bumdes</h2>
                    <!-- {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p> --}} -->
                </div>
            </div>
            <div class="col-6">
                <div class="section-title">
                    <p><a href="#"> Lihat Semua &nbsp; <i class="lni lni-chevron-right"></i></a></p>
                    <!-- {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p> --}} -->
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($profilePager as $profil) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image" style="height: 220px; width: 100%; margin-left: auto; margin-right: auto;">
                            <img src="<?= $profil['logo']; ?>" alt="#" style="width: 90%; position: relative; max-height: 220px">
                            <div class="button">
                                <a href="#" class="btn"><i class="lni lni-info"></i> Details</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <!-- <span class="category">Watches</span> -->
                            <h4 class="title">
                                <a href="product-grids.html"><?= $profil['nama_bumdes']; ?></a>
                            </h4>
                            <!-- <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul> -->
                            <div class="">
                                <span><?= $profil['no_registrasi']; ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            <?php endforeach; ?>
            <!-- End Single Product -->
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

<!-- Start Catalog Product Area -->
<section class="banner section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title">
                    <h2>Katalog Produk</h2>
                </div>
            </div>
            <div class="col-6">
                <div class="section-title">
                    <p><a href="#"> Lihat Semua &nbsp; <i class="lni lni-chevron-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tampilProduct as $product) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image" style="height: 220px; width: 100%; margin-left: auto; margin-right: auto;">
                            <img src="<?= $product->foto; ?>" alt="#" style="width: 90%; position: relative; max-height: 220px">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <!-- <span class="category">Watches</span> -->
                            <h4 class="title">
                                <a href="product-grids.html"><?= $product->nama; ?></a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>Rp. <?= number_format($product->harga, 0, '', '.') ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Catalog Product Area -->

<?= $this->endSection() ?>