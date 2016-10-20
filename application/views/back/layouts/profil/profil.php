<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Pengaturan Profil Sekolah</h3>
            </div><!-- /.box-header -->
            <?=
            form_open('profil_sekolah/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data'));
            if (!empty($list)) {
                foreach ($list as $row) {
                    ?>
                    <div class="box-body">
                        <?php echo $notif; ?>                
                        <input type="hidden" name="id" value="<?= $row['ID'] ?>" />
                        
                        <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input class="form-control input-sm" name="nama" type="text" value="<?= $row['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>NPSN</label>
                            <input class="form-control input-sm" name="npsn" type="text" value="<?= $row['npsn'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Sekolah</label>
                            <input class="form-control input-sm" name="alamat" type="text" value="<?= $row['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input class="form-control input-sm" name="pos" type="text" value="<?= $row['POS'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input class="form-control input-sm" name="kel" type="text" value="<?= $row['KEL'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input class="form-control input-sm" name="kec" type="text" value="<?= $row['KEC'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten</label>
                            <input class="form-control input-sm" name="kab" type="text" value="<?= $row['KAB'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input class="form-control input-sm" name="prov" type="text" value="<?= $row['PROV'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input class="form-control input-sm" name="telp" type="text" value="<?= $row['telp'] ?>">
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input class="form-control input-sm" name="email" type="text" value="<?= $row['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control input-sm" name="web" type="text" value="<?= $row['website'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input class="form-control input-sm" name="status" type="text" value="<?= $row['status'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Waktu KBM</label>
                            <input class="form-control input-sm" name="kbm" type="text" value="<?= $row['KBM'] ?>">
                        </div>
                        
                                               
                    <div class="box-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Update</button>
                    </div>
                    <?php
                }
            } else {
                ?>
                Tidak ada data
                <?php
            }
            echo form_close();
            ?>
        </div><!-- /.box -->                            
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#form-edit').validate({
            rules: {
                nama: {
                    required: true
                },
                npsn: {
                    required: true
                },
                alamat: {
                    required: true
                },
                pos: {
                    required: true
                },
                kel: {
                    required: true
                },
                kec: {
                    required: true
                },
                kab: {
                    required: true
                },
                prov: {
                    required: true
                },
                status: {
                    required: true
                },
                kbm: {
                    required: true
                },
                telp: {
                    required: true
                },
                email: {
                    required: true
                },
                web: {
                    required: true
                }

            },
            messages: {
                
                nama: {
                    required: "Kolom Nama Harus Diisi"
                },
                npsn: {
                    required: "Kolom NPSN Harus Diisi"
                },
                alamat: {
                    required: "Kolom Alamat Harus Diisi"
                },
                pos: {
                    required: "Kolom Kode Pos Harus Diisi"
                },
                kel: {
                    required: "Kolom Kelurahan Harus Diisi"
                },
                kec: {
                    required: "Kolom Kecamatan Harus Diisi"
                },
                kab: {
                    required: "Kolom Kabupaten Harus Diisi"
                },
                prov: {
                    required: "Kolom Provinsi Harus Diisi"
                },
                status: {
                    required: "Kolom Status Harus Diisi"
                },
                kbm: {
                    required: "Kolom Waktu KBM Harus Diisi"
                },
                telp: {
                    required: "Kolom Telp Harus Diisi"
                },
                email: {
                    required: "Kolom E-Mail Harus Diisi"
                },
                web: {
                    required: "Kolom Website Harus Diisi"
                }
            }
        });
    });
</script>