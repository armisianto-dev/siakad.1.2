<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
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
        <div class="box">
            <div class="box-header">
                <span class="box-title">Mengajar</span>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $notif; ?>
               
                <table id="tartikel" class="table table-responsive table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="25%">Nama Guru</th>
                            <th width="25%">Mata Pelajaran</th>
                            <th width="5%">Kelas</th>
                            <th width="9%">Tahun Ajaran</th>
                            <th width="30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <td width="3%" align="center"><?= $i++ ?></td>
                                <td> <?= $row['nama'] ?></td>
                                <td> <?= $row['mapel'] ?></td>
                                <td> <?= $row['kelas'] ?></td>
                                <td> <?= $row['thn_ajaran'] ?></td>
                                <td>
                                <?php
                                foreach ($aspek as $value) {
                                ?>
                                    
                                    <span class="btn-group btn-group-justified" role="group">
                                        <a class="btn btn-default btn-flat btn-sm" disabled="disabled" style="color:#000000"><?=ucfirst($value['aspek'])?> :</a>
                                        <?= anchor('rekapnilai/detail/' . $row['ID'] .'/'. $value['ID'] . '', 'Detail', 'class="btn btn-info btn-flat btn-sm" title="Detail Nilai"') ?>
                                    </span>
                                <?php } ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6" align="center">Belum Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>							
                </table>
            </div>
            <div class="box-footer clearfix">
                <!-- <?php echo $pagination; ?> -->
            </div>
        </div><!-- /.box -->                            
    </div>
</div>