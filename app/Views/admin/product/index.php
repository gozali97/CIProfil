<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>
<div class="page-header">
  <h3 class="page-title text-success font-weight-bold">
    Produk
  </h3>
  <nav aria-label="breadcrumb">
    <a href="<?= base_url('/admin/product/create') ?>" class="font-weight-bold btn btn-success"> Tambah Produk</a>
  </nav>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <!-- {{-- <h4 class="card-title">Striped Table</h4>
        <p class="card-description"> Add class <code>.table-striped</code>
        </p> --}} -->
      <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
          <thead>
            <tr>
              <th> No</th>
              <th> Kode </th>
              <th> Nama Produk </th>
              <th> Foto</th>
              <th> Deskripsi </th>
              <th> Harga</th>
              <th> Status</th>
              <th> Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tampilProduk as $p) :
            ?>
              <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->kode ?></td>
                <td><?= $p->nama ?></td>
                <td class="">
                  <img src="<?= $p->foto ?>" alt="image" />
                </td>
                <td><?= $p->deskripsi ?></td>
                <td><?= $p->harga ?></td>
                <td><?= $p->status ?></td>
                <td>
                  <a href="<?= base_url('/admin/product/edit/' . $p->id) ?>" class="btn btn-warning">Edit</a>
                  <button onclick="hapus('<?= $p->id ?>')" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  function hapus(id) {
    pesan = confirm('Yakin hapus produk');
    if (pesan) {
      window.location.href = ("<?= site_url('admin/product/hapus/') ?>") + id;
    } else return false;
  }
</script>
<?= $this->endSection() ?>