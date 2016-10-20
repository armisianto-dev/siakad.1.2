<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Keterangan Siswa Keluar</h3>
            </div>
            <?php 
            if ($keluar==0) {

            ?>
            <?= form_open('siswa/saveKeluar', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body row">                      
               
                <div class="form-group col-md-6">
                    <label>NIS : <?= $row['NIS']?></label><br/>
                    <label>Nama : <?= $row['nama']?></label>
                    <input name="nis" type="hidden" value="<?= $row['NIS']?>">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Tanggal Keluar</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" placeholder="Tanggal Keluar">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Status Keluar</label>
                    &nbsp;&nbsp;<input type="radio" name="status" value="do" checked="">Dikeluarkan&nbsp;&nbsp;
                    &nbsp;&nbsp;<input type="radio" name="status" value="keluar">Mengundurkan Diri&nbsp;&nbsp;
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Alasan Keluar</label>
                    <textarea class="form-control input-sm" name="ketkeluar" rows="6"> </textarea> 
                </div>   
                <div class="clearfix"></div>            
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); 
                } else {
            ?>
            <?= form_open('siswa/saveKeluar', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body row">                      
               
                <div class="form-group col-md-6">
                    <label>NIS : <?= $row['NIS']?></label><br/>
                    <label>Nama : <?= $row['nama']?></label>
                    <input name="nis" type="hidden" value="<?= $row['NIS']?>">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Tanggal Keluar</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" value="<?= $rowb['tgl_keluar']?>" placeholder="Tanggal Keluar">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Status Keluar</label>
                    <?php 
                        if ($rowb['stts_keluar']=="do") {
                            echo '&nbsp;&nbsp;<input type="radio" name="status" value="do" checked="">Dikeluarkan';
                            echo '&nbsp;&nbsp;<input type="radio" name="status" value="keluar">Mengundurkan Diri';
                        }else{
                            echo '&nbsp;&nbsp;<input type="radio" name="status" value="do">Dikeluarkan';
                            echo '&nbsp;&nbsp;<input type="radio" name="status" value="keluar" checked="">Mengundurkan Diri'; 
                        }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Alasan Keluar</label>
                    <textarea class="form-control input-sm" name="ketkeluar" rows="6"><?= $rowb['alasan']?></textarea> 
                </div>   
                <div class="clearfix"></div>            
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); 
                }
            ?>
        </div>                      
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
   $('.datepicker').datepicker({
    format: "yyyy/mm/dd",
    todayBtn: "linked",
    language: "id",
    orientation: "auto",
    multidate: false,
    autoclose: true,
    todayHighlight: true
});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                tgl: {
                    required: true,
                    date: true
                },
                status: {
                    required: true
                },
                ketkeluar: {
                    required: true,
                    maxlength:100
                }
            },
            messages: {
                tgl: {
                    required: "Tanggal Keluar harus diisi",
                    date: "Format isian salah"
                },
                status: {
                    required: "Status Keluar harus diisi"
                },
                ketkeluar: {
                    required: "Alasan Keluar harus diisi",
                    maxlength:"Maksimal 100 karakter"
                }
            }
        });
    });
</script>