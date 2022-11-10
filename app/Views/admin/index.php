<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url('admin/assets/css/style.css') ?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url('admin/assets/images/favicon.ico') ?>" />
  <link rel="stylesheet" href="<?= base_url('admin/assets/css/dropify.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/assets/datatables/css/dataTables.bootstrap4.min.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/assets/datatables/css/responsive.bootstrap4.min.css') ?>" />
  <?= $this->renderSection('css') ?>
</head>

<body>
  <!-- partial:partials/_navbar.html -->
  <?= $this->include('admin/partials/navbar') ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= $this->include('admin/partials/sidebar') ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <?= $this->renderSection('content') ?>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <?= $this->include('admin/partials/footer') ?>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('admin/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/dropify.min.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('admin/assets/vendors/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <script src="<?= base_url('admin/assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/responsive.bootstrap4.min.js') ?>"></script>
  <!-- buttons for Export datatable -->
  <script src="<?= base_url('admin/assets/datatables/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/buttons.print.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/buttons.html5.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/buttons.flash.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/datatables/js/vfs_fonts.js') ?>"></script>
  <!-- Datatable Setting js -->
  <script src="<?= base_url('admin/assets/js/datatable-setting.js') ?>"></script>
  <!-- inject:js -->
  <script src="<?= base_url('admin/assets/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/misc.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="<?= base_url('admin/assets/js/dashboard.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/todolist.js') ?>"></script>
  <!-- End custom js for this page -->
  <?= $this->renderSection('js') ?>
</body>

</html>