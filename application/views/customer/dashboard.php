
    <!--== SlideshowBg Area Start ==-->
    <div class="container mx-auto">
            <div class="row">
                <div class="text-center">
                
                </div>
            </div>
        </div>
    <!--== SlideshowBg Area End ==-->

    <!--== Mobile App Area Start ==-->
    <br><br>
    <div></div>
    <section id="mobile-app-area">
        <div class="container">
            
                <div class="text-center">
                    <div class="mobile-app-content text-center">
                                <?php if($this->session->userdata('nama')) { ?>
                                    <h2>SEWA MOBIL HARI INI</h2>
                                    <h4>Silakan Pilih Mobil Untuk Disewa</h4>
                                    <br>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('customer/Data_mobil')?>"><i class=""></i> MOBIL</a>
                                        
                                    </div>
                                <?php } else { ?>
                                    <h2>BOOK A CAR TODAY!</h2>
                                    <p>PLEASE LOGIN FIRST TO RENT OUR CARS</p>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('Auth/login')?>"><i class=""></i> LOGIN</a>
                                        <a href="<?php echo base_url('Register')?>"><i class=""></i> REGISTER</a>
                                    </div>
                                <?php } ?>
                        
                    </div>
                </div>
            
        </div>
    </section>
    <br>
    <!--== Mobile App Area End ==-->
    