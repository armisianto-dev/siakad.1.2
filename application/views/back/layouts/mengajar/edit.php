<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Mengajar</h3>
            </div>
            <?= form_open('mengajar/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
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
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <select name="mapel" class="form-control input-sm">
                        <?php foreach ($mapel as $value) {
                            if ($value['ID']!=$row['MAPEL']) {
                                continue;
                            }
                            echo '<option value="'.$value['ID'].'">'.$value['mapel'].'</option>';
                        } ?>
                        <?php foreach ($mapel as $value) {
                            if ($value['ID']==$row['MAPEL']) {
                                continue;
                            }
                            echo '<option value="'.$value['ID'].'">'.$value['mapel'].'</option>';
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Jam</label>
                    <input class="form-control input-sm" name="jml" type="text" value="<?=$row['JML'] ?>" placeholder="Jumlah jam mengajar">
                </div>              
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>                      
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                jml: {
                    required: true,
                    number: true,
                    min:1
                }
            },
            messages: {
                jml: {
                    required: "Kolom Jumlah jam Harus Diisi",
                    number: "Format isian angka",
                    min: "Minimal 1"
                },
            }
        });
    });
</script>