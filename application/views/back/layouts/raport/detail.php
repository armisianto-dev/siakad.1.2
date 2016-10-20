
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Raport Siswa</h3>
                <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('raport/cetak/'.$siswa['NIS'].'/'.$sem.'/'.$tahun.'') ?>"><span class="glyphicon glyphicon-print"></span>&nbsp;Cetak</a>&nbsp;&nbsp;
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="width:80%;">
            <?=$notif;?>
            <!-- CAPAIAN KOMPETENSI 
            <table class="table table-borderless raport raport-heading profil" style="width:100%;">
                <tr>
                    <td width="3%"></td>
                    <td width="12%">
                        <img style="width:80%" src="<?php echo base_url('themes/back/img/bantul.jpg');?>">
                    </td>
                    <td width="70%">
                        <h5>KABUPATEN <?=strtoupper($profil['kabupaten'])?></h5>
                        <h6>DINAS PENDIDIKAN</h6>
                        <h5><?=$profil['nama']?></h5>
                        <span><?=$profil['alamat']?>,<?=$profil['kelurahan']?>,<?=$profil['kecamatan']?>,<?=$profil['kabupaten']?>,<?=$profil['provinsi']?></span></br>
                        <span>Kode Pos : <?=$profil['kode_pos']?>&nbsp;&nbsp;&nbsp;&nbsp;Telp : <?=$profil['telp']?></span></br>
                        <span>Website : http://<?=$profil['website']?>&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : <?=$profil['email']?></span></br>
                    </td>
                    <td width="12%">
                        <img style="width:90%" src="<?php echo base_url('themes/back/img/logo_1.jpg');?>">
                    </td>
                    <td width="3%"></td>
                </tr>
                <tr style="border-top:2px solid #000;">
                    <td colspan="5"></td>
                </tr>
            </table>-->
            <table class="table table-borderless raport raport-heading" style="width:100%;">
                
                <tr>
                    <td width="15%">Nama Sekolah</td>
                    <td width="2%">:</td>
                    <td width="55%"><?=$profil['nama'];?></td>
                    <td width="15%">Kelas</td>
                    <td width="2%">:</td>
                    <td width="15%"><?=$siswa['kelas'];?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$profil['alamat'];?></td>
                    <td>Semester</td>
                    <td>:</td>
                    <td><?=ucfirst($semester)?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$siswa['nama'];?></td>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td><?=$ta['thn_ajaran'];?></td>
                </tr>
                <tr>
                    <td>NIS/NISN</td>
                    <td>:</td>
                    <td><?=$siswa['NIS']."/".$siswa['nisn'];?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="6" style="font-size:14px;"><b>CAPAIAN</b></td>
                </tr>

            </table>
            <table class="table table-bordered raport raport-heading" style="width:100%;">
                    <thead>
                        <tr>
                            <th width="22%" colspan="2" rowspan="2" align="center">MATA PELAJARAN</th>
                            <th width="6%" colspan="2" align="center">Pengetahuan</th>
                            <th width="6%" colspan="2" align="center">Ketrampilan</th>
                            <th width="23%" colspan="2" align="center">Sikap Spiritual dan Sosial</th>
                        </tr>
                        <tr>
                            <th width="3%" align="center">Angka</th>
                            <th width="3%" align="center">Huruf</th>
                            <th width="3%" align="center">Angka</th>
                            <th width="3%" align="center">Huruf</th>
                            <th width="6%" align="center">Dalam Mapel</th>
                            <th width="17%" align="center">Antar Mapel</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $a=count($arrA);
                    $b=count($arrB);
                    $rowspan=$a+$b+2;
                    ?>
                    <tr>
                        <td colspan="7"><b>Kelompok A</b></td>
                        <td rowspan="<?=$rowspan;?>" style="text-align:justify;vertical-align:top;">
                        <?php
                            if (!empty($raport)) {
                                echo $raport['catatan'];
                            }else{
                                echo 'Kesimpulan Sikap dari keseluruhan mapel belum dibuat!!!</br>';
                                echo '<a href="'.site_url('raport/add/'.$siswa['NIS'].'/'.$sem.'/'.$tahun.'').'">Klik Untuk Menambah</a>';
                            }
                        ?>
                        </td>
                    </tr>
                    <?php
                    $noA=0;
                    foreach ($arrA as $key => $value) {
                        $noA=$noA+1;
                        echo "<tr>";
                            echo'<td align="center">';
                            echo $noA;
                            echo"</td>";
                            echo"<td>";
                            echo '<b>'.$value['mapel'].'</b></br> Nama Guru : '.$value['guru'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['pengetahuana'];
                            echo"</td>";
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['pengetahuan'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['ketrampilana'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['ketrampilan'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['sikap'];
                            echo"</td>";
                        echo "</tr>";
                    };

                    ?>
                    <tr>
                        <td colspan="7" align='left'><b>Kelompok B</b></td>
                    </tr>
                    <?php
                    $noB=0;
                    foreach ($arrB as $key => $value) {
                        $noB=$noB+1;
                        echo "<tr>";
                            echo'<td align="center">';
                            echo $noB;
                            echo"</td>";
                            echo"<td>";
                            echo '<b>'.$value['mapel'].'</b></br> Nama Guru : '.$value['guru'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['pengetahuana'];
                            echo"</td>";
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['pengetahuan'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['ketrampilana'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['ketrampilan'];
                            echo"</td>";
                            echo'<td align="center">';
                            echo $value['sikap'];
                            echo"</td>";
                        echo "</tr>";
                    };
                    ?>
                    </tbody>
            </table>
            <table class="table table-bordered raport" style="width:100%;margin-top:20px;">
            <tr>
                <th width="5%">No</th>
                <th width="30.5%">Ekstrakurikuler</th>
                <th width="5%">Nilai</th>
                <th width="50%">Keterangan</th>
            </tr>
            <?php
            $no=1;
            foreach ($eskul as $value) {?>
            <tr>
                <td align="center"><?=$no?></td>
                <td><?=$value['nama']?></td>
                <td><?=$value['nilai']?></td>
                <td>
                <?php
                if($value['nilai']=="A"){
                    echo "Sangat Memuaskan";
                }elseif ($value['nilai']=="B") {
                    echo "Memuaskan";
                }else{
                    echo "Cukup";
                }
                ?>
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
            
            </table>
            <table class="table table-bordered raport" style="width:100%;margin-top:5px;">
            <tr>
                <th colspan="2">Ketidakhadiran</th>
                <th width="40%" style="border-color:#fff;"></th>
                <th style="text-align:left;border-color:#fff;">
                    <?php
                            if (!empty($raport)) {
                                echo 'Bantul, '.tgl_saja($raport['tgl']);
                            }else{
                                echo '-';
                            }
                        ?>
                </th>
            </tr>
            <tr>
                <td width="17%">Sakit</td>
                <td width="21%">
                <?php 
                $status=$sakit['jml'];
                if ($status==0) {
                    echo "0";
                }else{
                    echo $status;
                }
                ?>
                </td>
                <td style="padding-left:50px;border-color:#fff;">Mengetahui:<br/>Orang Tua/Wali</td>
                <td style="border-color:#fff;"><br/>Wali Kelas</td>
            </tr>
            <tr>
                <td>Ijin</td>
                <td>
                <?php 
                $status=$ijin['jml'];
                if (is_null($status)) {
                    echo "0";
                }else{
                    echo $status;
                }
                ?>
                </td>
                <td style="padding-left:50px;border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
            </tr>
            <tr>
                <td>Tanpa Keterangan</td>
                <td>
                <?php 
                $status=$alpha['jml'];
                if (is_null($status)) {
                    echo "0";
                }else{
                    echo $status;
                }
                ?>
                </td>
                <td style="border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
            </tr>
            <tr style="border-color:#fff;height:30px;">
                <td style="border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
            </tr>
             <tr>
                <td style="border-color:#fff;"></td>
                <td style="border-color:#fff;"></td>
                <td style="padding-left:50px;border-color:#fff;">__________________</td>
                <td style="border-color:#fff;">
                    <?=$wali['nama']?></br>
                NIP <?=$wali['nip']?>
                </td>
            </tr>

            </table>
            <hr style="border-color:#000;">
            </div>
            <div class="box-body table-responsive" style="width:80%;">
            <!-- URAIAN KOMPETENSI 
            <table class="table table-borderless raport raport-heading profil" style="width:100%;">
                <tr>
                    <td width="3%"></td>
                    <td width="12%">
                        <img style="width:80%" src="<?php echo base_url('themes/back/img/bantul.jpg');?>">
                    </td>
                    <td width="70%">
                        <h5>KABUPATEN <?=strtoupper($profil['kabupaten'])?></h5>
                        <h6>DINAS PENDIDIKAN</h6>
                        <h5><?=$profil['nama']?></h5>
                        <span><?=$profil['alamat']?>,<?=$profil['kelurahan']?>,<?=$profil['kecamatan']?>,<?=$profil['kabupaten']?>,<?=$profil['provinsi']?></span></br>
                        <span>Kode Pos : <?=$profil['kode_pos']?>&nbsp;&nbsp;&nbsp;&nbsp;Telp : <?=$profil['telp']?></span></br>
                        <span>Website : http://<?=$profil['website']?>&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : <?=$profil['email']?></span></br>
                    </td>
                    <td width="12%">
                        <img style="width:90%" src="<?php echo base_url('themes/back/img/logo_1.jpg');?>">
                    </td>
                    <td width="3%"></td>
                </tr>
                <tr style="border-top:2px solid #000;">
                    <td colspan="5"></td>
                </tr>
            </table>-->
            <table class="table table-borderless raport raport-heading" style="width:100%;margin-top:5px;">
               
                <tr>
                    <td width="15%">Nama Sekolah</td>
                    <td width="2%">:</td>
                    <td width="55%"><?=$profil['nama'];?></td>
                    <td width="15%">Kelas</td>
                    <td width="2%">:</td>
                    <td width="15%"><?=$siswa['kelas'];?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$profil['alamat'];?></td>
                    <td>Semester</td>
                    <td>:</td>
                    <td><?=ucfirst($semester)?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$siswa['nama'];?></td>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td><?=$ta['thn_ajaran'];?></td>
                </tr>
                <tr>
                    <td>NIS/NISN</td>
                    <td>:</td>
                    <td><?=$siswa['NIS']."/".$siswa['nisn'];?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="6" style="font-size:14px;"><b>DISKRIPSI</b></td>
                </tr>

            </table>
            <table class="table table-bordered raport raport-heading uraian" style="width:100%;margin-top:5px;">
                <tr>
                    <th width="35%" colspan="2">MATA PELAJARAN</th>
                    <th width="20%">KOMPETENSI</th>
                    <th width="55%">CATATAN</th>
                </tr>
                <tr>
                    <td colspan="4"><b>Kelompok A</b></td>
                </tr>
                <!-- Perulangan -->
                <?php
                    $no=1;
                    foreach($catatanA as $value){
                ?>
                <tr>
                    <td width="5%" rowspan="3" style="text-align:center;"><?=$no;?></td>
                    <td width="18%" rowspan="3"><b><?=$value['mapel'];?></b></td>
                    <td width="22%">Pengetahuan</td>
                    <td width="55%" style="text-align:justify;"><?=$value['pengetahuan'];?></td>
                </tr>
                <tr>
                    <td width="22%">Ketrampilan</td>
                    <td width="55%" style="text-align:justify;"><?=$value['ketrampilan'];?></td>
                </tr>
                <tr>
                    <td width="22%">Sikap Spiritual dan Sosial</td>
                    <td width="55%" style="text-align:justify;"><?=$value['sikap'];?></td>
                </tr>
                <?php
                    $no++;
                }
                ?>
                <!--Akhir Perulangan -->
                <tr>
                    <td colspan="4"><b>Kelompok B</b></td>
                </tr>
                <!-- Perulangan -->
                <?php
                    $no=1;
                    foreach($catatanB as $value){
                ?>
                <tr>
                    <td width="5%" rowspan="3" style="text-align:center;"><?=$no;?></td>
                    <td width="18%" rowspan="3"><b><?=$value['mapel'];?></b></td>
                    <td width="22%">Pengetahuan</td>
                    <td width="55%" style="text-align:justify;"><?=$value['pengetahuan'];?></td>
                </tr>
                <tr>
                    <td width="22%">Ketrampilan</td>
                    <td width="55%" style="text-align:justify;"><?=$value['ketrampilan'];?></td>
                </tr>
                <tr>
                    <td width="22%">Sikap Spiritual dan Sosial</td>
                    <td width="55%" style="text-align:justify;"><?=$value['sikap'];?></td>
                </tr>
                <?php
                    $no++;
                }
                ?>
                <!--Akhir Perulangan -->
            </table>
            <?php
                if ($sem==2) {
            ?>
            <table class="table table-borderless raport raport-heading pull-right" style="width:80%;margin-top:5px;margin-left:100px;">
                <tr>
                    <td width="60%" style="vertical-align:bottom;">Orang Tua/Wali</td>
                    <td style="vertical-align:top;border:1px solid #000" rowspan="5">
                    <b>Keputusan :</b></br>
                    Berdasarkan hasil yang dicapai pada Semester 1 dan 2, peserta didik ditetapkan</br>
                    <?php
                            $naiktingkat=$siswa['tingkat']+1;
                            if (!empty($raport)&&$raport['keputusan']=="naik") {
                                echo  '<b>Naik ke kelas '.$naiktingkat.' ('.kelas($naiktingkat).')</br></b>';
                            }elseif(!empty($raport)&&$raport['keputusan']=="tinggal"&&$siswa['tingkat']!="9"){
                                echo  '<b>Tinggal di kelas '.$siswa['tingkat'].' ('.kelas($siswa['tingkat']).')</br></b>';
                            }elseif(!empty($raport)&&$raport['keputusan']=="lulus"){
                                echo  '<b>LULUS</b></br>';
                            }elseif(!empty($raport)&&$raport['keputusan']=="tinggal"&&$siswa['tingkat']=="9"){
                                echo  '<b>TIDAK LULUS</b></br>';
                            }else{
                                echo '-';
                            }
                        ?>
                    </br>
                    <center>
                        <?php
                            if (!empty($raport)) {
                                echo 'Bantul, '.tgl_saja($raport['tgl']);
                            }else{
                                echo '-';
                            }
                        ?>
                    </center>
                    <center>Kepala SMP Negeri 1 Kasihan</center>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    <center>
                        <?php
                            if (!empty($raport)) {
                                echo $raport['kepsek'];
                            }else{
                                echo '-';
                            }
                        ?>
                    </center>
                    <center>
                        <?php
                            if (!empty($raport)) {
                                echo 'NIP.'.$raport['nip'];
                            }else{
                                echo '-';
                            }
                        ?>
                    </center>
                    </td>
                </tr>
                <tr style="border-color:#fff;height:50px;">
                    <td ></td>
                    <td></td>
                </tr>
                <tr>
                    <td>________________</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>

            </table>
            <?php
                }else{
            ?>
            <table class="table table-borderless raport raport-heading pull-right" style="width:80%;margin-top:5px;margin-left:100px;">
                <tr>
                    <td width="70%" style="vertical-align:bottom;">Orang Tua/Wali</td>
                    <td style="vertical-align:bottom;">
                        <?php
                            if (!empty($raport)) {
                                echo 'Bantul, '.tgl_saja($raport['tgl']);
                            }else{
                                echo '-';
                            }
                        ?>
                        </br>
                        Wali Kelas
                    </td>
                </tr>
                <tr style="border-color:#fff;height:50px;">
                    <td ></td>
                    <td></td>
                </tr>
                <tr>
                    <td>________________</td>
                    <td>
                        <?=$wali['nama']?></br>
                        <?=$wali['nip']?>
                    </td>
                </tr>

            </table>
            <?php
                }
            ?>
             <div class="box-footer">
                </div>
            </div>
        </div><!-- /.box -->                            
    </div>
</div>

