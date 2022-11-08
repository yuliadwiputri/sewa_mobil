<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Tambah Data Type</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_type/tambah_type_aksi') ?>">
                
                    
                        <div class="form-group">
                            <label >Kode Tipe Mobil</label>
                            <input type="text" name="kode_type" class="form-control">
                            <?php echo form_error('kode_type','<div class="text small text-danger">','</div')?>
                        </div>
                        <div class="form-group">
                            <label >Nama Tipe Mobil</label>
                            <input type="text" name="nama_type" class="form-control">
                            <?php echo form_error('nama_type','<div class="text small text-danger">','</div')?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" mt-4>Simpan</button>
                        <button type="reset" class="btn btn-warning" mt-4>Reset</button>
                    </div>
                
                </form>
            </div>
        </div>
    </section>
</div>