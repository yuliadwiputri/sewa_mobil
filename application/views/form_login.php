<body><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace("HOST", location.hostname));
//]]></script>

  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">CARENT <span class="font-weight-bold"></span></h4>
            <span class="m-2"><?php echo $this->session->flashdata('pesan')?></span>
            <p class="text-muted">Silakan login jika sudah memiliki akun</p>
            <form method="POST" action="<?php echo base_url('auth/login')?>" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                <!-- <?php echo form_error('username', '<div class="text small text-danger">', '</div') ?> -->
                <div class="invalid-feedback">
                  Silakan isi username
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required >
                <!-- <?php echo form_error('password', '<div class="text small text-danger">', '</div') ?> -->
                <div class="invalid-feedback">
                  Silakan isi password
                </div>
              </div>

                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Belum Punya Akun? <a href="<?php echo base_url('register') ?>">Register</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
             
              <div class="mt-2">
                <!-- <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('assets/assets_stisla') ?>/assets/img/mobil.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <br>
                <!-- <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang</h1> -->
                <!-- <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5> -->
              </div>
              <!-- Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
