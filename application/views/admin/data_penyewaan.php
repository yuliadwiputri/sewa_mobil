<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Penyewaan Mobil</h1>
        </div>
        <!-- <a href="<?php echo base_url('admin/data_penyewaan/tambah_penyewaan') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?> -->


        <div class="table-responsive">
            <table class="table table-hover table-striped table-borderd">

                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>Tanggal sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga Sewa </th>
                    <th>Harga Denda </th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Pengembalian</th>
                    <th>Status sewa</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;
                foreach ($sewa as $sw) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>

                        <td><?php echo $sw->nama ?></td>

                        <td><?php echo $sw->merk ?></td>

                        <td><?php echo date('d/m/Y', strtotime($sw->tanggal_sewa)); ?></td>

                        <td><?php echo date('d/m/Y', strtotime($sw->tanggal_kembali)); ?></td>

                        <td>Rp. <?php echo number_format($sw->harga, 0, ',', '.'); ?> /Hari</td>

                        <td>Rp. <?php echo number_format($sw->denda, 0, ',', '.'); ?> /Hari</td>

                        <td><?php if ($sw->tanggal_pengembalian == "0000-00-00") {
                                echo "-";
                            } else {
                                echo date('d/m/Y', strtotime($sw->tanggal_pengembalian));
                            } ?></td>
                        
                        <td><?php echo $sw->status_pengembalian ?></td>
                        <td><?php echo $sw->status_sewa ?></td>

                        <td>
                            <a href="<?php echo base_url('admin/data_penyewaan/delete_penyewaan/') . $sw->id_sewa ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_penyewaan/update_penyewaan/') . $sw->id_sewa ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>

                        
                   
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>