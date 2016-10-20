<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Data Agama</h3>
            </div><!-- /.box-header -->
            <?=
            form_open('agama/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data'));
            if (!empty($list)) {
                foreach ($list as $row) {
                    ?>
                    <div class="box-body">				        
                        <input type="hidden" name="id" value="<?= $row['ID'] ?>" />
                        
                        <div class="form-group">
                            <label>Agama</label>
                            <input class="form-control input-sm" name="agama" type="text" value="<?= $row['agama'] ?>">
                        </div>
                        		                   
                    <div class="box-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Update</button>
                    </div>
                    <?php
                }
            } else {
                ?>
                Tidak ada data
                <?php
            }
            echo form_close();
            ?>
        </div><!-- /.box -->                            
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#form-edit').validate({
            rules: {
                agama: {
                    required: true
                }
            },
            messages: {
                agama: {
                    required: "Kolom Agama Harus Diisi"
                }
            }
        });
    });
</script>