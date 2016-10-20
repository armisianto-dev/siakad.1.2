<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Guru & Karyawan</h3>
            </div>
            <?= form_open('guru_karyawan/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">
                <input type="hidden" name="nip_a" value="<?=$row['nip']?>">
                <input type="hidden" name="aktif" value="<?=$row['aktif']?>">
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control input-sm" name="nip" type="text" value="<?=$row['nip']?>" placeholder="NIP, Isikan tanpa spasi">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control input-sm" name="nama" type="text" value="<?=$row['nama']?>" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <?php 
                        if ($row['jk']=="L") {
                            echo '&nbsp;&nbsp;<input type="radio" name="jk" value="L" checked="">Laki-Laki';
                            echo '&nbsp;&nbsp;<input type="radio" name="jk" value="P">Perempuan';
                        }else{
                            echo '&nbsp;&nbsp;<input type="radio" name="jk" value="L">Laki-Laki';
                            echo '&nbsp;&nbsp;<input type="radio" name="jk" value="P" checked="">Perempuan'; 
                        }
                    ?>
                </div>                      
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$row['id_agama']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    <?php foreach ($list as $value) {
                        if ($value['ID']==$row['id_agama']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kota Lahir</label>
                    <input class="form-control input-sm" name="kota" type="text" value="<?=$row['KOTA']?>" placeholder="Kota Lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group" style="max-width: 300px;">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" value="<?=$row['TGL']?>" placeholder="Tanggal Lahir" style="max-width: 300px;">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control input-sm" name="alamat" type="text" value="<?=$row['alamat']?>" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>Telp</label>
                    <input class="form-control input-sm" name="telp" type="text" value="<?=$row['telp']?>" placeholder="Telp">
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="pend" class="form-control input-sm">
                    <?php 
                        foreach ($pend as $value) {
                            if ($value!=$row['PEND']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    <?php 
                        foreach ($pend as $value) {
                            if ($value==$row['PEND']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Riwayat Pendidikan</label>
                    <textarea class="form-control" rows="3" name="riwayat">
                        <?=$row['RIWAYAT']?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" class="form-control input-sm">
                    <?php 
                        foreach ($jabatan as $value) {
                            if ($value!=$row['jabatan']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    <?php 
                        foreach ($jabatan as $value) {
                            if ($value==$row['jabatan']) {
                                continue;
                            }
                             echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thumbnails</label>
                    <img src="<?php echo base_url(); ?>res/foto/guru/<?= $row['foto'] ?>" style="width:130px;height:150px;"/>
                </div>
                <div class="form-group">
                    <label>Ganti Thumbnails *) Kosongkan jika thumbnails tidak ingin diganti</label><br/>
                    <label>(Resolusi: 535x300 Pixel. Tipe gambar: .jpg, .jpeg, .png)</label>
                    <input type="file" name="userfile"/>
                </div>
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