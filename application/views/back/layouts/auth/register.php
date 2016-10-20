<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <title><?= $primary_title?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Halaman Login"/>
        
        <link href="<?php echo base_url('themes/back/bundle/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('themes/general/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url('themes/back/css/admin.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('themes/back/css/rai.css');?>" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url('themes/back/bundle/ie/html5shiv.js');?>"></script>
          <script src="<?php echo base_url('themes/back/bundle/ie/respond.min.js');?>"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url('themes/back/img/user.png');?>"/>
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header bg-light-blue"><?=$primary_title?></div>
            <?php echo form_open("register/create", array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data'));?>
                <div class="body bg-gray">
                    <div class="form-group">
                    <!-- notif -->
                        <?php echo $notif;?>
                    </div>
                    <div class="form-group">
                        <label>NIP/NIS</label>
                        <input class="form-control input-sm" name="nipnis" type="text" placeholder="Isikan NIP/NIS anda">
                    </div>
                    <div class="form-group">
                        <label>Pengguna</label>
                        <div class="clearfix"></div>
                         &nbsp;&nbsp;<input type="radio" name="posisi" value="guru" checked="">Guru/Karyawan
                         &nbsp;&nbsp;<input type="radio" name="posisi" value="siswa">Siswa</br>
                    </div>
                    <div class="form-group">
                        <label>Security Code</label>
                        <div class="clearfix"></div>
                        <?=$cap_img;?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="kode_captcha" class="form-control input-sm" placeholder="Isikan Security Code">
                    </div>
                </div>
                <div class="footer">
                    <input type="submit" value="Kirim" class="btn btn-info btn-block btn-flat">
                </div>
            <?php echo form_close();?>
        </div>

        <script src="<?php echo base_url('themes/back/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('themes/back/bundle/bootstrap/bootstrap.min.js');?>"></script>

    </body>
</html>