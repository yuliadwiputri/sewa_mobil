<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Tambah Data Pengguna</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_pengguna/tambah_data') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                                <?php echo form_error('nama', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                                <?php echo form_error('username', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="gender" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('gender', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                                <?php echo form_error('alamat', '<div class="text small text-danger">', '</div') ?>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control">
                                <?php echo form_error('no_telepon', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text" name="no_ktp" class="form-control">
                                <?php echo form_error('no_ktp', '<div class="text small text-danger">', '</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Role ID</label>
                                <input type="text" name="role_id" class="form-control">
                                <?php echo form_error('role_id', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <button type="submit" class="btn btn-primary" mt-4>Simpan</button>
                            <button type="reset" class="btn btn-warning" mt-4>Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>