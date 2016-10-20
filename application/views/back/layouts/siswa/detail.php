<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header ">
          <h3 class="box-title">Profil Siswa</h3>
          <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('siswa/cetak/'.$row['NIS']) ?>"><span class="glyphicon glyphicon-print"></span>&nbsp;Cetak Data Siswa</a>&nbsp;&nbsp;
          <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?= site_url('siswa/edit/'.$row['NIS']) ?>"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</a>
        </div><!-- /.box-header -->
      </div>
       <!-- profil singkat -->
        <div class="col-xs-6">
          <table class="table table-border profil-atas">
            <tr>
              <td width="25%" rowspan="5">
                <img class="img-thumbnail center-block" style="width:120px;height:auto;" src="<?php echo base_url(); ?>res/foto/siswa/<?php echo $row['foto']; ?>"/>
              </td>
              <td width="70%">
                <?= $row['NIS'] ?> / <?= $row['nisn'] ?>
              </td>
            </tr>
            <tr>
              <td>
                <?= $row['nama'] ?></br></td>
            </tr>
            <tr>
              <td>
                <?=$row['KOTA']?>, <?=tgl_saja($row['TGL'])?></td>
            </tr>
            <tr>
              <td>
                <?php
                  if ($row['jk']=="L") {
                    echo "Laki-Laki";
                  }else{
                    echo "Perempuan";
                  }
                ?></br>
              </td>
            </tr>
            <tr>
              <td>
                <?= $row['agama'] ?></br></td>
            </tr>

          </table>
        </div>
        <div class="col-xs-6">
            <a href="<?= site_url('pelanggaransiswa/detail/'.$row['NIS'].'')?>" class="btn btn-lg btn-app bg-white" style="width:25%;color:#f56954;font-size:14px;">
              <span class="badge bg-red" style="font-size:14px;">
                <?php if(!empty($point['POINT'])){
                      echo $point['POINT'];
                  }else{
                      echo "0";
                    }?>
              </span>
              <i class="fa fa-warning"></i>Point Pelanggaran
            </a>

            <a href="<?= site_url('presensi/detail/'.$row['NIS'].'')?>" class="btn btn-lg btn-app bg-white" style="width:25%;color:#00A2E9;font-size:14px;">
              <span class="badge bg-light-blue" style="font-size:14px;"><?=$absen['JML']?></span>
              <i class="fa fa-check-square"></i>Ketidakhadiran
            </a>
        </div>
    </div>
    <!-- biodata siswa -->
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header ">
                <h3 class="box-title">Biodata Siswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="">
               <table class="table table-borderless profil">
                  <tr>
                    <td width="15%">NIS</td>
                    <td width="2%">:</td>
                    <td width="45%"><?= $row['NIS'] ?></td>
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
               </table>
            </div>
        </div>                         
    </div>
    
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header ">
                <h3 class="box-title">Data Orang Tua Siswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="">
                <table class="table table-borderless profil">
                    <tr>
                      <td width="15%">Nama Ayah</td>
                      <td width="2%">:</td>
                      <td width="45%"><?= ucwords($ortu['ayah']); ?></td>
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
                </table>
            </div>
        </div>                         
    </div>
    <!-- biodata wali siswa -->
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Wali Siswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="">
                <table class="table table-borderless profil">
                    <tr>
                      <td width="15%">Status Wali Siswa</td>
                      <td width="2%">:</td>
                      <td width="45%" colspan="2">
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
        </div>                         
    </div>
    <!-- riwayat kelas -->
    <?php 
    if (!$this->ion_auth->logged_in()){
        $user ='';
        $user_groups='';
    }else{
        $users = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($users->id)->result();
        foreach ($user_groups as $value) {
    if ($value->name=="siswa" || $value->name=="admin") {?>
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Riwayat Kelas</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="">
                <table class="table table-border">
                  <tr>
                    <td width="10%">Kelas</td>
                    <td width="12%">Tahun Ajaran</td>
                    <td width="20%">Raport</td>
                  </tr>
                  <?php
                  if (!empty($kelas)) {
                    foreach ($kelas as $row) {
                  ?>
                  <tr>
                    <td><?=$row['kelas']?></td>
                    <td><?=$row['tahun']?></td>
                    <td>
                      <span class="pull-left">
                              <?= anchor('siswa/cetakraport/' . $row['NIS'] . '/1/'.$row['thn'].'', 'Semester 1', 'class="label label-info" title="Raport semester 1"') ?>
                              <?= anchor('siswa/cetakraport/' . $row['NIS'] . '/2/'.$row['thn'].'', 'Semester 2', 'class="label label-info" title="Raport semester 2"') ?>
                      </span>
                    </td>
                  </tr>
                  <?php
                      }
                    }else {
                        ?>
                        <tr>
                            <td colspan="3" align="center">Belum Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php }else{
      echo "";
    }
    }
    } ?>
</div>