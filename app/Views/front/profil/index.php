<?= $this->extend('front/layouts/layout') ?>

<?= $this->section('content') ?>

<section class="section blog-section blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <?php foreach ($profilePager as $profil) : ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-blog">
                                <div class="blog-img" style="height: 220px; width: 100%; margin-left: auto; margin-right: auto;">
                                    <img src="<?= $profil['logo']; ?>" alt="#" style="width: 90%; position: relative; max-height: 220px">
                                </div>
                                <div class="blog-content">
                                    <a class="category" href="javascript:void(0)"><?= $profil['no_registrasi']; ?></a>
                                    <h4>
                                        <a href="blog-single-sidebar.html"><?= $profil['nama_bumdes']; ?></a>
                                    </h4>
                                    <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $profil['ket']; ?></p>
                                    <div class=" button">
                                        <a href="<?= base_url('profil/detail/' . $profil['id']) ?>" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pagination center blog-grid-page">
                    <ul class="pagination-list">
                        <li><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>