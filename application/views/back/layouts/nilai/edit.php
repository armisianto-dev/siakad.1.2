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
                <h3 class="box-title">Edit Nilai Siswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:100%;">

             <?= form_open('nilai/update', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
               <table class="table table-borderless col-md-6" style="width:50%;">
                    <tr>
                        <td width="10%">Nama Guru</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$mengajar['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['mapel'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$mengajar['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['thn_ajaran'];?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$sem['value'];?></td>
                    </tr>
                    </table>
                    <table class="table table-borderless col-md-6" style="width:49%;">
                    <tr>
                        <td>Aspek</td>
                        <td>:</td>
                        <td><?=ucfirst($aspek['aspek']);?></td>
                    </tr>
                    <tr>
                        <td>Sub Aspek</td>
                        <td>:</td>
                        <td><?=ucfirst($aspek['NAMA']);?></td>
                    </tr>
                    <tr>
                        <td>Nilai Ke</td>
                        <td>:</td>
                        <td><?=$ke;?></td>
                    </tr>
                    <tr>
                        <td>Nilai Maksimal</td>
                        <td>:</td>
                        <td><?=$max;?></td>
                    </tr>
                </table>
                <div class="clearfix"></div>
                <?php
                if ($max==100) { ?>

                <table id="tartikel" class="table table-border table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="10%">NIS</th>
                                <th width="35%">Nama</th>
                                <th width="12%">Jenis Kelamin</th>
                                <th width="25%">Nilai</th>
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
                                    <input type="hidden" name="id<?=$no?>" value="<?= $row['ID'] ?>">
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
                                    <input type="text" class="form-control input-sm" name="nilai<?=$no?>" value="<?=$row['nilai']?>">
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
                    
            <?php }elseif($max==4){ ?>
                <table id="tartikel" class="table table-border table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="10%">NIS</th>
                                <th width="35%">Nama</th>
                                <th width="12%">Jenis Kelamin</th>
                                <th width="25%">Nilai</th>
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
                                    <input type="hidden" name="id<?=$no?>" value="<?= $row['ID'] ?>">
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
                                    <input type="text" class="form-control input-sm" name="nilai<?=$no?>" value="<?=sprintf("%.0f",$row['nilai'])?>" maxlength="1">
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
            <?php } ?>
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
                <input type="hidden" name="mengajar" value="<?=$mengajar['ID'];?>">
            <?= form_close(); ?>
               
            </div>
        </div><!-- /.box -->                            
    </div>
</div>
<?php 
    if ($max==100) {
        
?>
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-tambah').validate({ // initialize the plugin
        // other options
    });

    $("[name^=nilai]").each(function () {
        $(this).rules("add", {
            required: true,
            max: <?=$max?>,
            min: 0,
            number:true,
            checkValue: false,
            messages:{
                required:"Kolom Nilai tidak boleh kosong",
                number:"Format isian angka",
                min:"Nilai Maksimal <?=$max?> Minimal 0",
                max:"Nilai Maksimal <?=$max?> Minimal 0"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>
<?php }elseif($max==4){?>
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-tambah').validate({ // initialize the plugin
        // other options
    });

    $("[name^=nilai]").each(function () {
        $(this).rules("add", {
            required: true,
            max: <?=$max?>,
            min: 0,
            digits:true,
            checkValue: false,
            messages:{
                required:"Kolom Nilai tidak boleh kosong",
                digits:"Format isian angka, bilangan bulat",
                min:"Nilai Maksimal <?=$max?> Minimal 0",
                max:"Nilai Maksimal <?=$max?> Minimal 0"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>
<?php } ?>