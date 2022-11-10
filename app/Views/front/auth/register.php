<?= $this->extend('front/auth/template') ?>

<?= $this->section('content') ?>
<div class="login-box">
    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12">
            <div class="logo">
                <!-- <span class="logo-font">Profil</span>Bumdes -->
                <img src="https://bumdes.id/id/public/assets/home/img/bumdes.svg" alt="Logo">
            </div>
            <br>
            <h3 class="header-title">DAFTAR</h3>
        </div>
    </div>
    <!-- <div class="row"> -->
    <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>

    <form class="login-form" method="POST" action="<?= base_url('/register'); ?>" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row">


            <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="form-group">
                    <label for="no_registrasi" class="form-label">Nomor Registrasi Bumdes</label>
                    <br>
                    <small style="font-size: 10px;">Ketikan Nomor Registrasi tanpa titik (.) cukup nomor saja.</small>
                    <input type="text"  name="no_registrasi" id="no_registrasi" class="form-control" placeholder="Nomor Registrasi Bumdes">
                </div>
                <div class="form-group">
                    <label for="nama_bumdes" class="form-label">Nama Bumdes</label>
                    <input type="text" name="nama_bumdes" id="nama_bumdes" class="form-control" placeholder="Nama Bumdes">
                </div>
                <div class="form-group">
                    <label for="logo" class="form-label">Logo Bumdes</label>
                    <input class="form-control" name="logo" type="file" id="logo" placeholder="Logo Bumdes">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <label for="kontak">No Telp (Harus yang ada WA nya)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">+62</span>
                    </div>
                    <input type="text" class="form-control" name ="kontak" id="kontak" placeholder="No Telp (Harus yang ada WA nya)" aria-describedby="basic-addon3">
                </div>
                <div class="form-group">
                    <label for="kode_provinsi" class="form-label">Provinsi</label>
                    <select class="form-control" name="kode_provinsi" id="kode_provinsi" >
                        <option selected disabled value="" class="form-control">:: Pilih Provinsi ::</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_kab" class="form-label">Kabupaten</label>
                    <select class="form-control" name="kode_kab" id="kode_kab" >
                        <option selected disabled   value="" class="form-control">:: Pilih Kabupaten ::</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-control" name="kode_kecamatan" id="kode_kecamatan" >
                        <option selected disabled value="" class="form-control">:: Pilih Kecamatan ::</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" name="desa" id="desa" class="form-control" placeholder="Desa">
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                </div>
            </div>

            <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="form-group">
                    <label for="geolocation" class="form-label">Link Embed Google Maps</label>
                    <br>
                    <span style="font-size: 10px;">TOLONG BACA TERLEBIH DAHULU TUTORIAL CARA MENGINPUT LINK EMBED GOOGLE MAPS.</span>
                    <span><a href="" class="">Tutorila</a></span>
                    <textarea type="text" name="geolocation" id="geolocation" class="form-control" placeholder="" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="link_fb" class="form-label">Link Facebook (Opsional)</label>
                    <input type="text" name="link_fb" id="link_fb" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="link_ig" class="form-label">Link Instagram (Opsional)</label>
                    <input type="text" name="link_ig" id="link_ig" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="link_web" class="form-label">Link Website (Opsional)</label>
                    <input type="text" name="link_web" id="link_web" class="form-control" placeholder="Alamat">
                </div>
                <label for="source-url">Url Profile</label>
                <br>
                <small style="font-size: 10px;">*Mohon tidak menggunakan spasi, url langsung digabung saja (contoh : purimataram)</small>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="source">https://profil.bumdes.id/</span>
                    </div>
                    <input type="text" name="source" id="source" class="form-control" id="basic-url" placeholder="" aria-describedby="source">
                </div>
                <div class="form-group">
                    <label for="ket" class="form-label">Keterangan / Deskripsi pada halaman profile</label>
                    <textarea type="text" name="ket" id="ket" class="form-control" placeholder="" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                </div>
                <div class="form-group">
                    <div class="text-center">Sudah Punya Akun <a href="<?= base_url('/login'); ?>">Masuk</a></div>
                </div>
            </div>

        </div>
    </form>

    <!-- </div> -->
</div>
<?= $this->endSection() ?>