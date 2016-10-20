<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Catatan Ekstrakulikuler</h3>
            </div>
            <?= form_open('catataneskul/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
                <table class="table table-borderless" style="width:40%;">
                    <tr>
                        <td width="10%">NIS</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$row['NIS'];?></td>
                        <input type="hidden" name="id" value="<?=$row['ID']?>">
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$row['NAMA'];?></td>
                    </tr>
                    <tr>
                        <td>Ekstrakulikuler</td>
                        <td>:</td>
                        <td><?=$row['ESKUL'];?></td>
                    </tr>
                </table>
               
                <div class="form-group">
                    <label>Nilai</label>
                   <select name="nilai" class="form-control input-sm">
                   <?php
                   $nilaia=$row['nilai'];
                   foreach ($nilai as $key => $value) {
                       if ($value==$nilaia) {
                           echo '<option value="'.$value.'">'.$value.'</option>';
                           break;
                       }
                   }
                   foreach ($nilai as $key => $value) {
                       if ($value!=$nilaia) {
                           echo '<option value="'.$value.'">'.$value.'</option>';
                           continue;
                       }
                   }
                         
                    ?>
                    </select>
                    <input type="hidden" name="id" value="<?=$row['ID']?>">
                    <input type="hidden" name="ideskul" value="<?=$row['IDESKUL']?>">
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
        $('#form-edit').validate({
            rules: {
                catatan: {
                    required: true,
                    maxlength: 160,
                }
            },
            messages: {
                catatan: {
                    required: "Kolom Catatan Harus Diisi",
                    maxlength: "Maksimal 160 Karakter"
                },
            }
        });
    });
</script>
