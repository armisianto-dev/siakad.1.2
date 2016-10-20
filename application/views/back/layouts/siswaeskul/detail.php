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
                <h3 class="box-title">Detail Siswa Ekstrakulikuler</h3>
                <?php
                foreach ($user_groups as $value) {
                    if($value->name=="admin"){?>
                <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('siswaeskul/add/'.$eskul['ID']) ?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah Siswa</a>
                <?php }} ?>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:80%;">
                <table class="table table-borderless" style="width:100%;">
                    <tr>
                        <td width="20%">Nama Ekstrakulikuler</td>
                        <td width="2%">:</td>
                        <td width="25%"><?=$eskul['ESKUL'];?></td>
                        <td width="150px" rowspan="2">
                               <h3 class="pull-right btn btn-info btn-flat btn-lg" style="margin-top:0">Jumlah Siswa : <span class="badge  total"><?=$eskul['JML'];?></span></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Guru/Pembimbing</td>
                        <td>:</td>
                        <td><?=$eskul['NAMA'];?></td>
                    </tr>
                   
                </table>
                <table id="tartikel" class="table table-bordered table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="10%">NIS</th>
                                <th width="45%">Nama</th>
                                <th width="12%">Jenis Kelamin</th>
                                <?php
                                foreach ($user_groups as $value) {
                                    if($value->name=="admin"){?>
                                <th width="12%">Aksi</th>
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
                                <?php
                                foreach ($user_groups as $value) {
                                    if($value->name=="admin"){?>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('siswaeskul/delete/' . $row['ID'] . '', 'Hapus', 'class="label label-danger" title="Hapus Siswa" onClick="return confirm(\'Yakin ingin menghapus siswa?\');"') ?>
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
        </div><!-- /.box -->                            
    </div>
</div>

