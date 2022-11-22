<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Edit Data Sewa Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_penyewaan/update_penyewaan_aksi') ?>">
                    <?php foreach ($sewa as $sw) : ?>
                        <div class="form-group">
                            <label>ID Pengguna</label>
                            <input type="hidden" name="id_sewa" value="<?php echo $sw->id_sewa ?>">
                            <input type="text" name="id_pengguna" class="form-control" value="<?php echo $sw->id_pengguna ?>">
                            <?php echo form_error('id_pengguna', '<div class="text small text-danger">', '</div') ?>
                        </div>
                        
                        <div class="form-group">
                        <label>ID Mobil</label>
                        <input type="text" name="id_mobil" class="form-control" value="<?php echo $sw->id_mobil ?>">
                        <?php echo form_error('id_mobil', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" class="form-control" value="<?php echo $sw->tanggal_sewa ?>">
                        <?php echo form_error('tanggal_sewa', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control" value="<?php echo $sw->tanggal_kembali ?>">
                        <?php echo form_error('tanggal_kembali', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $sw->harga ?>">
                        <?php echo form_error('harga', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Denda</label>
                        <input type="text" name="denda" class="form-control" value="<?php echo $sw->denda ?>">
                        <?php echo form_error('denda', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $sw->tanggal_pengembalian ?>">
                        <?php echo form_error('tanggal_pengembalian', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Pengembalian</label>
                        <input type="text" name="status_pengembalian" class="form-control" value="<?php echo $sw->status_pengembalian ?>">
                        <?php echo form_error('status_pengembalian', '<div class="text small text-danger">', '</div') ?>
                    </div>

                    <div class="form-group">
                        <label>Status Sewa</label>
                        <input type="text" name="status_sewa" class="form-control" value="<?php echo $sw->status_sewa ?>">
                        <?php echo form_error('status_sewa', '<div class="text small text-danger">', '</div') ?>
                    </div>


                        <button type="submit" class="btn btn-primary" mt-4>Simpan</button>
                        <button type="reset" class="btn btn-warning" mt-4>Reset</button>
            </div>

            </form>
        <?php endforeach; ?>
        </div>
</div>
</section>
</div>