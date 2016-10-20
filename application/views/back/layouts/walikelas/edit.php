<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Wali Kelas</h3>
            </div>
            <?= form_open('walikelas/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body"> 
               <input name="id" type="hidden" value="<?= $row['ID']?>">
                <div class="form-group">
                    <label>Guru</label>
                    <select name="guru" class="form-control input-sm">
                        <?php foreach ($guru as $value) {
                            if ($value['NIP']!=$row['NIP']) {
                                continue;
                            }
                            echo '<option value="'.$value['NIP'].'">'.$value['nama'].'</option>';
                        } ?>
                        <?php foreach ($guru as $value) {
                            if ($value['NIP']==$row['NIP']) {
                                continue;
                            }
                            echo '<option value="'.$value['NIP'].'">'.$value['nama'].'</option>';
                        } ?>
                    </select>
                </div> 
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control input-sm">
                        <?php foreach ($kelas as $value) {
                            if ($value['ID']!=$row['KELAS']) {
                                continue;
                            }
                            echo '<option value="'.$value['ID'].'">'.$value['kelas'].'</option>';
                        } ?>
                        <?php foreach ($kelas as $value) {
                            if ($value['ID']==$row['KELAS']) {
                                continue;
                            }
                            echo '<option value="'.$value['ID'].'">'.$value['kelas'].'</option>';
                        } ?>
                    </select>
                </div>         
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>                      
    </div>
</div>
