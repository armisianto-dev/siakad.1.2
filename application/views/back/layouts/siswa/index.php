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
                <span class="box-title">Siswa</span>
                <?php
                foreach ($user_groups as $value) {
                    if($value->name=="admin"){?>
                    <?php
                        if ($status=="aktif") {
                            echo '<a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="'.site_url('siswa/add').'"><span class="fa fa-plus-square"></span>&nbsp;Tambah</a>';
                        }else{

                        }
                    ?>
                <?php }} ?>

            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $notif; ?>
               
                <table id="tartikel" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="80px">NIS</th>
                            <th width="120px">NISN</th>
                            <th>NAMA</th>
                            <th width="100px">Jenis Kelamin</th>
                            <th width="10px">Tingkat</th>
                            <?php
                            foreach ($user_groups as $value) {
                                if($value->name=="admin"){?>
                            <th width="250px">Aksi</th>
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
                                <td> <?= $row['nis'] ?></td>
                                <td> <?= $row['nisn'] ?></td>
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
                                <td> <?= $row['tingkat'] ?></td>
                                <?php
                                foreach ($user_groups as $value) {
                                    if($value->name=="admin"){?>
                                    <td>
                                        <span class="pull-right">
                                            <?php
                                            if ($status=="keluar") {
                                                    echo anchor('siswa/aktifkan/' . $row['nis'] . '', 'Aktifkan', 'class="label label-success" title="Masukkan Ke Siswa Aktif"').'&nbsp;';
                                                    echo anchor('siswa/ketKeluar/' . $row['nis'] . '', 'Detail Keluar', 'class="label label-danger" title="Tambah Keterangan Keluar"');
                                                } else {
                                                    echo anchor('siswa/ketKeluar/' . $row['nis'] . '', 'Keluar', 'class="label label-danger" title="Tambah Keterangan Keluar"');
                                                }
                                            ?>
                                           
                                            <?= anchor('siswa/detail/' . $row['nis'] . '', 'Detail', 'class="label label-info" title="Lihat detail Siswa"') ?>
                                            <?= anchor('siswa/edit/' . $row['nis'] . '', 'Edit', 'class="label label-warning" title="Edit Siswa"') ?>
                                        </span>
                                    </td>
                                <?php }} ?>
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
            <div class="box-footer clearfix">
                <!-- <?php echo $pagination; ?> -->
            </div>
        </div><!-- /.box -->                            
    </div>
</div>