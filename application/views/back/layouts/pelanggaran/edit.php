<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Jenis Pelanggaran</h3>
            </div>
            <?= form_open('pelanggaran/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">                      
               
                <div class="form-group">
                    <label>Deskripsi Pelanggaran</label>
                    <input class="form-control input-sm" name="nama" type="text" value="<?= $row['NAMA'] ?>" placeholder="Deskripsi Pelanggaran">
                </div>
                <div class="form-group">
                    <label>Point</label>
                    <input class="form-control input-sm" name="point" type="text" value="<?= $row['point'] ?>" placeholder="Point Pelanggaran">
                </div>
                <input type="hidden" name="id" value="<?= $row['ID'] ?>">                  
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
                nama: {
                    required: true
                },
                point: {
                    required: true,
                    number: true,
                    min: 1,
                }
            },
            messages: {
                nama: {
                    required: "Kolom Deskripsi Pelanggaran Harus Diisi"
                },
                point: {
                    required: "Kolom Point Pelanggaran Harus Diisi",
                    number: "Format Isian Angka",
                    min: "Point minimal 1",
                }
            }
        });
    });
</script>