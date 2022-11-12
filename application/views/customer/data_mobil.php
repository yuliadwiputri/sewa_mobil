
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Data Mobil</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <!-- //mobil dri controller -->
                            <?php foreach ($mobil as $mbl) : ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                <img src="<?php echo base_url('assets/upload/'.$mbl->gambar)?>" style = "width: 550px; height: 300px" alt="">
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?php echo $mbl->merk ?></a></h2>
                                       <h5>100 rb perhari</h5>
                                       <p>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
                                        <ul class="car-info-list">
                                           <li>AC</li>
                                           <li>Diesel</li>
                                           <li>Auto</li>
                                    </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
            
                                        <a href="" class="rent-btn">Sewa</a>
                                        <a href="<?php echo base_url('Customer/Data_mobil/detail_mobil/'.$mbl->id_mobil)?>" class="rent-btn">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- Single Car End -->
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

    