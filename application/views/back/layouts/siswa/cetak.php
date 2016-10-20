<html>
<head>
  <link href="<?php echo base_url('themes/back/bundle/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/general/bundle/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/general/bundle/ionicons/css/ionicons.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('themes/back/bundle/radiocheck/radiocheck.css');?>" rel="stylesheet"/>

  <link href="<?php echo base_url('themes/back/css/admin.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('themes/back/css/rai.css');?>" rel="stylesheet" type="text/css" />
  <title>Halaman Depan Raport_<?= $row['NIS'] ?>_<?= $row['nama'] ?></title>

  <style type="text/css" media="print">
        .tc{
            display: none;
       }
    </style>
</head>
<body style="background:#fff;">
<div class="row">
    <div class="col-xs-12" style="padding:10px;">
              <table class="table table-borderless cetak data-siswa" style="max-width:700px;margin:0 auto;">
                <tr>
                  <td width="2%">1</td>
                  <td width="25%">Nama Peserta Didik</td>
                  <td width="1%">:</td>
                  <td width="45%"><?= $row['nama'] ?></td>
                </tr>
                <tr>
                  <td width="2%">2</td>
                  <td>Nomor Induk</td>
                  <td>:</td>
                  <td><?= $row['NIS'] ?></td>
                </tr>
                <tr>
                  <td width="2%">3</td>
                  <td>Tempat Tanggal Lahir</td>
                  <td>:</td>
                  <td><?=$row['KOTA']?>, <?=tgl_saja($row['TGL'])?></td>
                </tr>
                <tr>
                  <td width="2%">4</td>
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
                  <td width="2%">5</td>
                  <td>Agama</td>
                  <td>:</td>
                  <td><?= $row['agama'] ?></td>
                </tr>
                <tr>
                  <td width="2%">6</td>
                  <td>Status dalam keluarga</td>
                  <td>:</td>
                  <td colspan="2"><?= ucwords($row['ANAK']); ?></td>
                </tr>
                <tr>
                  <td width="2%">7</td>
                  <td>Anak Ke</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['KE'] ?></td>
                </tr>
                <tr>
                  <td width="2%">8</td>
                  <td>Alamat Peserta Didik</td>
                  <td>:</td>
                  <td><?= ucwords($wali['alamat_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%">9</td>
                  <td>Nomor Telepon</td>
                  <td>:</td>
                  <td><?= ucwords($wali['telp_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%">10</td>
                  <td>Sekolah Asal</td>
                  <td>:</td>
                  <td colspan="2"><?= $row['SD'] ?></td>
                </tr>
                <tr>
                  <td width="2%">11</td>
                  <td>Diterima di sekolah ini</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>a. Dikelas</td>
                  <td>:</td>
                  <td><?= $row['kls_diterima'] ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>b. Pada Tanggal</td>
                  <td>:</td>
                  <td><?= tgl_saja($row['tgl_diterima']) ?></td>
                </tr>
                <tr>
                  <td width="2%">12</td>
                  <td>Nama Orang Tua</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>a. Ayah</td>
                  <td>:</td>
                  <td><?= ucwords($ortu['ayah']); ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>b. Ibu</td>
                  <td>:</td>
                  <td><?= ucwords($ortu['ibu']); ?></td>
                </tr>
                <tr>
                  <td width="2%">13</td>
                  <td>Alamat Orang Tua</td>
                  <td>:</td>
                  <td><?= ucwords($wali['alamat_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%">14</td>
                  <td>Pekerjaan Orang Tua</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>a. Ayah</td>
                  <td>:</td>
                  <td><?= ucwords($ortu['pekerjaan_ayah']); ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>b. Ibu</td>
                  <td>:</td>
                  <td><?= ucwords($ortu['pekerjaan_ibu']); ?></td>
                </tr>
                <tr>
                  <td width="2%">15</td>
                  <td>Nama Wali Siswa</td>
                  <td>:</td>
                  <td><?= ucwords($wali['wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>Alamat Wali Siswa</td>
                  <td>:</td>
                  <td><?= ucwords($wali['alamat_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td>Nomor Telepon</td>
                  <td>:</td>
                  <td><?= ucwords($wali['telp_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%">16</td>
                  <td>Pekerjaan Wali Siswa</td>
                  <td>:</td>
                  <td><?= ucwords($wali['pekerjaan_wali']); ?></td>
                </tr>
                <tr>
                  <td width="2%"></td>
                  <td style="vertical-align:top;padding-top:30px;">
                    <img class="img-thumbnail center-block" style="width:120px;height:140px;float:right;" src="<?php echo base_url(); ?>res/foto/siswa/<?php echo $row['foto']; ?>"/>
                  </td>
                  <td></td>
                  <td style="vertical-align:top;padding-top:30px;text-align:center;">
                    <p>Bantul, <?=tgl_saja($date);?><br/>
                    Kepala Sekolah<br/><br/><br/><br/><br/><br/><?=$kepsek['nama'];?><br/>
                    NIP. <?=$kepsek['nip']?>
                    </p>
                  </td>
                </tr>

              </table>
            <div style="text-align:center;" class="tc">[<a href="javascript:void()" onclick="print()">CETAK</a>]</div>                       
    </div>
</div>
</body>
</html>