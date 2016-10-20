<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Semua"]],
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
                <span class="box-title">Agama</span>
                <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('agama/add') ?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah</a>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:55%;">
                <?php echo $notif; ?>
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Agama</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <td width="12px" align="center"><?= $i++ ?></td>
                                <td> <?= $row['agama'] ?></td>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('agama/edit/' . $row['ID'] . '', 'Edit', 'class="label label-warning" title="Edit agama"') ?>
                                        <?= anchor('agama/delete/' . $row['ID'] . '', 'Hapus', 'class="label label-danger" title="Hapus agama" onClick="return confirm(\'Yakin ingin menghapus ' . $row['agama'] . ' dari data agama?\');"') ?>
                                    </span>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5" align="center">Belum Ada Data</td>
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