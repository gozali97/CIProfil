<?= $this->extend('front/auth/template') ?>

<?= $this->section('content') ?>
<div class="login-box">
    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12">
            <div class="logo">
                <!-- <span class="logo-font">Profil</span>Bumdes -->
                <img src="https://bumdes.id/id/public/assets/home/img/bumdes.svg" alt="Logo">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <br>
            <h3 class="header-title">MASUK</h3>
            
            <?php if(session()->getFlashdata('msg')) :?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>

            <form class="login-form" action="/login/auth" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="text" name="email" value="<?php echo set_value('email'); ?>"  class="form-control" placeholder="Email" required >
                </div>
                <div class="form-group">
                    <small style="font-size: 10px;">*Kode yang dikirimkan lewat email saat mendaftar profil bumdes</small>
                    <input type="Password" name="kode" class="form-control" placeholder="Masukan Kode Login" required>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </div>
                <div class="form-group">
                    <div class="text-center">Belum Punya? <a href="<?= base_url('/register'); ?>">Daftar</a></div>
                </div>
            </form>
        </div>

        <div class="col-sm-6 hide-on-mobile">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider-feature-card">
                            <img src="https://i.imgur.com/YMn8Xo1.png" alt="">
                            <h3 class="slider-title">Title Here</h3>
                            <p class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Iure, odio!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider-feature-card">
                            <img src="https://i.imgur.com/Yi5KXKM.png" alt="">
                            <h3 class="slider-title">Title Here</h3>
                            <p class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Ratione, debitis?</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>