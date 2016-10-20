    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php foreach ($slide_home as $key => $value): ?>
                        <?php
                        if ($key == 0 AND $key < 1) {
                            $ac = 'active';
                        } else {
                            $ac = '';
                        }
                        ?>
        <li data-target="#myCarousel" data-slide-to="<?= $key ;?>" class="<?= $ac;?>"></li>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner">
      <?php foreach ($slide_home as $key => $value): ?>
                        <?php
                        if ($key == 0 AND $key < 1) {
                            $ac = 'active';
                        } else {
                            $ac = '';
                        }
                        ?>
        <div class="item <?php echo $ac; ?>">
          <img src="<?php echo base_url(); ?>res/foto/slider/<?php echo $value->GAMBAR; ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $value->JUDUL; ?></h1>
              <p><?php echo substr($value->KET, 0, 150); ?>
              <br>
                <a style="margin-top: 10px;" class="btn btn-sm btn-primary" href="<?php echo $value->URL; ?>" role="button">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    <div class="clearfix"></div>
    </div><!-- /.carousel -->


    <!-- konten -->
    <div class="container margin-top-home">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <?=  $sambutan->VAL;?>
          <div class="clearfix"></div>
          </div>
          
          <div class="bgputih-noline"><!-- berita terbaru -->
            <div class="outer-judul-line-orange">
              <h1>Berita Terbaru</h1>
              <div class="clearfix"></div>
            </div>
            <div class="margin20">
              <div class="row">
              <?php foreach ($home_berita as $value) :; ?>
                <div class="col-sm-4 news">
                  <p class="img-news">
                    <img src="<?php echo base_url(); ?>res/foto/berita/<?php echo $value['GAMBAR']; ?>">">
                  </p>
                  <a href="<?php echo site_url();?>berita/<?php echo $value['SLUG']; ?>"><h1><?php echo $value['JUDUL']; ?></h1></a>
                  <p class="waktu-posting">
                    <span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo tgl($value['TANGGAL']); ?>
                  </p>
                  <p class="page-col">
                    <?php echo strip_tags(substr($value['ISI'], 0, 270)); ?> ...
                  </p>
                  <p class="text-right">
                    <a href="<?php echo site_url();?>berita/<?php echo $value['SLUG']; ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                  </p>
                </div>
              <?php endforeach; ?>
              </div><!-- /row -->
            <div class="clearfix"></div>
            </div>
          <div class="clearfix"></div>
          </div>

          <div class="bgputih-noline"><!-- lembaga kami -->
            <div class="outer-judul-line-ijo">
              <h1>Lembaga Kami</h1>
              <div class="clearfix"></div>
            </div>
            <div class="margin20">
              <div class="row">
                <div class="col-sm-1"></div>
                <?php if(!empty($home_saf)){ ?>
                <?php foreach ($home_saf as $value) { ?>
                    <div class="col-xs-6 col-sm-2">
                      <div class="outer-item">
                        <a href="<?php echo $value->URL;?>" target=_blank>
                          <p class="img-item2"><img src="<?php echo base_url(); ?>res/foto/link/<?= $value->GAMBAR ?>"></p>
                          <p class="nama-item"><?php echo $value->JUDUL;?></p>
                        </a>
                      </div>
                    </div>
                <?php }?>
                <?php }else{
                    echo "<h2>Belum Ada Link Dalam Kategori Ini</h2>";
                  } ?>
                <div class="col-sm-1"></div>
              </div>
            <div class="clearfix"></div>
            </div>
          <div class="clearfix"></div>
          </div>

          <div class="bgputih-noline"><!-- lembaga pendukung -->
            <div class="outer-judul-line-abu">
              <h1>Lembaga Pendukung</h1>
              <div class="clearfix"></div>
            </div>
            <div class="margin20">
              <div class="owl-carousel">
              <?php if(!empty($home_nonsaf)){ ?>
                <?php foreach ($home_nonsaf as $value) { ?>
                <div class="outer-item">
                  <a href="<?php echo $value->URL;?>" target=_blank>
                    <p class="img-item"><img src="<?php echo base_url(); ?>res/foto/link/<?= $value->GAMBAR ?>"></p>
                    <p class="nama-item"><?php echo $value->JUDUL;?></p>
                  </a>
                </div>
                <?php }?>
              <?php }else{
                    echo "<h2>Belum Ada Link Dalam Kategori Ini</h2>";
              } ?>  
              </div>


            <div class="clearfix"></div>
            </div>
          <div class="clearfix"></div>
          </div>

        </div>

      </div>
    <div class="clearfix"></div>
    </div>
    <!-- end konten -->
    