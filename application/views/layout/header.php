
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PCSS Sport Shop</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?= base_url('assets'); ?>/partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="<?= base_url('assets'); ?>/index.html">
            <img src="<?= base_url('assets'); ?>/images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="<?= base_url('assets'); ?>/index.html">
            <img src="<?= base_url('assets'); ?>/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav ms-auto">  
          <?php if ($user['role'] == 'User') { ?>        
          <li class="nav-item">
            <a class="nav-link count-indicator" id="countDropdown" href="<?= base_url('Profil/pembelian') ?>" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-history "></i>
              <span class="badge badge-danger badge-countx">!</span>
            </a>
          </li>
          <li class="nav-item">             
            <a class="nav-link count-indicator" id="countDropdown" href="<?= base_url('Profil/detail') ?>" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-cart "></i>
              <span class="badge badge-danger badge-count"><?= $jlh ?></span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?= base_url('assets') ?>/img/profile/<?= $user['gambar'] ?>" alt="Profile image"> </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      <!-- partial:<?= base_url('assets') ?>/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <?php if ($user['role'] == 'Admin') { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('sportstuff') ?>">
              <i class="mdi mdi-football menu-icon"></i>
              <span class="menu-title">Sportstuff</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pegawai') ?>">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Pegawai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('penjualan') ?>">
              <i class="mdi mdi-cash-multiple menu-icon"></i>
              <span class="menu-title">Penjualan</span>
            </a>
          </li>
          <?php } else { ?>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('profil') ?>">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('profil/sportstuff') ?>">
              <i class="mdi mdi-football menu-icon"></i>
              <span class="menu-title">Sportstuff</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
              <i class="mdi mdi-logout-variant menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>