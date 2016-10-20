<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Daftar Siswa Kelas</title>
    <link href="<?php echo base_url('themes/back/css/admin.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('themes/back/css/rai.css');?>" rel="stylesheet" type="text/css" />
    <style type="text/css" media="print">
        @page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: none;  /* this affects the margin in the printer settings */
        }

        body 
        {
            background-color:#FFFFFF;
            margin:;  /* the margin on the content before printing */
       }
       .tc{
            display: none;
       }
       tr{
            page-break-before: always;
       }
       
        .table.table-bordered.raport.raport-nilai tbody td{
            height:20px;
        }
        .table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th{
            background-color: #E5E4E4;
        }
        
    </style>
    <style type="text/css" media="screen">
        body{
            width: 50%;
            margin: 0 auto;
            background-color:#FFFFFF;
        }
        #tbl-catatan{
            margin-bottom:-1px;
        }
        .table.table-bordered.raport.raport-nilai tbody td{
            height:15px;
        }
        .table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th{
            background-color: #E5E4E4;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){$("table th, table td").wrapInner("<div></div>");});
    </script>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <div class="">
            
            <div class="box-body table-responsive" style="width:100%;">
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
            </table>
            <table class="table table-border" style="width:100%;margin-top:-10px;">
                <tr>
                    <td style="border-top:1px solid #000;border-bottom:2px solid #000"></td>
                </tr>
            </table>
            <table class="table table-borderless" style="width:50%;">
                    <tr>
                        <td width="10%">Kelas</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$kelas['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Wali Kelas</td>
                        <td>:</td>
                        <td>
                            <?php
                             if(!empty($walikelas)){
                                echo $walikelas['nama'];
                                }else{
                                    echo "Belum ada wali kelas";
                                }
                            ?>
                        </td>
                    </tr>
                   
                </table>
                <table id="tartikel" class="table table-bordered raport raport-nilai" >
                        <thead>
                            <tr>
                                <td  width="5%" align="center">No</td>
                                <td width="5%">NIS</td>
                                <td width="25%">Nama</td>
                                <td width="10%">Jenis Kelamin</td>
                                <td width="10%"></td>
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
                                <td> <?= $row['nis'] ?></td>
                                <td> <?= $row['nama'] ?></td>
                                <td>
                                <?php
                                    if ($row['jk']=="L") {
                                        echo "Laki-Laki";
                                    }else{
                                        echo "Perempuan";
                                    }
                                ?>
                                </td>
                                <td><?= $no ?>.</td>
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
            <div class="clearfix"></div>
             <div class="box-footer">
             <div style="text-align:center;" class="tc">[<a href="javascript:void()" onclick="print()">CETAK</a>]</div>
                </div>
            </div>
        </div><!-- /.box -->                            
    </div>
</div>
</body>
</html>
