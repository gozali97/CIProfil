<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?= session('logo') ?>" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?= session('nama_bumdes') ?></span>
          <span class="text-secondary text-small"><?= session('no_registrasi') ?></span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <span><i class="mdi mdi-home menu-icon"></i></span>
        <span class="ps-3 menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('dashboard') ?>">
        <span><i class="mdi mdi mdi-account menu-icon"></i></span>
        <span class="ps-3 menu-title">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('dashboard/product') ?>">
        <span><i class="mdi mdi-gift menu-icon"></i></span>
        <span class="ps-3 menu-title">Produk BUMDES</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="ps-3 menu-title">Daftar Pemesanan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span><i class="mdi mdi-logout menu-icon"></i></span>
        <span class="ps-3 menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>