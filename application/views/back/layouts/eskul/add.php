<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Ekstrakulikuler</h3>
            </div>
            <?= form_open('eskul/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">				        
               
                <div class="form-group">
                    <label>Ekstrakulikuler</label>
                    <input class="form-control input-sm" name="eskul" type="text" placeholder="Nama Ekstrakulikuler">
                </div>
                <div class="form-group">
                    <label>Guru/Pengajar</label>
                    <select name="guru" class="form-control input-sm">
                    <?php 
                        foreach ($list as $value) {
                            echo '<option value="'.$value['nip'].'">'.$value['nama'].'</option>';
                        }
                    ?>
                        
                    </select>
                </div>
                <input type="hidden" name="aktif" value="Y">                  
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
                eskul: {
                    required: true
                }
            },
            messages: {
                eskul: {
                    required: "Kolom Ekstrakulikuler Harus Diisi"
                },
            }
        });
    });
</script>