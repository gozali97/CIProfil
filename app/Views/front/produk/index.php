<?= $this->extend('front/layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Start Trending Product Area -->
<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="text-center">list Katalog Bumdes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tampilProduk as $p) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image" style="height: 300px; width: 100%; margin-left: auto; margin-right: auto;">
                            <img src="<?= $p->foto ?>" alt="#" style="width: 100%; position: relative; height: 150px; max-height: 300px">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <!-- <span class="category">Watches</span> -->
                            <h4 class="title">
                                <a href="product-grids.html"><?= $p->nama ?></a>
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
                                <span>Rp. <?= number_format($p->harga, 0, '', '.') ?></span>
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