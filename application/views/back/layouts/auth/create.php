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

        <script src="<?php echo base_url('themes/general/js/jquery-2.1.3.min.js');?>"></script>
        <script src="<?php echo base_url('themes/back/js/validation/jquery.validate.min.js');?>"></script>
        <script src="<?php echo base_url('themes/back/js/validation/additional-methods.js');?>"></script>

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
            <?= form_open('register/save', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <div class="body bg-gray">
                    <div class="form-group">
                    <!-- notif -->
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control input-sm" id="password" name="password" type="password" placeholder="Password min 8 karakter">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input class="form-control input-sm" name="cpassword" type="password" placeholder="Masukkan ulang password">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control input-sm" name="email" type="text" placeholder="Isikan NIP/NIS anda">
                    </div>
                    <input type="hidden" name="id" value="<?=$username?>">
                    <input type="hidden" name="tbl" value="<?=$tbl?>">
                </div>
                <div class="footer">
                    <input type="submit" value="Kirim" class="btn btn-info btn-block btn-flat">
                </div>
            <?php echo form_close();?>
        </div>

        
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8
                },
                cpassword: {
                    required: true,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                password: {
                    required: "Kolom password harus diisi",
                    minlength: "Password minimal 8 karakter"
                },
                cpassword: {
                    required: "Kolom konfirmasi password harus diisi",
                    equalTo: "Konfiamsi password tidak cocok"
                },
                email: {
                    required: "Kolom email harus diisi",
                    email: "Format email salah/tidak valid"
                }
            }
        });
    });
</script>