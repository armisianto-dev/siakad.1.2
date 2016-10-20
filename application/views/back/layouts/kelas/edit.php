<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Kelas</h3>
            </div>
            <?= form_open('kelas/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
               
                <div class="form-group">
                    <label>Kelas</label>
                    <input class="form-control input-sm" name="kelas" type="text" value="<?= $row['kelas']?>" placeholder="Nama Agama">
                </div>
                <div class="form-group">
                    <label>Jenjang</label>
                    <select name="jenjang"  class="form-control input-sm">
                    <?php 
                        foreach ($jenjang as $value) {
                            if ($value!=$row['jenjang']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    <?php 
                        foreach ($jenjang as $value) {
                            if ($value==$row['jenjang']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?= $row['ID']?>">                  
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
                kelas: {
                    required: true
                }
            },
            messages: {
                kelas: {
                    required: "Kolom Kelas Harus Diisi"
                },
            }
        });
    });
</script>