<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Pindah Kelas</h3>
            </div>
            <?= form_open('bagikelas/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
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
                        <td><?=$row['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas Saat Ini</td>
                        <td>:</td>
                        <td><?=$row['kelas'];?></td>
                    </tr>
                </table>
               
                <div class="form-group">
                    <label>Kelas Baru</label>
                    <select name="kelas"  class="form-control input-sm">
                    <?php 
                        foreach ($kelas as $value) {
                            if ($value['ID']!=$row['IDKLS']) {
                                continue;
                            }
                             echo '<option value="'.$value['ID'].'">'.$value['kelas'].'</option>';
                        }
                    ?>
                    <?php 
                        foreach ($kelas as $value) {
                            if ($value['ID']==$row['IDKLS']) {
                                continue;
                            }
                             echo '<option value="'.$value['ID'].'">'.$value['kelas'].'</option>';
                        }
                    ?>
                    </select>
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