<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Type</h1>
        </div>
        <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover table-striped table-border">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($type as $tp) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tp->kode_type ?></td>
                        <td><?php echo $tp->nama_type ?></td>

                        <td>
                            <!-- <a onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_type/delete_type/' . $tp->id_type) ?>"><i class="fas fa-trash"></i></a> -->
                            <a href="<?php echo base_url('admin/data_type/delete_type/') . $tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_type/update_type/') . $tp->id_type ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>