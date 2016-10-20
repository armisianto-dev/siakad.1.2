<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "paging": true,
            "info": true,
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
                <h3 class="box-title">Daftar Siswa</h3>
            </div><!-- /.box-header -->
            <?php
                $sem=$sem['value'];
                $ta=$ta['value'];
            ?>
            <div class="box-body table-responsive" style="width:100%;">
            <?=$notif;?>
                <table class="table table-borderless" style="width:100%;">
                <?php 
                if(!empty($wali)){
                ?>
                    <tr>
                        <td width="20%">Nama Wali Kelas</td>
                        <td width="2%">:</td>
                        <td width="25%"><?=$wali['nama'];?></td>
                        <td width="150px" rowspan="4">
                               <h3 class="pull-right btn btn-info btn-flat btn-lg" style="margin-top:0">Jumlah Siswa : <span class="badge  total"><?=$wali['JML'];?></span></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$wali['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$wali['THN'];?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$sem;?></td>
                    </tr>
                    <?php }else{
                        echo "Data wali kelas tidak ditemukan";
                        } ?>
                   
                </table>
                <table id="tartikel" class="table table-bordered table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="6%">NIS</th>
                                <th width="40%">Nama</th>
                                <th width="15%">Jenis Kelamin</th>
                                <th width="10%">Agama</th>
                                <th width="15%">Aksi</th>
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
                                <td> <?= $row['NIS'] ?></td>
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
                                <td> <?= $row['agama'] ?></td>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('raport/lihat/' . $row['NIS'] .'/'.$sem.'/'.$ta. '', 'Lihat Raport', 'class="label label-info" title="Lihat Raport Siswa"') ?>
                                        <?= anchor('raport/add/' . $row['NIS'] .'/'.$sem.'/'.$ta. '', 'Setup Raport', 'class="label label-success" title="Setup Raport Siswa"') ?>
                                    </span>
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
               
            </div>
        </div><!-- /.box -->                            
    </div>
</div>

