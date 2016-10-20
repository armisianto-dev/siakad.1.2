<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Pelanggaran Siswa</h3>
            </div>
            <?= form_open('pelanggaransiswa/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
               <table class="table table-borderless" style="width:40%;">
                    <tr>
                        <td width="10%">NIS</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$siswa['nis'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$siswa['nama'];?></td>
                    </tr>
                   
                </table>
                
                <div class="form-group">
                    <label>Jenis Pelanggaran</label>
                    <select name="pelanggaran"  class="form-control input-sm" style="max-width: 500px;">
                        <?php 
                            foreach ($list as $value) {
                                echo '<option value="'.$value['ID'].'">'.$value['NAMA'].' | Point : '.$value['point'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <div class="input-group" style="max-width: 500px;">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" placeholder="Tanggal Pelanggaran" style="max-width: 500px;">
                    </div>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control input-sm" style="max-width: 500px;" name="ket" rows="4"></textarea>
                </div>
                <input type="hidden" name="nis" value="<?=$siswa['nis']?>">                  
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); ?>
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
            },
            messages: {
                tgl: {
                    required: "Kolom Tanggal Lahir harus diisi",
                    date: "Format isian salah"
                },
            }
        });
    });
</script>