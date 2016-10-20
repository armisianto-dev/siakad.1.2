<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Data Siswa</h3>
            </div>
            <?= form_open('siswa/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body row">
                <div class="form-group col-md-12">
                    <h4>Biodata Siswa</h4>
                </div>
                
                <div class="form-group col-md-6">
                    <label>NIS</label>
                    <input class="form-control input-sm" name="nis" type="text" placeholder="No. Induk Siswa">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>NISN</label>
                    <input class="form-control input-sm" name="nisn" type="text" placeholder="NISN, Isikan tanpa spasi">
                </div>
                <div class="form-group col-md-6">
                    <label>Nama</label>
                    <input class="form-control input-sm" name="nama" type="text" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label>Jenis Kelamin</label></br>
                    &nbsp;&nbsp;<input type="radio" name="jk" value="L" checked="">Laki-Laki
                    &nbsp;&nbsp;<input type="radio" name="jk" value="P">Perempuan</br>
                </div>				        
                <div class="form-group col-md-6">
                    <label>Agama</label>
                    <select name="agama" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Kota Lahir</label>
                    <input class="form-control input-sm" name="kota" type="text" placeholder="Kota Lahir">
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Lahir</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tgl" type="text" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat</label>
                    <input class="form-control input-sm" name="alamat" type="text" placeholder="Alamat">
                </div>
                <div class="form-group col-md-4">
                    <label>Jumlah Saudara</label>
                    <input class="form-control input-sm" name="jmlsdr" type="text" placeholder="Jumlah Saudara">
                </div>
                <div class="form-group col-md-4">
                    <label>Anak Ke</label>
                    <input class="form-control input-sm" name="anakke" type="text" placeholder="Anak Ke">
                </div>
                <div class="form-group col-md-4">
                    <label>Status Anak</label>
                    <select name="sttsanak" class="form-control input-sm">
                        <option value="kandung">Kandung</option>
                        <option value="angkat">Angkat</option>
                        <option value="tiri">Tiri</option>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-4">
                    <label>Asal SD</label>
                    <input class="form-control input-sm" name="asalsd" type="text" placeholder="Asal SD">
                </div>
                <div class="form-group col-md-4">
                    <label>No STTB/Ijazah</label>
                    <input class="form-control input-sm" name="nosttb" type="text" placeholder="No STTB/Ijazah">
                </div>
                <div class="form-group col-md-4">
                    <label>Tahun STTB</label>
                    <input class="form-control input-sm" name="thnsttb" type="text" placeholder="Tahun STTB/Ijazah">
                </div>
                <div class="form-group col-md-6">
                    <label>Kelas Diterima</label>
                    <select name="kelas" class="form-control input-sm">
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Diterima</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                    <input class="form-control input-sm datepicker" name="tglditerima" type="text" placeholder="Tanggal Diterima">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Pindahan Dari SMP Lain*</label></br>
                    &nbsp;&nbsp;<input id="ya" type="radio" name="pindahan" value="Y">Ya
                    &nbsp;&nbsp;<input type="radio" name="pindahan" value="T" checked="">Tidak</br>
                </div>

                <div class="form-group col-md-6">
                    <label>Upload Foto (Resolusi: 535x300 Pixel. Tipe gambar: .jpg, .jpeg, .png)</label>
                    <input type="file" name="userfile" />
                </div>

                <div class="form-group col-md-6">
                    <label>SMP Asal</label>
                    <input class="form-control input-sm" name="smpasal" type="text" placeholder="SMP Asal">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Keterangan Pindah</label>
                    <textarea class="form-control input-sm" name="ketpindah" rows="6"> </textarea> 
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
                    <input class="form-control input-sm" name="ayah" type="text" placeholder="Nama Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Ibu</label>
                    <input class="form-control input-sm" name="ibu" type="text" placeholder="Nama Ibu">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Ayah</label>
                    <input class="form-control input-sm" name="alamatayah" type="text" placeholder="Alamat Ayah">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Ibu</label>
                    <input class="form-control input-sm" name="alamatibu" type="text" placeholder="Alamat Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Ayah</label>
                    <input class="form-control input-sm" name="telpayah" type="text" placeholder="Telp Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Ibu</label>
                    <input class="form-control input-sm" name="telpibu" type="text" placeholder="Telp Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Ayah</label>
                    <input class="form-control input-sm" name="kerjaayah" type="text" placeholder="Pekerjaan Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Ibu</label>
                    <input class="form-control input-sm" name="kerjaibu" type="text" placeholder="Pekerjaan Ibu">
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Ayah</label>
                    <select name="agamaayah" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Ibu</label>
                    <select name="agamaibu" class="form-control input-sm">
                    <?php foreach ($list as $value) {
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
                    &nbsp;&nbsp;<input type="radio" name="sttswali" value="ayah" checked="">Ayah
                    &nbsp;&nbsp;<input type="radio" name="sttswali" value="ibu">Ibu
                    &nbsp;&nbsp;<input id="ol"  type="radio" name="sttswali" value="ol">Orang Lain</br>
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Wali</label>
                    <input class="form-control input-sm" name="wali" type="text" placeholder="Nama Wali">
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat Wali</label>
                    <input class="form-control input-sm" name="alamatwali" type="text" placeholder="Alamat Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Telp Wali</label>
                    <input class="form-control input-sm" name="telpwali" type="text" placeholder="Telp Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan Wali</label>
                    <input class="form-control input-sm" name="kerjawali" type="text" placeholder="Pekerjaan Wali">
                </div>
                <div class="form-group col-md-6">
                    <label>Agama Wali</label>
                    <select name="agamawali" class="form-control input-sm">
                    <?php foreach ($list as $value) {
                        echo '<option value="'.$value['ID'].'">'.$value['NAMA'].'</option>';
                    } ?>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>*) Isi data wali siswa jika memilih orang lain</label>
                    <label>kosongkan jika memilih ayah/ibu</label>
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
                nis: {
                    required: true,
                    maxlength: 6,
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
                nis: {
                    required: "Kolom NIS harus diisi",
                    number: "Format isian hanya angka",
                    maxlength: "Maksimal 6 Karakter(Tanpa Spasi)"
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