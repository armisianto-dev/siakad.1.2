<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Setting Semester</h3>
            </div><!-- /.box-header -->
            <?=
            form_open('options/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data'));
            ?>
                    <div class="box-body">
                    <?php echo $notif; ?>                       
                        <input type="hidden" name="id" value="<?= $row['ID'] ?>" />
                        <input type="hidden" name="name" value="<?= $row['name'] ?>" />
                        
                        <div class="form-group">
                            <label>Semester</label><br/>
                                <?php 
                                    if ($row['value']=="1") {
                                        echo '&nbsp;&nbsp;<input type="radio" name="value" value="1" checked="">1 (Ganjil) <br/>';
                                        echo '&nbsp;&nbsp;<input type="radio" name="value" value="2">2 (Genap)';
                                    }else{
                                        echo '&nbsp;&nbsp;<input type="radio" name="value" value="1">1 (Ganjil)<br/>';
                                        echo '&nbsp;&nbsp;<input type="radio" name="value" value="2" checked="">2 (Genap)'; 
                                    }
                                ?>

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
