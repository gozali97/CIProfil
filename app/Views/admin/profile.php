<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h3 class="page-title text-success font-weight-bold">
            Profile BUMDES
        </h3>
        <nav aria-label="breadcrumb">
            <span class="font-weight-bold"> * Kolom yang tidak ingin diganti mohon jangan diklik</span>
            <!-- {{-- <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul> --}} -->
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="col-12 ">
                <div class="col-12 grid-margin ">
                    <div class="card">
                        <div class="card-body fw-bolder">
                            <!-- {{-- <img src="{{ asset('admin/assets/images/dashboard/img_2.jpg') }}"
                                class=" mw-100 w-100 rounded" alt="image"> --}} -->
                            <form class="forms-sample" method="POST">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img" class="dropify"
                                        data-default-file="<?= session('logo') ?>"> 
                                    <p class="text-center" style="font-size: 10px;">*klik gambar logo untuk mengupload logo
                                        baru anda.</p>
                                </div>
                                <button class="btn btn-block btn-gradient-primary float-end">Upload Logo</button>
                            </form>
                        </div>
                        <!-- {{-- <div class="card-body">
                            <button class="btn btn-block btn-gradient-primary float-end">Upload Logo</button>
                        </div> --}} -->
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body bg-gradient-success">
                            <h1 class="text-center text-uppercase "><?= session('kode') ?></h1>
                            <p class="text-center text-capitalize text-secondary">Kode Bumdes Anda</p>
                            <!-- {{-- <div class="clearfix">
                                <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                                <div id="visit-sale-chart-legend"
                                    class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                            </div>
                            <canvas id="visit-sale-chart" class="mt-4"></canvas> --}} -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <!-- {{-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> --}} -->
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="no_registrasi">Nomor Registrasi Bumdes</label>
                            <input type="text" name="no_registrasi" class="form-control form-control-sm border"
                                id="no_registrasi" placeholder="No Registrasi" value="<?= session('no_registrasi') ?>">
                            <small>Ketikan Nomor Registrasi tanpa titik (.) cukup nomor saja.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_bumdes">Nama Bumdes</label>
                            <input type="text" name="nama_bumdes" class="form-control form-control-sm" id="exampleInputName1"
                                placeholder="Nama Bumdes" value="<?= session('nama_bumdes') ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" value="<?= session('email') ?>"
                                id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="kontak">No Telp(Harus yang ada WA nya)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</span>
                                </div>
                                <input type="text" name="kontak" class="form-control form-control-sm"
                                    id="kontak" placeholder="No Telp" value="<?= session('kontak') ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_provinsi">Provinsi</label>
                            <select name="" class="form-control form-control-sm" id="kode_provinsi">
                                <option value="<?= session('kode_provinsi') ?>"></option>
                                <!-- <option>Male</option>
                                <option>Female</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_kab">Kabubaten</label>
                            <select name="kode_kab" class="form-control form-control-sm" id="kode_kab">
                                <option value="<?= session('kode_kab') ?>"></option>
                                <!-- <option>Male</option>
                                <option>Female</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_kecamatan">Kecamatan</label>
                            <select name="kode_kecamatan" class="form-control form-control-sm" id="kode_kecamatan">
                                <option><?= session('kode_kecamatan') ?></option>
                                <!-- <option>Male</option>
                                <option>Female</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <input type="text" name="desa" class="form-control form-control-sm"
                                id="desa" placeholder="desa" value="<?= session('desa') ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control form-control-sm" id="alamat" rows="4"><?= session('alamat') ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="geolocation">Link Embed Google Maps</label>
                            <textarea name="geolocation" class="form-control form-control-sm" id="geolocation" rows="4"><?= session('geolocation') ?></textarea>
                            <span class="text-uppercase"> tolong baca terlebih dahulu tutorial cara menginput link embed
                                google maps.</span>
                            <button class="btn btn-primary">Tutorial</button>
                        </div>
                        <div class="form-group">
                            <label for="link_fb">Link Facebook(Opsional)</label>
                            <input type="text" name="link_fb" class="form-control form-control-sm"
                                id="link_fb" placeholder="Facebook" value="<?= session('link_fb') ?>">
                        </div>
                        <div class="form-group">
                            <label for="link_ig">Link Instagram(Opsional)</label>
                            <input type="text" name="link_ig" class="form-control form-control-sm"
                                id="link_ig" placeholder="Instagram" value="<?= session('link_ig') ?>">
                        </div>
                        <div class="form-group">
                            <label for="link_website">Link Website(Opsional)</label>
                            <input type="text" name="link_website" class="form-control form-control-sm"
                                id="link_website" placeholder="Website" value="<?= session('link_website') ?>">
                        </div>
                        <div class="form-group">
                            <label for="source">Url Profile</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">https://profil.bumdes.id/</span>
                                </div>
                                <input type="text" name="source" class="form-control form-control-sm"
                                    id="source" placeholder="No Telp" value="<?= session('source') ?>">
                            </div>
                            <br>
                            <p>*Mohon tidak menggunakan spasi, url langsung digabung saja(contoh:purimataram)</p>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan / Deskripsi pada halaman profil</label>
                            <textarea name="ket" class="form-control form-control-sm" id="ket" rows="4"><?= session('ket') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Update Profil</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
<?= $this->endSection() ?>
