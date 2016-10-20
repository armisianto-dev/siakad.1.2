    <!-- untuk navigasi header -->
    <div class="navbar navbar-inverse navbar-fixed-top shadow" role="navigation">
      <div class="atas-ijo">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="logo-utama">
                <a href="<?=site_url()?>"><img src="<?=base_url('themes/front/images/logo.png')?>"></a>
              </div>
              
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            
            <div class="navbar-header navbar-right">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#"></a> -->
            </div>
            <div class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="<?=site_url()?>">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <?php foreach ($menu_profil as $value) { ?>
                    <li><a href="<?php echo site_url('profil/'.$value->SLUG); ?>"><?php echo $value->JUDUL; ?></a></li>
                  <?php } ?>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Program Pendidikan <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <?php foreach ($menu_program as $value) { ?>
                    <li><a href="<?php echo site_url('program-pendidikan/'.$value->SLUG); ?>"><?php echo $value->JUDUL; ?></a></li>
                  <?php } ?>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lembaga Pendukung <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <?php foreach ($menu_lembaga as $value) { ?>
                    <li><a href="<?php echo site_url('lembaga/'.$value->SLUG); ?>"><?php echo $value->JUDUL; ?></a></li>
                  <?php } ?>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('berita/index'); ?>">Berita</a></li>
                <li><a href="<?php echo site_url('gallery/'); ?>">Gallery</a></li>
                <li><a href="<?php echo site_url('contact_us/'); ?>">Kontak</a></li>
              </ul>
            </div><!--/.nav-collapse -->
            
          </div>
        </div>
        
      </div>
    </div>
    <!-- end untuk navigasi header -->