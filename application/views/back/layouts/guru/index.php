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
            "info": "Halaman _PAGE_ dari _PAGES_ | Total data _MAX_",
            "infoEmpty": "Tidak menemukan data",
            "infoFiltered": "(hasil pencarian dari _MAX_ data)",
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
                <span class="box-title">Guru & Karyawan</span>
                <?php
                foreach ($user_groups as $value) {
                    if($value->name=="admin"){?>
                    <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('guru_karyawan/add') ?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah</a>
                <?php }} ?>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $notif; ?>
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <?php
                            foreach ($user_groups as $value) {
                                if($value->name=="admin"){?>
                            <th width="150px">Aksi</th>
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
                                <td> <?= $row['NIP'] ?></td>
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
                                <td> <?= $row['jabatan'] ?></td>
                                <?php
                                foreach ($user_groups as $value) {
                                    if($value->name=="admin"){?>
                                    <td>
                                        <span class="pull-right">
                                        <?php if($row['aktif']=="Y"){;?>
                                            <?= anchor('guru_karyawan/deactivated/' . $row['NIP'] . '', 'Non-Aktifkan', 'class="label label-danger" title="Non-Aktifkan Guru/Karyawan"') ?>
                                        <?php }else{; ?>
                                            <?= anchor('guru_karyawan/activated/' . $row['NIP'] . '', 'Aktifkan', 'class="label label-success" title="Aktifkan Guru/Karyawan"')?>
                                        <?php }; ?>
                                            <?= anchor('guru_karyawan/detail/' . $row['NIP'] . '', 'Detail', 'class="label label-info" title="Lihat detail Guru/Karyawan"') ?>
                                            <?= anchor('guru_karyawan/edit/' . $row['NIP'] . '', 'Edit', 'class="label label-warning" title="Edit Guru/Karyawan"') ?>
                                        </span>
                                    </td>
                                <?php }} ?>
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