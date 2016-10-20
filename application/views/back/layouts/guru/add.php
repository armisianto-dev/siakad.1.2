<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Guru & Karyawan</h3>
            </div>
            <?= form_open('guru_karyawan/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control input-sm" name="nip" type="text" placeholder="NIP, Isikan tanpa spasi">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control input-sm" name="nama" type="text" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    &nbsp;&nbsp;<input type="radio" name="jk" value="L" checked="">Laki-Laki
                    &nbsp;&nbsp;<input type="radio" name="jk" value="P">Perempuan</br>
                </div>				        
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kota Lahir</label>
                    <input class="form-control input-sm" name="kota" type="text" placeholder="Kota Lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group" style="max-width: 300px;">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" placeholder="Tanggal Lahir" style="max-width: 300px;">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control input-sm" name="alamat" type="text" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>Telp</label>
                    <input class="form-control input-sm" name="telp" type="text" placeholder="Telp">
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="pend" class="form-control input-sm">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Riwayat Pendidikan</label>
                    <textarea class="form-control" rows="3" name="riwayat"></textarea>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" class="form-control input-sm">
                        <option value="Kepsek">Kepsek</option>
                        <option value="Guru">Guru</option>
                        <option value="TU">TU</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload Foto (Resolusi: 535x300 Pixel. Tipe gambar: .jpg, .jpeg, .png)</label>
                    <input type="file" name="userfile" />
                </div>
                <input type="hidden" name="aktif" value="Y">
            </div>		                   
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>                      
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>themes/back/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        height: 150,
        menubar: false,
        subfolder:"folder",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak"
        ],
        toolbar1: "insertfile undo redo | bold italic | bullist numlist",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
</script>
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
                nip: {
                    required: true,
                    maxlength: 18
                },
                nama: {
                    required: true,
                    number: false
                },
                jk: {
                    required: true
                },
                kota: {
                    required: true,
                    number: false
                },
                tgl: {
                    required: true,
                    date: true
                },
                alamat: {
                    required: true
                },
                telp: {
                    required: true
                },
                userfile: {
                    extension: "png|jp?g"
                }
            },
            messages: {
                nip: {
                    required: "Kolom NIP harus diisi",
                    maxlength: "Maksimal 18 Karakter(Tanpa Spasi)"
                },
                nama: {
                    required: "Kolom Nama harus diisi",
                    number: "Format isian hanya huruf"
                },
                jk: {
                    required: "Silahkan pilih jenis kelamin"
                },
                kota: {
                    required: "Kolom Kota harus diisi",
                    number: "Format isian hanya huruf"
                },
                tgl: {
                    required: "Kolom Tanggal Lahir harus diisi",
                    date: "Format isian salah"
                },
                alamat: {
                    required: "Kolom Alamat harus diisi"
                },
                telp: {
                    required: "Kolom Telp harus diisi"
                },
                userfile: {
                    extension: "File Type tidak sesuai"
                }
            }
        });
    });
</script>