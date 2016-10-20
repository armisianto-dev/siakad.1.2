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
                <h3 class="box-title">Detail Catatan Aspek</h3>
            </div>
            <div class="box-body table-responsive" style="width:100%;">
            <?=$notif;?>
                <table class="table table-borderless" style="width:50%;">
                    <tr>
                        <td width="10%">Nama Guru</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$mengajar['nama'];?></td>
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
                    <tr>
                        <td>Aspek</td>
                        <td>:</td>
                        <td><?=ucfirst($aspek['aspek']);?></td>
                    </tr>
                </table>                        
               <div class="clearfix"></div>
                <table id="tartikel" class="table table-bordered table-hover table-condensed rekap" >
                        <thead>
                            <tr>
                                <th  width="2%" align="center">No</th>
                                <th width="5%">NIS</th>
                                <th width="25%">Nama</th>
                                <th width="2%">L/P</th>
                                <th>Ulangan</th>
                                <th width="4%">Rata-rata</th>
                                <th>Tugas</th>
                                <th width="4%">Rata-rata</th>
                                <th width="4%">NH</th>
                                <th width="4%">UTS</th>
                                <th width="4%">UAS</th>
                                <th width="4%">Nilai Akhir</th>
                                <th width="5%">Konversi</th>
                                <th width="4%">Catatan</th>
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
                                <td> 
                                    <?= $row['NIS'] ?>
                                    <input type="hidden" name="nis<?=$no?>" value="<?= $row['NIS'] ?>">
                                </td>
                                <td> <?= $row['nama'] ?></td>
                                <td>
                                <?=$row['jk'];?>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                <div class="box-footer">
                </div>
                
        </div>                      
        </div>                      
    </div>
</div>
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-tambah').validate({ // initialize the plugin
        // other options
    });

    $("[name^=catatan]").each(function () {
        $(this).rules("add", {
            required: true,
            maxlength:160,
            checkValue: false,
            messages:{
                required:"Kolom Nilai tidak boleh kosong",
                maxlength:"Karakter maksimal 160"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>
