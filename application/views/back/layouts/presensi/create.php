<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "paging": false,
            "info": false,
            "lengthMenu": [[10, 50, -1], [10, 50, "Semua"]],
            "sPaginationType": "full_numbers",
            "language": {
            "lengthMenu": "Menampilkan _MENU_ Baris per halaman",
            "zeroRecords": "Tidak menemukan pencarian yang anda maksud",
            "info": "Halaman _PAGE_ dari _PAGES_ |Total _MAX_ data",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
              "next": "<i class='fa fa-forward'></i>",
              "previous": "<i class='fa fa-backward'></i>",
              "first": "<i class='fa fa-fast-backward'></i>",
              "last": "<i class='fa fa-fast-forward'></i>"
            }
           }
        
        });
        
    } );
</script>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Detail Siswa Kelas</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:100%;">
             <?= form_open('presensi/insert', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <table class="table table-borderless" style="width:100%;">
                    <tr>
                        <td width="12%">Kelas</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$kelas['kelas'];?></td>
                        <td width="150px" rowspan="3">
                               <h3 class="pull-right btn btn-info btn-flat btn-lg" style="margin-top:0">Jumlah Siswa : <span class="badge  total"><?=$kelas['JML']?></span></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Tingkat/Jenjang</td>
                        <td>:</td>
                        <td><?=$kelas['jenjang'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Presensi</td>
                        <td>:</td>
                        <td><input type="text" class="datepicker form-control input-sm" name="tgl" value="<?=$tgl?>"></td>
                    </tr>
                   
                </table>
                
                <table id="tartikel" class="table table-border table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="10%">NIS</th>
                                <th width="35%">Nama</th>
                                <th width="12%">Jenis Kelamin</th>
                                <th width="12%">Status</th>
                                <th width="25%">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <?php $no=$i++; ?>
                                <td align="center"><?= $no ?></td>
                                <td> 
                                    <?= $row['NIS'] ?>
                                    <input type="hidden" name="nis<?=$no?>" value="<?= $row['NIS'] ?>">
                                </td>
                                <td> <?= $row['nama'] ?></td>
                                <td>
                                <?php
                                    if ($row['jk']=="L") {
                                        echo "Laki-Laki";
                                    }else{
                                        echo "Perempuan";
                                    }
                                ?>
                                </td>
                                <td>
                                    <input type="radio" name="status<?=$no?>" value="H" checked="">H&nbsp;&nbsp;
                                    <input type="radio" name="status<?=$no?>" value="I">I&nbsp;&nbsp;
                                    <input type="radio" name="status<?=$no?>" value="S">S&nbsp;&nbsp;
                                    <input type="radio" name="status<?=$no?>" value="T">T&nbsp;&nbsp;
                                </td>
                                <td>
                                    <textarea class="form-control input-sm" name="ket<?=$no?>" rows="2"></textarea>
                                </td>
                            </tr>
                            <?php
                        }

                    } else {
                        ?>
                        <tr>
                            <td colspan="7" align="center">Belum Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>                            
                </table>
                <div class="box-footer">
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat pull-right"><span class="ion-ios7-loop-strong"></span>Simpan</button>
                </div>
                <?php
                    $n=1;
                    foreach ($list as $row) {
                        $n++;
                    }
                ?>
                <input type="hidden" name="data" value="<?= $n ?>">
                <input type="hidden" name="ta" value="<?=$ta['value']?>">
                <input type="hidden" name="sem" value="<?=$sem['value']?>">
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
                    date: true
                },
            },
            messages: {
                tgl: {
                    required: "Kolom Tanggal Lahir harus diisi",
                    date: "Format isian salah"
                },
            }
        });
    });
</script>
