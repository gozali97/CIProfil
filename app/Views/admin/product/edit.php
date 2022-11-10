<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h3 class="page-title text-success font-weight-bold">
        Edit Produk
    </h3>
</div>
<div class="row">

    <div class="col-md-12 justify-content-center align-items-center">

        <div class="card">
            <div class="container">

                <div class="card-body">
                    <form class="forms-sample" method="POST" action="<?= base_url('admin/product/updateData/' . $id) ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="text" name="id" hidden class="form-control form-control-sm" value="<?= $id; ?>">
                        <input type="text" name="id_profile" hidden class="form-control form-control-sm" value="<?= $id_profile; ?>">
                        <input type="text" name="kode" hidden class="form-control form-control-sm " value="<?= $kode; ?>">
                        <div class="form-group">
                            <label>Banner / Foto Produk</label>
                            <input type="file" name="foto" src="<?= $foto; ?>" value="<?= $foto; ?>" class="dropify">
                            <p class="text-center" style="font-size: 10px;">*klik untuk mengupload banner / foto produk anda.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Produk</label>
                            <input type="text" name="nama" class="form-control form-control-sm" id="exampleInputName1" value="<?= $nama; ?>" placeholder="Name">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control form-control-sm" id="exampleTextarea1" rows="4"><?= $deskripsi; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="number" name="harga" class="form-control form-control-sm" value="<?= $harga; ?>" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select name="status" class="form-control form-control-sm" id="exampleSelectGender">
                                <option value="<?= $status; ?>"><?= $status; ?></option>
                                <option value="ada">Ada</option>
                                <option value="habis">Habis</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
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