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
                <span class="box-title">Pelanggaran</span>
                <?php
                foreach ($user_groups as $value) {
                    if($value->name=="Guru_BK"){?>
                <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('pelanggaran/add') ?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah</a>
                <?php }} ?>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:70%;">
                <?php echo $notif; ?>
               
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Pelanggaran</th>
                            <th>Point</th>
                            <?php
                            foreach ($user_groups as $value) {
                                if($value->name=="Guru_BK"){?>
                            <th width="120px">Aksi</th>
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
                                <td width="3%" align="center"><?= $i++ ?></td>
                                <td> <?= $row['NAMA'] ?></td>
                                <td> <?= $row['point'] ?></td>
                                <?php
                                foreach ($user_groups as $value) {
                                    if($value->name=="Guru_BK"){?>
                                <td>
                                    <span class="pull-right">
                                        <?php if($row['aktif']=="Y"){;?>
                                            <?= anchor('pelanggaran/deactivated/' . $row['ID'] . '', 'Non-Aktifkan', 'class="label label-danger" title="Non-Aktifkan Mata Pelajaran"') ?>
                                        <?php }else{; ?>
                                            <?= anchor('pelanggaran/activated/' . $row['ID'] . '', 'Aktifkan', 'class="label label-success" title="Aktifkan Mata Pelajaran"')?>
                                        <?php }; ?>
                                        <?= anchor('pelanggaran/edit/' . $row['ID'] . '', 'Edit', 'class="label label-warning" title="Edit Mata Pelajaran"') ?>
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