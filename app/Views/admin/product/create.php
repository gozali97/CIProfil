<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h3 class="page-title text-success font-weight-bold">
        Tambah Produk
    </h3>
    <nav aria-label="breadcrumb">
        <button class="font-weight-bold btn btn-success">Back</button>
    </nav>
</div>
<div class="row">

    <div class="col-md-12 justify-content-center align-items-center">

        <div class="card">
            <div class="container">

                <div class="card-body">
                    <form class="forms-sample" method="POST" action="<?= base_url('admin/product/store') ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="text" name="kode" hidden class="form-control form-control-sm" value="<?= session('kode') ?>">
                        <input type="text" name="id_profile" hidden class="form-control form-control-sm " value="<?= session('id') ?>">
                        <div class="form-group">
                            <label>Banner / Foto Produk</label>
                            <input type="file" value="<?= old('foto'); ?>" name="foto" class="dropify <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <p class="text-center" style="font-size: 10px;">*klik untuk mengupload banner / foto produk anda.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Produk</label>
                            <input type="text" name="nama" class="form-control form-control-sm <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" id="exampleInputName1" placeholder="Name">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" value="<?= old('deskripsi'); ?>" class="form-control form-control-sm <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" id="exampleTextarea1" rows="4"></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="number" name="harga" value="<?= old('harga'); ?>" class="form-control form-control-sm <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" value="<?= old('foto'); ?>" placeholder="Harga">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select name="status" class="form-control form-control-sm" id="exampleSelectGender">
                                <option value="ada">Ada</option>
                                <option value="habis">Habis</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Simpan</button>
                        <a href="<?= base_url('dashboard/product') ?>" class="btn btn-light">Cancel</a>
                    </form>
                </div>
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