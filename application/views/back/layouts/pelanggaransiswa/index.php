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
                <span class="box-title">Pelanggaran Siswa</span>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:80%;">
                <?php echo $notif; ?>
               
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="5%">NIS</th>
                            <th width="30%">Nama</th>
                            <th width="17%">Jumlah Pelanggaran</th>
                            <th width="10%">Total Point</th>
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
                                <td width="3%" align="center"><?= $i++ ?></td>
                                <td> <?= $row['NIS'] ?></td>
                                <td> <?= $row['nama'] ?></td>
                                <td> <?= $row['JML'] ?></td>
                                <td>
                                <?php 
                                    $jml=$row['POINT'];
                                    if ($jml>100 && $jml<120) {
                                        echo '<span class="badge bg-yellow">'.$jml.'</span>';
                                    }elseif ($jml>120) {
                                        echo '<span class="badge bg-red">'.$jml.'</span>';
                                    }else{
                                        echo '<span class="badge bg-green">'.$jml.'</span>';
                                    }

                                ?>
                                </td>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('pelanggaransiswa/detail/' . $row['NIS'] . '', 'Detail', 'class="label label-info" title="Detail Pelanggaran Siswa"') ?>
                                        <?php
                                        foreach ($user_groups as $value) {
                                            if($value->name=="Guru_BK"){?>
                                            
                                        <?= anchor('pelanggaransiswa/add/' . $row['NIS'] . '', 'Tambah Point', 'class="label label-success" title="Tambah Point Pelanggaran Siswa"') ?>
                                        <?php }} ?>
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