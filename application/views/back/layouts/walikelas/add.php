<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Wali Kelas</h3>
            </div>
            <?= form_open('walikelas/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">				        
               <input name="ta" type="hidden" value="<?= $ta['value']?>">
                <div class="form-group">
                    <label>Guru</label>
                    <select name="guru" class="form-control input-sm">
                        <?php 
                            foreach ($guru as $value) {
                                echo '<option value="'.$value['NIP'].'">'.$value['nama'].'</option>';
                            }
                        ?>
                    </select>
                </div> 
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control input-sm">
                        <?php 
                            foreach ($kelas as $value) {
                                echo '<option value="'.$value['ID'].'">'.$value['kelas'].'</option>';
                            }
                        ?>
                    </select>
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
                jml: {
                    required: true,
                    number: true
                }
            },
            messages: {
                jml: {
                    required: "Kolom Jumlah jam Harus Diisi",
                    number: "Format isian angka"
                },
            }
        });
    });
</script>