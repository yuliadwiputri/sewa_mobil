<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Detail Data Mobil</h1>
        </div>

    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-7">
                        <div width="200px" class="col-md-5">
                            <img src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                        </div>
                        <table class="table">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php
                                    if ($dt->kode_type == "SDN") {
                                        echo "Sedan";
                                    } elseif ($dt->kode_type = "HTB") {
                                        echo "Hatchback";
                                    } elseif ($dt->kode_type = "MPV") {
                                        echo "Multi Purpose Vehicle";
                                    } else {
                                        echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <td>No Plat</td>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-danger " href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>
                    </div>
                </div>
            </div>

        </div>

    <?php endforeach; ?>

</div>