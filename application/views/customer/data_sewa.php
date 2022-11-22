<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 80%">
        <div class="card-header">
            Data Penyewaan Mobil Anda
        </div>
        <!-- <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span> -->
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No Plat Mobil</th>
                    <th>Tanggal sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga Sewa /Hari</th>
                    <th>Tanggal Pengembalian</th>
                    <!-- <th>Aksi</th> -->
                </tr>
                <?php $no=1;
                foreach($sewa as $sw) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $sw->nama ?></td>
                    <td><?php echo $sw->merk ?></td>
                    <td><?php echo $sw->no_plat ?></td>
                    <td><?php echo date('d/m/Y', strtotime($sw->tanggal_sewa)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($sw->tanggal_kembali)); ?></td>
                    <td>Rp. <?php echo number_format($sw->harga,0,',','.'); ?></td>
                    <td><?php if ($sw->tanggal_pengembalian == "0000-00-00") {
                                echo "-";
                            } else {
                                echo date('d/m/Y', strtotime($sw->tanggal_pengembalian));
                            } ?></td>
                    </tr>
                <?php endforeach; ?> 
            </table>
        </div>
    </div>
</div>