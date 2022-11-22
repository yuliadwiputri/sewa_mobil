<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Tambah Data Penyewaan</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_penyewaan/tambah_penyewaan_aksi') ?>">
                    <div class="form-group">
                        <label>ID Pengguna</label>
                        <input type="text" name="id_pengguna" class="form-control">
                        <?php echo form_error('id_pengguna', '<div class="text small text-danger">', '</div') ?>
                    </div>
                    <div class="form-group">
                        <label>ID Mobil</label>
                        <input type="text" name="id_mobil" class="form-control">
                        <?php echo form_error('id_mobil', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" class="form-control">
                        <?php echo form_error('tanggal_sewa', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                        <?php echo form_error('tanggal_kembali', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                        <?php echo form_error('harga', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Denda</label>
                        <input type="text" name="denda" class="form-control">
                        <?php echo form_error('denda', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control">
                        <?php echo form_error('tanggal_pengembalian', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Pengembalian</label>
                        <input type="text" name="status_pengembalian" class="form-control">
                        <?php echo form_error('status_pengembalian', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Sewa</label>
                        <input type="text" name="status_sewa" class="form-control">
                        <?php echo form_error('status_sewa', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <button type="submit" class="btn btn-primary" mt-4>Simpan</button>
                    <button type="reset" class="btn btn-warning" mt-4>Reset</button>
            </div>

            </form>
        </div>
</div>
</section>
</div>