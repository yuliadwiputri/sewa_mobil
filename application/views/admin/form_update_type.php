<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Edit Data Type</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_type/update_type_aksi') ?>">
                    <?php foreach ($type as $tp) : ?>
                        <div class="form-group">
                            <label>Kode Tipe Mobil</label>
                            <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                            <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                            <?php echo form_error('kode_type', '<div class="text small text-danger">', '</div') ?>
                        </div>
                        <div class="form-group">
                            <label>Nama Tipe Mobil</label>
                            <input type="text" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                            <?php echo form_error('nama_type', '<div class="text small text-danger">', '</div') ?>
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