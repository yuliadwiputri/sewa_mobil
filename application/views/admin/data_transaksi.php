<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

     
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
                <th>Tanggal Kembali</th>
                <th>Status Pengembalian</th>
                <th>Status sewa</th>
                <!-- <th>Aksi</th> -->
                </tr>
            
            <?php
                $no=1;
                foreach($transaksi as $tr) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>

                    <td><?php echo $tr->nama ?></td>

                    <td><?php echo $tr->merk ?></td>

                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa)); ?></td>

                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>

                    <td>Rp. <?php echo number_format($tr->harga,0,',','.'); ?> /Hari</td>

                    <td>Rp. <?php echo number_format($tr->denda,0,',','.'); ?> /Hari</td>
<!-- 
                    <td>Rp. <?php echo number_format($tr->total_denda,0,',','.'); ?> /Hari</td> -->
                    
                    <td><?php if ($tr->tanggal_pengembalian == "0000-00-00"){
                                    echo "-";
                              }else{
                                  echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                              } ?></td>
                    <td><?php 
                    if($tr->status == "0"){
                        echo " Belum Kembali ";
                    }else{
                        echo "Kembali";
                    }
                    ?></td>
                    <td><?php 
                    if($tr->status == "0"){
                        echo " Belum Selesai ";
                    }else{
                        echo "Selesai";
                    }
                    ?></td>
                    
                    <!-- <td>
                        <?php 
                            if($tr->status == "1"){
                                echo "-";
                            }else{ ?>
                                <div class="row">
                                <a class="btn btn-sm btn-success mr-1"
                                href="<?php echo base_url('Admin/Data_transaksi/transaksi_selesai/'.$tr->id_sewa) ?>">
                                <i class='fas fa-check'></i></a>
                                <a class="btn btn-sm btn-danger"
                                href="<?php echo base_url('Admin/Data_transaksi/transaksi_batal/'.$tr->id_sewa) ?>">
                                <i class='fas fa-times'></i></a>
                                </div>
                            <?php } ?>
                    </td>  -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </section>
</div>