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
                <h3 class="box-title">Catatan/Nilai Siswa Ekstrakulikuler</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:70%;">
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

                <?= form_open('catataneskul/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                
                <table id="tartikel" class="table table-border table-hover table-condensed" >
                        <thead>
                            <tr>
                                <th  width="5%" align="center">No</th>
                                <th width="6%">NIS</th>
                                <th width="40%">Nama</th>
                                <th width="15%">Nilai</th>
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
                                   <select name="nilai<?=$no?>">
                                        <option value="A">A</option> 
                                        <option value="B">B</option> 
                                        <option value="C">C</option> 
                                   </select>
                                   <input type="hidden" name="id<?= $no ?>" value="<?= $row['ID'] ?>">
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
                <div class="box-footer">
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat pull-right"><span class="ion-ios7-loop-strong"></span> Simpan</button>
                </div>
                <?php
                    $n=1;
                    foreach ($list as $row) {
                        $n++;
                    }
                ?>
                <input type="hidden" name="data" value="<?= $n ?>">
                <input type="hidden" name="sem" value="<?= $sem['value'] ?>">
                <input type="hidden" name="eskul" value="<?= $eskul['ID'] ?>">
            <?= form_close(); ?>
               
            </div>
        </div><!-- /.box -->                            
    </div>
</div>
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-tambah').validate({ // initialize the plugin
        // other options
    });

    $("[name^=catatan]").each(function () {
        $(this).rules("add", {
            maxlength: 160,
            checkValue: false,
            messages:{
                maxlength:"Maksimal 160 Karakter"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>
