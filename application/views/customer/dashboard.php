<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">CARENT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register') ?>">Register</a></li>

                    <li class="nav-item row ml-2">
                        <?php if ($this->session->userdata('nama')) { ?>
                            <a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><span class="btn btn-sm btn-warning">Logout</span></a>

                            <a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><span class="btn btn-sm btn-primary">Ganti Password</span></a>
                        <?php } else { ?>
                            <a class="nav-link" href="<?php echo base_url('auth/login') ?>"><span class="">Login</span></a>

                        <?php } ?>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <!-- <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button> -->
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">SEWA MOBIL</h1>
                <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php foreach ($mobil as $mb) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" style="width:220px; height:150px" alt="..." />
                            <!-- Product details-->
                            <div class="card-body">
                                <h4 class="card-title"><a href="#"><?php echo $mb->merk ?></a>
                                </h4>
                                <h5>No. Plat=<?php echo $mb->no_plat ?></h5>

                            </div>
                            <div class="card-footer">
                                <?php
                                if ($mb->status == "0") {
                                    echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                                } else {
                                    echo anchor('customer/sewa/tambah_rental' . $mb->id_mobil, '<button class="btn btn-success">Sewa</button>');
                                } ?>

                                <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_mobil/') . $mb->id_mobil ?>">Detail</a>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </section>