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
                <h3 class="box-title">Detail Nilai</h3>

              <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?=site_url('nilai/add/'.$mengajar['ID'].'')?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah Nilai</a>&nbsp;
              <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?=site_url('catatanaspek/add/'.$mengajar['ID'].'/1')?>"><span class="fa fa-plus-square"></span>&nbsp;Aspek Pengetahuan</a>
              <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?=site_url('catatanaspek/add/'.$mengajar['ID'].'/2')?>"><span class="fa fa-plus-square"></span>&nbsp;Aspek Ketrampilan</a>
              <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?=site_url('catatanaspek/add/'.$mengajar['ID'].'/3')?>"><span class="fa fa-plus-square"></span>&nbsp;Aspek Sikap</a>
            </div><!-- /.box-header -->
            <?= $notif; ?>
            <div class="box-body table-responsive" style="width:80%;">
               <table class="table table-borderless col-md-6" style="width:100%;">
                    <tr>
                        <td width="10%">Nama Guru</td>
                        <td width="2%">:</td>
                        <td width="70%"><?=$mengajar['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['mapel'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$mengajar['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['thn_ajaran'];?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$sem['value'];?></td>
                    </tr>
                    </table>
                <div class="clearfix"></div>
                <table id="tartikel" class="table table-bordered table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="20%">Sub Aspek</th>
                                <th width="10%">Aspek</th>
                                <th width="12%">Nilai Ke</th>
                                <th width="12%">Aksi</th>
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
                                <td><?= $row['sub_aspek'] ?></td>
                                <td><?= ucfirst($row['aspek']) ?></td>
                                <td><?=$row['ke']?></td>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('nilai/delete/' . $row['ID'] . '/'. $row['id_mengajar'] .'/'. $row['ke'] .'', 'Hapus', 'class="label label-danger" title="Hapus Nilai" onClick="return confirm(\'Yakin ingin menghapus nilai?\');"') ?>
                                        <?= anchor('nilai/edit/' . $row['ID'] . '/'. $row['id_mengajar'] .'/'. $row['ke'] .'', 'Edit', 'class="label label-info" title="Edit Nilai"') ?>
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
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-tambah').validate({ // initialize the plugin
        // other options
    });

    $("[name^=nilai]").each(function () {
        $(this).rules("add", {
            required: true,
            max: <?=$max?>,
            min: 0,
            checkValue: false,
            messages:{
                required:"Kolom Nilai tidak boleh kosong",
                min:"Nilai Maksimal <?=$max?> Minimal 0",
                max:"Nilai Maksimal <?=$max?> Minimal 0"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>