<div class="row">
    <div class="col-xs-12">

        <?php echo $notif; ?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Email Kontak</h3>
            </div>
            <?= form_open('setting/update_email', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            
            <div class="box-body"> 
                <input type="hidden" name="tag" value="<?= $list->TAG; ?>" />                     
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control input-sm" name="value" type="text" value="<?= $list->VAL; ?>" placeholder="Email">    
                </div>
            </div>                        
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
        </div>                      
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                value: {
                    required: true,
                    email: true
                }
            },
            messages: {
                value: {
                    required: "Kolom Email Harus Diisi",
                    email: "Format email tidak valid"
                }
            }
        });
    });
</script>