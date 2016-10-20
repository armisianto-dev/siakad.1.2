<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h3 class="box-title">Detail Guru/Karyawan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="btn-group">
                  <a class="btn btn-default" href="<?= site_url('guru_karyawan/edit/'.$row['nip']) ?>"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</a>
                </div>
                <table class="table table-borderless" style="max-width:650px;margin:0 auto;border:2px solid #eee;">
                  
                  <tr>
                    <td width="140">NIP</td>
                    <td width="7">:</td>
                    <td width="150"><?=$row['nip']?></td>
                    <td width="123" rowspan="5">
                      <img class="foto_profil img-thumbnail center-block" src="<?php echo base_url(); ?>res/foto/guru/<?php echo $row['foto']; ?>"/>
                    </td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$row['nama']?></td>
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
                    <td>Agama</td>
                    <td>:</td>
                    <td><?=$row['agama']?></td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td><?=$row['KOTA']?>, <?=tgl_saja($row['TGL'])?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td colspan="2"><?=$row['alamat']?></td>
                  </tr>
                  <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td colspan="2"><?=$row['telp']?></td>
                  </tr>
                  <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td colspan="2"><?=$row['jabatan']?></td>
                  </tr>
                  <tr>
                    <td>Jenjang Pendidikan</td>
                    <td>:</td>
                    <td colspan="2"><?=$row['PEND']?></td>
                  </tr>
                  <tr>
                    <td>Riwayat Pendidikan</td>
                    <td>:</td>
                    <td colspan="2"><?=$row['RIWAYAT']?></td>
                  </tr>
                  
                </table>			
            </div>
            
        </div>                         
    </div>
</div>