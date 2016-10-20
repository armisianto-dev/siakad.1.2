<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Tahun Ajaran</h3>
            </div>
            <?= form_open('thn_ajaran/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
               
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <div class="input-group col-md-2">
                        <input class="form-control input-sm" name="tahuna" type="text" value="<?= $thn_a ?>" placeholder="Tahun Pertama">
                       
                        <input class="form-control input-sm" name="tahunb" type="text" value="<?= $thn_b ?>" placeholder="Tahun Kedua">
                    </div>
                    <input type="hidden" name="id" value="<?= $row['ID'] ?>">
                    
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
                tahuna: {
                    required: true,
                    number:true,
                    maxlength:4,
                    minlength:4
                },
                tahunb: {
                    required: true,
                    number:true,
                    maxlength:4,
                    minlength:4
                }
            },
            messages: {
                tahuna: {
                    required: "Kolom Tahun Pertama Harus Diisi",
                    number: "Format isian angka",
                    maxlength: "Panjang Karakter Tahun Pertama Max 4",
                    minlength: "Panjang Karakter Tahun Pertama Min 4"
                },
                tahunb: {
                    required: "Kolom Tahun Kedua Harus Diisi",
                    number: "Format isian angka",
                    maxlength: "Panjang Karakter Tahun Kedua Max 4",
                    minlength: "Panjang Karakter Tahun Kedua Min 4"
                }
            }
        });
    });
</script>