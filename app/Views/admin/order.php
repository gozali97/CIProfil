<?= $this->extend('admin/index') ?>

<?= $this->section('content')?>
<div class="page-header">
    <h3 class="page-title text-success font-weight-bold">
        Daftar Pemesanan Produk
    </h3>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive table-responsive-sm">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No</th>
              <th> Nama </th>
              <th> Email </th>
              <th> Telp </th>
              <th> Alamat </th>
              <th> Tangggal</th>
              <th> Produk</th>
              <th> Total</th>
              <th> Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td> Herman Beck </td>
              <td> contoh@gmail.com</td>
              <td> +62334343434343</td>
              <td> yogya </td>
              <td> 28-10-2022 06:08:34 </td>
              <td> test produk 4 (2) </td>
              <td> 20,000 </td>
              <td>
                <button class="btn btn-danger">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
