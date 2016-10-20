<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Restore Database</h3>
            </div><!-- /.box-header -->
            <?=
            form_open('data/restore', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data'));
            ?>
                    <div class="box-body">
                    <?php echo $notif; ?>				        
                        
                        <div class="form-group">
                            <label>Upload file</label>
                            <input type="file" name="userfile" class="form-control input-sm">
                        </div>
                        		                   
                    <div class="box-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Restore</button>
                    </div>
                    
            <?php
            echo form_close();
            ?>
        </div><!-- /.box -->                            
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                userfile: {
                    required: true,
                    extension: "sql"
                }
            },
            messages: {
                userfile: {
                    required: "Pilih file sql untuk diupload",
                    extension: "File Type tidak sesuai, ekstensi file *.sql"
                }
            }
        });
    });
</script>
