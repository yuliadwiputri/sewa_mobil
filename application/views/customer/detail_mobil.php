<div class="container">
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row content-center">

                    <div class="col-md-7">
                        <div width="200px" class="col-md-5">
                            <img src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                        </div>
                        <table class="table">
                            <tr>
                                <th>Type Mobil</th>
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
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>No Plat</th>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "tidak tersedia";
                                    } else {
                                        echo "tersedia";
                                    } ?>
                                </td>
                            <tr>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                                    } else {
                                        echo anchor('customer/sewa/tambah_rental' . $dt->id_mobil, '<button class="btn btn-success">Sewa</button>');
                                    } ?>
                                </td>
                            <tr>
                            </tr>

                        </table>
                        <a class="btn btn-sm btn-danger ms-1" href="<?php echo base_url('customer/dashboard') ?>">Kembali</a>
                    </div>
                </div>
            </div>

        </div>

    <?php endforeach; ?>

</div>