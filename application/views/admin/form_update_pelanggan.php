<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Update Data Pelanggan</h1>
            
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach($customer as $pl):?>
                <form method="POST" action="<?php echo base_url('admin/data_pelanggan/update_pelanggan_aksi') ?>" >
                <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id_customer" value="<?php echo $pl->id_customer?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $pl->nama ?>" >
                                <?php echo form_error('nama', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $pl->username?>">
                                <?php echo form_error('username', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="gender" class="form-control" >
                            <option value="<?php echo $pl->gender?>"><?php echo $pl->gender?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('gender', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $pl->alamat?>">
                                <?php echo form_error('alamat', '<div class="text small text-danger">', '</div') ?>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>no_telepon</label>
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $pl->no_telepon?>">
                                <?php echo form_error('no_telepon', '<div class="text small text-danger">', '</div') ?>
                            </div>
                            <div class="form-group">
                                <label>no_ktp</label>
                                <input type="text" name="no_ktp" class="form-control" value="<?php echo $pl->no_ktp?>">
                                <?php echo form_error('no_ktp', '<div class="text small text-danger">', '</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $pl->password?>">
                            </div>
                            <button type="submit" class="btn btn-primary" mt-4>Simpan</button>
                            <button type="reset" class="btn btn-warning" mt-4>Reset</button>
                        </div>
      
                    
                </div>
                </form>
                <?php endforeach;?>
            </div>
        </div>
    </section>
</div>