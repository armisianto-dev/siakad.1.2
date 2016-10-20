<?php 
if (!$this->ion_auth->logged_in()){
    $user ='';
    $user_groups='';
}else{
    $users = $this->ion_auth->user()->row();
    $user_groups = $this->ion_auth->get_users_groups($users->id)->result();
}?>
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
                <span class="box-title">Detail Presensi</span>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:100%;">
                <?php echo $notif; ?>
               
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th width="5%">NIS</th>
                            <th width="25%">Nama</th>
                            <th width="16%">Tangggal Presensi</th>
                            <th width="12%">Status</th>
                            <th width="30%">Keterangan</th>
                            <?php foreach ($user_groups as $value) {
                                if($value->name=="Guru_BK"){?>
                            <th width="25%">Aksi</th>
                            <?php }} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <td align="center"><?= $i++ ?></td>
                                <td> <?= $row['NIS'] ?></td>
                                <td> <?= $row['nama'] ?></td>
                                <td> <?= tgl($row['TGL']) ?></td>
                                <td>
                                <?php 
                                    $status=$row['status'];
                                    if ($status=="S") {
                                        echo "Sakit";
                                    }elseif ($status=="I") {
                                        echo "Ijin";
                                    }else{
                                        echo "Tanpa Keterangan";
                                    }
                                ?> 
                                </td>
                                <td> <?= $row['ket'] ?></td>
                                <?php foreach ($user_groups as $value) {
                                    if($value->name=="Guru_BK"){?>
                                    <td>
                                        <span class="pull-right">
                                            <?= anchor('presensi/edit/' . $row['ID'] . '', 'Edit', 'class="label label-info" title="Edit Presensi"') ?>
                                            <?= anchor('presensi/delete/' . $row['ID'] . '', 'Delete', 'class="label label-danger" title="Delete Presensi" onClick="return confirm(\'Yakin ingin menghapus presensi siswa?\');"') ?>
                                        </span>
                                    </td>
                                <?php }} ?>
                                
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