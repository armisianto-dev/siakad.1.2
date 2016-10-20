<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Setting Tahun Ajaran</h3>
            </div><!-- /.box-header -->
            <?=
            form_open('options/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data'));
            ?>
                    <div class="box-body">
                    <?php echo $notif; ?>				        
                        <input type="hidden" name="id" value="<?= $row['ID'] ?>" />
                        <input type="hidden" name="name" value="<?= $row['name'] ?>" />
                        
                        <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <select name="value" class="form-control input-sm">
                                <?php foreach ($list as $value) {
                                    if ($value['ID']!=$row['value']) {
                                        continue;
                                    }
                                    echo '<option value="'.$value['ID'].'">'.$value['THN'].'</option>';
                                } ?>
                                <?php foreach ($list as $value) {
                                    if ($value['ID']==$row['value']) {
                                        continue;
                                    }
                                    echo '<option value="'.$value['ID'].'">'.$value['THN'].'</option>';
                                } ?>
                            </select>

                        </div>
                        		                   
                    <div class="box-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Update</button>
                    </div>
                    
            <?php
            echo form_close();
            ?>
        </div><!-- /.box -->                            
    </div>
</div>
