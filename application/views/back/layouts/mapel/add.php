<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Mata Pelajaran</h3>
            </div>
            <?= form_open('mapel/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">				        
               
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <input class="form-control input-sm" name="mapel" type="text" placeholder="Nama Mata Pelajaran">
                </div>
                <div class="form-group">
                    <label>Kelompok</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="kel" value="A" checked="">&nbsp;A&nbsp;&nbsp;<input type="radio" name="kel" value="B">&nbsp;B
                </div>
                <input type="hidden" name="aktif" value="Y">                  
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
                mapel: {
                    required: true
                }
            },
            messages: {
                mapel: {
                    required: "Kolom Mata Pelajaran Harus Diisi"
                },
            }
        });
    });
</script>