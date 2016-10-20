
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Setting Raport Siswa</h3>

            </div><!-- /.box-header -->
            <div class="box-body table-responsive"  style="width:80%;">
                <table class="table table-borderless" style="width:100%;">
                    <tr>
                        <td width="10%">NIS</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$siswa['nis'];?></td>
                    </tr>
                    <tr>
                        <td width="10%">Nama</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$siswa['nama'];?></td>
                    </tr>

                    <tr>
                        <td>Tingkat/Jenjang</td>
                        <td>:</td>
                        <td><?=$siswa['tingkat'];?></td>
                    </tr>
                   
                </table>
                <?= form_open('raport/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <?php
                    $tingkat=$siswa['tingkat'];
                ?>
                <input type="hidden" name="tingkat" value="<?=$tingkat?>">
                <input type="hidden" name="nis" value="<?=$siswa['nis']?>">
                <input type="hidden" name="kepsek" value="<?=$kepsek['nip']?>">
                <input type="hidden" name="ta" value="<?=$ta?>">
                <input type="hidden" name="sem" value="<?=$sem?>">
                <div class="form-group">
                    <label>Catatan Raport</label>
                    <textarea name="catatan" class="form-control input-sm" rows="5" style="max-width: 300px;"><?=$raport['catatan']?></textarea>
                </div>
                <div class="form-group">
                    <label>Keputusan</label></br>
                    <?php
                    if ($tingkat!="9"&&$raport['keputusan']=="belum") {?>
                        <input type="hidden" name="keputusan" value="belum"/>
                    <?php }elseif($tingkat!="9"&&$raport['keputusan']=="naik"){?>
                        <input type="radio" name="keputusan" value="naik" checked=""/> Naik ke kelas <?=$tingkat+1?></br>
                        <input type="radio" name="keputusan" value="tinggal"/> Tinggal di kelas <?=$tingkat?>
                    <?php }elseif($tingkat!="9"&&$raport['keputusan']=="tinggal"){?>
                        <input type="radio" name="keputusan" value="naik"/> Naik ke kelas <?=$tingkat+1?></br>
                        <input type="radio" name="keputusan" value="tinggal"  checked=""/> Tinggal di kelas <?=$tingkat?>
                    <?php }elseif($raport['keputusan']=="lulus"){?>
                        <input type="radio" name="keputusan" value="lulus" checked=""/> Lulus</br>
                        <input type="radio" name="keputusan" value="tinggal"/> Tidak Lulus
                    <?php }else{?>
                        <input type="radio" name="keputusan" value="lulus" /> Lulus</br>
                        <input type="radio" name="keputusan" value="tinggal" checked=""/> Tidak Lulus
                    <?php }
                    ?>
                    
                </div>
                <div class="box-footer">
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat pull-right"><span class="ion-ios7-loop-strong"></span> Simpan</button>
                </div>
            <?= form_close(); ?>
            </div>
        </div><!-- /.box -->                            
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
                tgl: {
                    required: true,
                    date:true
                },
                catatan: {
                    required: true,
                    maxlength:200
                }
            },
            messages: {
                tgl: {
                    required: "Kolom Tanggal Raport harus diisi",
                    date:"Format tanggal salah"
                },
                catatan: {
                    required: "Kolom Catatan harus diisi",
                    maxlength:"Maksimal 200 karakter"
                }
            }
        });
    });
</script>