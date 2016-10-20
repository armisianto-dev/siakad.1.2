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
                <h3 class="box-title">Nilai Aspek Sikap</h3>
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
                <table id="tartikel" class="table table-bordered table-hover table-condensed rekap" style="width:120%">
                        <thead>
                            <tr>
                                <th  width="2%" align="center">No</th>
                                <th width="5%">NIS</th>
                                <th width="20%">Nama</th>
                                <th width="2%">L/P</th>
                                <th width="20%">Observasi Guru</th>
                                <th width="12%">Penilaian Diri</th>
                                <th width="8%">Penilaian Teman</th>
                                <th width="8%">Jurnal Guru</th>
                                <th width="8%">Nilai Modus</th>
                                <th width="5%">Konversi</th>
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
                                        foreach ($row['observasi'] as $key => $value) {
                                            echo $value['nilaiobservasi']." | ";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        foreach ($row['diri'] as $key => $value) {
                                            echo $value['nilaidiri']." | ";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        foreach ($row['teman'] as $key => $value) {
                                            echo $value['nilaiteman']." | ";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        foreach ($row['jurnal'] as $key => $value) {
                                            echo $value['nilaijurnal']." | ";
                                        }
                                    ?>
                                </td>
                                <td><?=$row['modus']?></td>
                                <td><?=$row['huruf']?></td>
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
                <div class="box-footer">
                </div>
                
        </div>                      
        </div>                      
    </div>
</div>

