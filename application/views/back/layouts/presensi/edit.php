<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Presensi</h3>
            </div>
            <?= form_open('presensi/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
                <table class="table table-borderless" style="width:40%;">
                    <tr>
                        <td width="10%">NIS</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$row['NIS'];?></td>
                        <input type="hidden" name="id" value="<?=$row['ID']?>">
                        <input type="hidden" name="nis" value="<?=$row['NIS']?>">
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$row['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Presensi</td>
                        <td>:</td>
                        <td><?=tgl($row['TGL']);?></td>
                    </tr>
                </table>
               
                <div class="form-group">
                    <label>Status</label><br/>
                    <?php 
                        foreach ($status as $key=>$value) {
                            if ($key!=$row['status']) {
                                continue;
                            }
                             echo '<input type="radio" name="status" value="'.$key.'" checked=""> '.$value.'<br/>';
                        }
                    ?>
                     <?php 
                        foreach ($status as $key=>$value) {
                            if ($key==$row['status']) {
                                continue;
                            }
                             echo '<input type="radio" name="status" value="'.$key.'"> '.$value.'<br/>';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="ket" class="form-control input-sm" rows="3" style="width:500px;"><?=$row['ket']?></textarea>
                    
                </div>              
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>                      
    </div>
</div>
