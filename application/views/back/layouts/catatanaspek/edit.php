<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Catatan Aspek</h3>
            </div>
            <?= form_open('catatanaspek/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
                <table class="table table-borderless" style="width:40%;">
                    <tr>
                        <td>Nama Guru</td>
                        <td>:</td>
                        <td><?=$row['GURU'];?></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>:</td>
                        <td><?=$row['mapel'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$row['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$row['THN'];?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$row['semester'];?></td>
                    </tr>
                    <tr>
                        <td>Aspek</td>
                        <td>:</td>
                        <td><?=ucfirst($row['aspek']);?></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?=$row['NIS'];?></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><?=$row['SISWA'];?></td>
                    </tr>
                    
                </table>
               
                <div class="form-group">
                    <label>Catatan</label>
                    <textarea name="catatan" class="form-control input-sm" rows="3" style="width:500px;"><?=$row['catatan']?></textarea>
                    <input type="hidden" name="id" value="<?=$row['ID']?>">
                    <input type="hidden" name="mengajar" value="<?=$row['MENGAJAR']?>">
                    <input type="hidden" name="aspek" value="<?=$row['ASPEK']?>">
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
        $('#form-edit').validate({
            rules: {
                catatan: {
                    required: true,
                    maxlength: 160,
                }
            },
            messages: {
                catatan: {
                    required: "Kolom Catatan Harus Diisi",
                    maxlength: "Maksimal 160 Karakter"
                },
            }
        });
    });
</script>
