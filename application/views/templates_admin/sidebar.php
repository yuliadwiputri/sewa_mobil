<body>
  <script id="__bs_script__">
    //<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace("HOST", location.hostname));
    //]]>
  </script>

  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <!-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div> -->
        </form>
        <ul class="navbar-nav navbar-right">

          <li class=""><a href="#" class="nav-link  nav-link-lg nav-link-user">
              <img alt="image" src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Halo, <?php echo $this->session->userdata('nama') ?></div>
            </a>

          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">CARENT</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CR</a>
          </div>
          <ul class="sidebar-menu">

            <!-- <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-circle"></i> <span>Data Type</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_pelanggan') ?>"><i class="fas fa-user"></i> <span>Data Pelanggan</span></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>
            
            <!-- <li><a class="nav-link" href="<?php echo base_url('admin/data_transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li> -->
            <!-- <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

            <!-- <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li> -->
          </ul>
        </aside>
      </div>