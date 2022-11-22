<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data pengguna</h1>
        </div>
        <a href="<?php echo base_url('admin/data_pengguna/tambah_pengguna') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover table-striped table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telepon</th>
                    <th>No. KTP</th>
                    <th>Password</th>
                    <th>Role ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($pengguna as $pl) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>

                        <td><?php echo $pl->nama ?></td>

                        <td><?php echo $pl->username ?></td>
                        <td><?php echo $pl->alamat ?></td>
                        <td><?php echo $pl->gender ?></td>
                        <td><?php echo $pl->no_telepon ?></td>
                        <td><?php echo $pl->no_ktp ?></td>
                        <td><?php echo $pl->password ?></td>
                        <td><?php echo $pl->role_id ?></td>

                        <td>
                            <div class="row">
                                <a href="<?php echo base_url('admin/data_pengguna/delete_pengguna/') . $pl->id_pengguna ?>" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                                <a href="<?php echo base_url('admin/data_pengguna/update_pengguna/') . $pl->id_pengguna ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>