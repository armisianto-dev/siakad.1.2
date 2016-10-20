<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "paging": false,
            "info": false,
            "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "Semua"]],
            "sPaginationType": "full_numbers",
            "language": {
            "lengthMenu": "Menampilkan _MENU_ Baris per halaman",
            "zeroRecords": "Tidak menemukan pencarian yang anda maksud",
            "info": "Halaman _PAGE_ dari _PAGES_",
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
                <h3 class="box-title">Tambah Siswa Kelas</h3>

            </div><!-- /.box-header -->
            <div class="box-body table-responsive"  style="width:80%;">
                <?php 
                    $id=$kelas['ID'];
                    $ta=$ta['value'];
                ?>
                <table class="table table-borderless" style="width:100%;">
                    <tr>
                        <td width="10%">Kelas</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$kelas['kelas'];?></td>
                        <td width="150px" rowspan="2">
                               <h3 class="pull-right btn btn-info btn-flat btn-lg" style="margin-top:0">Jumlah Siswa : <span class="badge  total"></span></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Tingkat/Jenjang</td>
                        <td>:</td>
                        <td><?=$kelas['jenjang'];?></td>
                    </tr>
                   
                </table>
                <?= form_open('bagikelas/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <table id="tartikel" class="table table-border table-hover table-condensed">
                    <input type="hidden" name="idkelas" value="<?= $id ?>">
                    <input type="hidden" name="ta" value="<?= $ta ?>">
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="10%">NIS</th>
                                <th width="45%">Nama</th>
                                <th width="10%">Agama</th>
                                <th width="12%">Jenis Kelamin</th>
                                <th width="5%">Jenjang/Tingkat</th>
                                <th width="5%">Pilih</th>
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
                                <td> <?= $row['nis'] ?></td>
                                <td> <?= $row['nama'] ?></td>
                                <td> <?= $row['agama'] ?></td>
                                <td>
                                <?php
                                    if ($row['jk']=="L") {
                                        echo "Laki-Laki";
                                    }else{
                                        echo "Perempuan";
                                    }
                                ?>
                                </td>
                                <td align="center"> <?= $row['tingkat'] ?></td>
                                <td>
                                    <input type="hidden" id="nis" class="qty" name="nis<?= $no ?>" value="<?= $row['nis'] ?>">
                                    <input type="checkbox" name="pilih<?= $no ?>" class="pilih" value="1">
                                </td>
                            </tr>
                            <?php
                        }?>

                
                <?php

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
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat pull-right"><span class="ion-ios7-loop-strong"></span> Tambahkan</button>
                </div>
                <?php
                    $n=1;
                    foreach ($list as $row) {
                        $n++;
                    }
                ?>
                <input type="hidden" name="data" value="<?= $n ?>">
            <?= form_close(); ?>
            </div>
        </div><!-- /.box -->                            
    </div>
</div>

<script type="text/javascript">
        var countChecked = function() {
        var i=<?=$kelas['JML'];?>;
        var n = $( "input:checked" ).length;
        var tot = n + i;
        $('.total').text(tot);
        };
        countChecked();
        $( "input[type=checkbox]" ).on( "click", countChecked );
</script>
