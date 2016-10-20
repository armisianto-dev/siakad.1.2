<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Agama</h3>
            </div>
            <?= form_open('agama/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">				        
               
                <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control input-sm" name="agama" type="text" placeholder="Nama Agama">
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
                agama: {
                    required: true
                }
            },
            messages: {
                agama: {
                    required: "Kolom Agama Harus Diisi"
                },
            }
        });
    });
</script>