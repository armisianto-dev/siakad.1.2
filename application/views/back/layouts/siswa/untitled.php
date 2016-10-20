<html>
<head>
  <link href="<?php echo base_url('themes/back/bundle/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/general/bundle/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/general/bundle/ionicons/css/ionicons.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/back/bundle/radiocheck/radiocheck.css');?>" rel="stylesheet"/>

  <link href="<?php echo base_url('themes/back/css/admin.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('themes/back/css/rai.css');?>" rel="stylesheet" type="text/css" />

</head>
<body style="background:#fff;">
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body" style="max-width:700px;margin:0 auto;">
                
                
                <table class="table table-borderless cetak">
                <tr>
                  <td colspan="4">
                      <h2>Data Siswa</h2> 
                  </td>
                </tr>  
                <tr>
                  <td width="149">NIS</td>
                  <td width="4">:</td>
                  <td width="300"><?= $row['NIS'] ?></td>
                  <td width="160" rowspan="6">
                    <img class="foto_profil img-thumbnail center-block" src="<?php echo base_url(); ?>res/foto/siswa/<?php echo $row['foto']; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td>NISN</td>
                  <td>:</td>
                  <td><?= $row['nisn'] ?></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?= $row['nama'] ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>
                    <?php
                      if ($row['jk']=="L") {
                          echo "Laki-Laki";
                      }else{
                          echo "Perempuan";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>TTL</td>
                  <td>:</td>
                  <td><?=$row['KOTA']?>, <?=tgl_saja($row['TGL'])?></td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td>:</td>
                  <td><?= $row['agama'] ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['alamat'] ?></td>
                </tr>
                <tr>
                  <td>Jumlah Saudara</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['JML'] ?></td>
                </tr>
                <tr>
                  <td>Anak Ke</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['KE'] ?></td>
                </tr>
                <tr>
                  <td>Status Anak</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($row['ANAK']); ?></td>
                </tr>
                <tr>
                  <td>Asal SD</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['SD'] ?></td>
                </tr>
                <tr>
                  <td>No STTB/Ijazah</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['no_sttb'] ?></td>
                </tr>
                <tr>
                  <td>Tahun STTB/Ijazah</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['tahun_sttb'] ?></td>
                </tr>
                <tr>
                  <td>Diterima Dikelas</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['kls_diterima'] ?></td>
                </tr>
                <tr>
                  <td>Tanggal Diterima</td>
                  <td>:</td>
                  <td colspan="2"><?= tgl($row['tgl_diterima']) ?></td>
                </tr>
                <tr>
                  <td>Tingkat</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['tingkat'] ?></td>
                </tr>
                <tr>
                  <td>Pindah Dari SMP Lain</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['pindahan']=="Y") {
                          echo "Ya";
                      }else{
                          echo "Tidak";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>- Asal SMP</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['pindahan']=="Y") {
                          echo $row['SMP'];
                      }else{
                          echo "-";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>- Keterangan Pindah</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['pindahan']=="Y") {
                          echo ucfirst($row['ALASAN']);
                      }else{
                          echo "-";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($row['status']); ?></td>
                </tr>
                <tr>
                  <td>- Status Keluar</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['status']=="keluar") {
                          if ($keluar['stts_keluar']=='keluar') {
                            echo "Mengundurkan Diri/Keluar";
                          }else{
                            echo "Dikeluarkan";
                          }
                      }else{
                          echo "-";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>- Tanggal Keluar</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['status']=="keluar") {
                          echo tgl($keluar['tgl_keluar']);
                      }else{
                          echo "-";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>- Keterangan Keluar</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php
                      if ($row['status']=="keluar") {
                          echo ucfirst($keluar['alasan']);
                      }else{
                          echo "-";
                      }
                    ?>
                  </td>
                </tr>
                <?php 
                  if($row['status']=="keluar"){
                    $style="display:none;";
                  }else{
                    $style="";
                  }
                ?>
                <tr style="<?= $style; ?>">
                  <td>Tahun Lulus</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['thn_lulus'] ?></td>
                </tr>
                <tr>
                  <td colspan="4">
                    <h2>Data Orang Tua</h2> 
                  </td>
                </tr>
                <tr>
                  <td>Nama Ayah</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['ayah']); ?></td>
                </tr>
                 <tr>
                  <td>Agama Ayah</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$ortu['agama_ayah']) {
                            continue;
                        }
                        echo $value['NAMA'];
                    } ?>
                  </td>
                </tr>
                 <tr>
                  <td>Pekerjaan Ayah</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['pekerjaan_ayah']); ?></td>
                </tr>
                 <tr>
                  <td>Alamat Ayah</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['alamat_ayah']); ?></td>
                </tr>
                 <tr>
                  <td>Telp Ayah</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['telp_ayah']); ?></td>
                </tr>
                <tr>
                  <td>Nama Ibu</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['ibu']); ?></td>
                </tr>
                 <tr>
                  <td>Agama Ibu</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$ortu['agama_ibu']) {
                            continue;
                        }
                        echo $value['NAMA'];
                    } ?>
                  </td>
                </tr>
                 <tr>
                  <td>Pekerjaan Ibu</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['pekerjaan_ibu']); ?></td>
                </tr>
                 <tr>
                  <td>Alamat Ibu</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['alamat_ibu']); ?></td>
                </tr>
                 <tr>
                  <td>Telp Ibu</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($ortu['telp_ibu']); ?></td>
                </tr>
                <tr>
                  <td colspan="4">
                    <h2>Data Wali Siswa</h2> 
                  </td>
                </tr>
                <tr>
                  <td>Status Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php 
                      if ($wali['status_wali']=="ol") {
                        echo "Orang Lain";
                      }else{
                        echo ucwords($wali['status_wali']);
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Nama Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($wali['wali']); ?></td>
                </tr>
                 <tr>
                  <td>Agama Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2">
                    <?php foreach ($list as $value) {
                        if ($value['ID']!=$wali['agama_wali']) {
                            continue;
                        }
                        echo $value['NAMA'];
                    } ?>
                  </td>
                </tr>
                 <tr>
                  <td>Pekerjaan Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($wali['pekerjaan_wali']); ?></td>
                </tr>
                 <tr>
                  <td>Alamat Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($wali['alamat_wali']); ?></td>
                </tr>
                 <tr>
                  <td>Telp Wali Siswa</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($wali['telp_wali']); ?></td>
                </tr>
                </table>
            </div>
            <div style="text-align:center;" class="tc">[<a href="javascript:void()" onclick="print()">CETAK</a>]</div>
        </div>                         
    </div>
</div>
</body>
</html>