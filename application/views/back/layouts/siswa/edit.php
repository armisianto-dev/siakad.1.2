<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Data Siswa</h3>
            </div>
            <?= form_open('siswa/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <input type="hidden" name="nis" value="<?= $row['NIS'] ?>">
            <div class="box-body row">
                <div class="form-group col-md-12">
                    <h4>Biodata Siswa</h4>
                </div>
                
                <div class="form-group col-md-6">
                    <label>NIS</label>
                    <input class="form-control input-sm" name="nis" type="text" value="<?= $row['NIS'] ?>" placeholder="No. Induk Siswa">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>NISN</label>
                    <input class="form-control input-sm" name="nisn" type="text" value="<?= $row['nisn'] ?>" placeholder="NISN, Isikan tanpa spasi">
                </div>
                <div class="form-group col-md-6">
                    <label>Nama</label>
                    <input class="form-control input-sm" name="nama" type="text" value="<?= $row['nama'] ?>" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label>Jenis Kelamin</label></br>
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
                <div class="form-group col-md-6">
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
                <div class="form-group col-md-6">
                    <label>Kota Lahir</label>
                    <input class="form-control input-sm" name="kota" value="<?=$row['KOTA']?>" type="text" placeholder="Kota Lahir">
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Lahir</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" value="<?=$row['TGL']?>" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat</label>
                    <input class="form-control input-sm" name="alamat" type="text" value="<?= $row['alamat'] ?>" placeholder="Alamat">
                </div>
                <div class="form-group col-md-4">
                    <label>Jumlah Saudara</label>
                    <input class="form-control input-sm" name="jmlsdr" type="text" value="<?= $row['JML'] ?>" placeholder="Jumlah Saudara">
                </div>
                <div class="form-group col-md-4">
                    <label>Anak Ke</label>
                    <input class="form-control input-sm" name="anakke" type="text" value="<?= $row['KE'] ?>" placeholder="Anak Ke">
                </div>
                <div class="form-group col-md-4">
                    <label>Status Anak</label>
                    <select name="sttsanak" class="form-control input-sm">
                        <?php 
                            foreach ($anak as $value) {
                                if ($value!=$row['ANAK']) {
                                    continue;
                                }
                                 echo '<option value="'.$value.'">'.ucwords($value).'</option>';
                            }
                        ?>
                        <?php 
                            foreach ($anak as $value) {
                                if ($value==$row['ANAK']) {
                                    continue;
                                }
                                 echo '<option value="'.$value.'">'.ucwords($value).'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-4">
                    <label>Asal SD</label>
                    <input class="form-control input-sm" name="asalsd" type="text" value="<?= $row['SD'] ?>" placeholder="Asal SD">
                </div>
                <div class="form-group col-md-4">
                    <label>No STTB/Ijazah</label>
                    <input class="form-control input-sm" name="nosttb" type="text" value="<?= $row['no_sttb'] ?>" placeholder="No STTB/Ijazah">
                </div>
                <div class="form-group col-md-4">
                    <label>Tahun STTB</label>
                    <input class="form-control input-sm" name="thnsttb" type="text" value="<?= $row['tahun_sttb'] ?>" placeholder="Tahun STTB/Ijazah">
                </div>
                <div class="form-group col-md-6">
                    <label>Kelas Diterima</label>
                    <select name="kelas" class="form-control input-sm">
                        <?php 
                            foreach ($kelas as $value) {
                                if ($value!=$row['kls_diterima']) {
                                    continue;
                                }
                                 echo '<option value="'.$value.'">'.$value.'</option>';
                            }
                        ?>
                        <?php 
                            foreach ($kelas as $value) {
                                if ($value==$row['kls_diterima']) {
                                    continue;
                                }
                                 echo '<option value="'.$value.'">'.$value.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Diterima</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tglditerima" type="text" value="<?= $row['tgl_diterima'] ?>" placeholder="Tanggal Diterima">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Pindahan Dari SMP Lain*</label></br>
                    <?php 
                        if ($row['pindahan']=="Y") {
                            echo '&nbsp;&nbsp;<input id="ya" type="radio" name="pindahan" value="Y" checked="">Ya';
                            echo '&nbsp;&nbsp;<input type="radio" name="pindahan" value="T">Tidak';
                        }else{
                            echo '&nbsp;&nbsp;<input id="ya" type="radio" name="pindahan" value="Y">Ya';
                            echo '&nbsp;&nbsp;<input type="radio" name="pindahan" value="T" checked="">Tidak'; 
                        }
                    ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Upload Foto (Resolusi: 535x300 Pixel. Tipe gambar: .jpg, .jpeg, .png)</label>
                    <input type="file" name="userfile" />
                </div>

                <div class="form-group col-md-6">
                    <label>SMP Asal</label>
                    <input class="form-control input-sm" name="smpasal" type="text" value="<?= $row['SMP'] ?>" placeholder="SMP Asal">
                    <div class="clearfix"></div>
                    <label>Keterangan Pindah</label>
                    <textarea class="form-control input-sm" name="ketpindah" rows="6"><?= $row['ALASAN'] ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Thumbnails</label><br/>
                    <img src="<?php echo base_url(); ?>res/foto/siswa/<?= $row['foto'] ?>" style="width:130px;height:150px;"/>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>*) Pilih Ya jika merupakan siswa pindahan dari SMP lain</label>
                </div>
                
                <input type="hidden" name="status" value="aktif">
                <!-- Yg diatas itu utk input ke tabel siswa -->
                <div class="form-group col-md-12">
                    <h4>Data Orang Tua Siswa</h4>
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Ayah</label>
                    <input class="form-control input-sm" name="ayah" type="text" value="<?= $ortu['ayah'] ?>" placeholder="Nama Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Ibu</label>
                    <input class="form-control input-sm" name="ibu" type="text" value="<?= $ortu['ibu'] ?>" placeholder="Nama Ibu">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Ayah</label>
                    <input class="form-control input-sm" name="alamatayah" type="text" value="<?= $ortu['alamat_ayah'] ?>" placeholder="Alamat Ayah">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Ibu</label>
                    <input class="form-control input-sm" name="alamatibu" type="text" value="<?= $ortu['alamat_ibu'] ?>" placeholder="Alamat Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Ayah</label>
                    <input class="form-control input-sm" name="telpayah" type="text" value="<?= $ortu['telp_ayah'] ?>" placeholder="Telp Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Ibu</label>
                    <input class="form-control input-sm" name="telpibu" type="text" value="<?= $ortu['telp_ibu'] ?>" placeholder="Telp Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Ayah</label>
                    <input class="form-control input-sm" name="kerjaayah" type="text" value="<?= $ortu['pekerjaan_ayah'] ?>" placeholder="Pekerjaan Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Ibu</label>
                    <input class="form-control input-sm" name="kerjaibu" type="text" value="<?= $ortu['pekerjaan_ibu'] ?>" placeholder="Pekerjaan Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Ayah</label>
                    <select name="agamaayah" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$ortu['agama_ayah']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    <?php foreach ($list as $value) {
                        if ($value['ID']==$ortu['agama_ayah']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Ibu</label>
                    <select name="agamaibu" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$ortu['agama_ibu']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    <?php foreach ($list as $value) {
                        if ($value['ID']==$ortu['agama_ibu']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <!-- Yg diatas itu utk input ke tabel ortu -->
                <div class="form-group col-md-12">
                    <h4>Data Wali Siswa</h4>
                </div>

                <div class="form-group col-md-12">
                    <label>Status Wali*</label></br>
                    <?php foreach ($status as $value) {
                        if ($value!=$wali['status_wali']) {
                            continue;
                        }
                        echo '&nbsp;&nbsp;<input type="radio" name="sttswali" value="'.$value.'" checked="">'.ucwords($value).'';
                    } ?>
                    <?php foreach ($status as $value) {
                        if ($value==$wali['status_wali']) {
                            continue;
                        }
                        echo '&nbsp;&nbsp;<input type="radio" name="sttswali" value="'.$value.'">'.ucwords($value).'';
                    } ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Wali</label>
                    <input class="form-control input-sm" name="wali" value="<?=$wali['wali']?>" type="text" placeholder="Nama Wali">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Wali</label>
                    <input class="form-control input-sm" name="alamatwali" type="text" value="<?=$wali['alamat_wali']?>" placeholder="Alamat Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Wali</label>
                    <input class="form-control input-sm" name="telpwali" type="text" value="<?=$wali['telp_wali']?>" placeholder="Telp Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Wali</label>
                    <input class="form-control input-sm" name="kerjawali" type="text" value="<?=$wali['pekerjaan_wali']?>" placeholder="Pekerjaan Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Wali</label>
                    <select name="agamawali" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$wali['agama_wali']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    <?php foreach ($list as $value) {
                        if ($value['ID']==$wali['agama_wali']) {
                            continue;
                        }
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>*) Isi data wali siswa jika memilih orang lain,</label>
                    <label>kosongkan/abaikan jika memilih ayah/ibu</label>
                </div>
                <!-- Yg diatas itu utk input ke tabel wali_siswa -->
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
                nisn: {
                    required: true,
                    maxlength: 10,
                    number:true
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
                jmlsdr: {
                    required: true,
                    number:true,
                    min:0
                },
                anakke: {
                    required: true,
                    number:true,
                    min:0
                },
                asalsd: {
                    required: true
                },
                nosttb: {
                    required: true
                },
                thnsttb: {
                    required: true,
                    number:true,
                    minlength: 4,
                    maxlength: 4
                },
                tglditerima: {
                    required: true,
                    date: true
                },
                smpasal: {
                    required: "#ya:checked"
                },
                ketpindah: {
                    required: "#ya:checked"
                },
                userfile: {
                    extension: "png|jp?g"
                },
                //data ortu
                ayah: {
                    required: true
                },
                ibu: {
                    required: true
                },
                alamatayah: {
                    required: true
                },
                alamatibu: {
                    required: true
                },
                kerjaayah: {
                    required: true
                },
                kerjaibu: {
                    required: true
                },
                telpayah: {
                    required: true,
                    number: true
                },
                telpibu: {
                    required: true,
                    number: true
                },
                //data wali siswa
                wali: {
                    required:"#ol:checked"
                },
                alamatwali: {
                    required:"#ol:checked"
                },
                telpwali: {
                    required:"#ol:checked",
                    number: true
                },
                kerjawali: {
                    required:"#ol:checked"
                }

            },
            messages: {
                nisn: {
                    required: "Kolom NISN harus diisi",
                    number: "Format isian hanya angka",
                    maxlength: "Maksimal 10 Karakter(Tanpa Spasi)"
                },
                nama: {
                    required: "Kolom Nama harus diisi",
                    number: "Format isian hanya huruf"
                },
                jk: {
                    required: "Silahkan pilih jenis kelamin"
                },
                kota: {
                    required: "Kolom Kota Lahir harus diisi",
                    number: "Format isian hanya huruf"
                },
                tgl: {
                    required: "Kolom Tanggal Lahir harus diisi",
                    date: "Format isian salah"
                },
                alamat: {
                    required: "Kolom Alamat harus diisi"
                },
                jmlsdr: {
                    required: "Kolom Jumlah Saudara harus diisi",
                    number: "Format isian angka",
                    min:"Minimal 0"
                },
                anakke: {
                    required: "Kolom Anak Ke harus diisi",
                    number:"Format isian angka",
                    min:"Minimal 0"
                },
                asalsd: {
                    required: "Kolom Asal SD harus diisi"
                },
                nosttb: {
                    required: "Kolom No STTB harus diisi"
                },
                thnsttb: {
                    required: "Kolom Tahun STTB harus diisi",
                    number: "Format isian angka",
                    minlength: "Format tahun salah",
                    maxlength: "Format tahun salah"
                },
                tglditerima: {
                    required: "Kolom Tanggal Diterima harus diisi",
                    date: "Format isian salah"
                },
                smpasal: {
                    required: "Kolom SMP Asal harus diisi"
                },
                ketpindah: {
                    required: "Kolom Keterangan Pindah harus diisi"
                },
                userfile: {
                    extension: "File Type tidak sesuai"
                },
                //data ortu
                ayah: {
                    required: "Kolom Nama Ayah harus diisi"
                },
                ibu: {
                    required: "Kolom Nama Ibu harus diisi"
                },
                alamatayah: {
                    required: "Kolom Alamat Ayah harus diisi"
                },
                alamatibu: {
                    required: "Kolom Alamat Ibu harus diisi"
                },
                kerjaayah: {
                    required: "Kolom Pekerjaan Ayah harus diisi"
                },
                kerjaibu: {
                    required: "Kolom Pekerjaan Ibu harus diisi"
                },
                telpayah: {
                    required: "Kolom Telp Ayah harus diisi",
                    number: "Format isian angka"
                },
                telpibu: {
                    required: "Kolom Telp Ibu harus diisi",
                    number: "Format isian angka"
                },
                //data wali siswa
                wali: {
                    required:"Kolom Nama Wali harus diisi"
                },
                alamatwali: {
                    required:"Kolom Alamat Wali harus diisi"
                },
                telpwali: {
                    required:"Kolom Telp Wali harus diisi",
                    number: "Format isian angka"
                },
                kerjawali: {
                    required:"Kolom Pekerjaan Wali harus diisi"
                }
            }
        });
    });
</script>