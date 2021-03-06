<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:",
            "searching":false,
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
                <h3 class="box-title">Input Catatan Aspek</h3>
            </div>
            <div class="box-body table-responsive" style="width:100%;">
            <?=$notif;?>
            <?php
                $semester=$sem['value'];
             ?>
            <?= form_open('catatanaspek/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
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
               <!-- <pre><?=print_r($nilai)?></pre> -->
                <table id="tartikel" class="table table-bordered table-hover table-condensed rekap" style="width:130%">
                        <thead>
                            <tr>
                                <th  width="2%" align="center">No</th>
                                <th width="5%">NIS</th>
                                <th width="20%">Nama</th>
                                <th width="2%">L/P</th>
                                <th width="8%">Ujk. Kerja</th>
                                <th class="bg-gray">Max</th>
                                <th width="8%">Praktik</th>
                                <th class="bg-gray">Max</th>
                                <th width="8%">Portofilio</th>
                                <th class="bg-gray">Max</th>
                                <th width="8%">Proyek</th>
                                <th class="bg-gray">Max</th>
                                <th width="8%">Tulis</th>
                                <th class="bg-gray">Max</th>
                                <th width="5%">Rerata Max</th>
                                <th width="5%">Konversi</th>
                                <th width="25%">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                    <?php
                    if (!empty($nilai)) {
                        $i = 1;
                        foreach ($nilai as $key=>$row) {
                            ?>
                            <tr>
                                <?php $no=$i++; ?>
                                <td align="center"><?= $no ?></td>
                                <td> 
                                    <?= $row['nis'] ?>
                                    <input type="hidden" name="nis<?=$no?>" value="<?= $row['nis'] ?>">
                                </td>
                                <td> <?= $row['nama'] ?></td>
                                <td>
                                <?=$row['jk'];?>
                                </td>
                                <td>
                                    <?php 
                                        foreach ($row['uk'] as $key => $value) {
                                            echo $value['nilaiuk']." | ";
                                        }
                                    ?>
                                </td>
                                <td class="bg-gray"><?=$row['maxuk']?></td>
                                <td>
                                    <?php 
                                        foreach ($row['praktik'] as $key => $value) {
                                            echo $value['nilaipraktik']." | ";
                                        }
                                    ?>
                                </td>
                                <td class="bg-gray"><?=$row['maxprak']?></td>
                                <td>
                                    <?php 
                                        foreach ($row['portofolio'] as $key => $value) {
                                            echo $value['nilaipor']." | ";
                                        }
                                    ?>
                                </td>
                                <td class="bg-gray"><?=$row['maxpor']?></td>
                                <td>
                                    <?php 
                                        foreach ($row['proyek'] as $key => $value) {
                                            echo $value['nilaipry']." | ";
                                        }
                                    ?>
                                </td>
                                <td class="bg-gray"><?=$row['maxpry']?></td>
                                <td>
                                    <?php 
                                        foreach ($row['tulis'] as $key => $value) {
                                            echo $value['nilaitls']." | ";
                                        }
                                    ?>
                                </td>
                                <td class="bg-gray"><?=$row['maxtls']?></td>
                                <td><?=$row['avg']?></td>
                                <td>
                                    <ul class="nilai">
                                        <li><?=$row['angka']?></li>
                                        <li><?=$row['huruf']?></li>
                                    </ul>
                                </td>
                                <td>
                                    <textarea name="catatan<?=$no?>" class="form-control input-sm" rows="2"></textarea>
                                </td>
                            </tr>
                            <?php
                        }

                    } else {
                        ?>
                        <tr>
                            <td colspan="17" align="center">Belum Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>                            
                </table>
                <div class="box-footer" style="width:130%">
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat pull-right"><span class="ion-ios7-loop-strong"></span>Simpan</button>
                </div>
                <?php
                    $n=1;
                    foreach ($nilai as $row) {
                        $n++;
                    }
                ?>
                <input type="hidden" name="data" value="<?= $n ?>">
                <input type="hidden" name="mengajar" value="<?=$mengajar['ID'];?>">
                <input type="hidden" name="aspek" value="<?=$aspek['ID'];?>">
                <input type="hidden" name="sem" value="<?=$semester;?>">
            <?= form_close(); ?>
                
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
