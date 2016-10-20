    <div class="container margin-top-single">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <div class="row">
            <div class="col-md-9">
            <?php foreach ($list as $value) { ;?>
              <div class="outer-blog">
                <h2><a href="<?php echo site_url();?>berita/<?php echo $value['SLUG']; ?>"><?php echo $value['JUDUL']; ?></a></h2>
                <p class="wkt-post"><span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo tgl($value['TANGGAL']); ?>
                &nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span>&nbsp;<?php echo $value['JML']; ?>&nbsp;Komentar
                <p>
                  <img src="<?php echo base_url(); ?>res/foto/berita/<?php echo $value['GAMBAR']; ?>">
                </p>
                <p>
                  <?php echo strip_tags(substr($value['ISI'], 0, 300)); ?> ...
                </p>
                <p class="pull-right">
                  <a href="<?php echo site_url();?>berita/<?php echo $value['SLUG']; ?>" class="btn btn-sm btn-primary">Selengakapnya</a>
                </p>
              <div class="clearfix"></div>
              </div>
            <?php } ?>
            <?php echo $pagination; ?>
            </div>
            
            <!-- sidebar -->
            <?php
            include("application/views/front/layouts/sidebar.php");
            ?>
            
            <!-- end sidebar -->
          </div> <!-- /row -->
          </div>
          
          

        </div> 
      </div> <!-- /row -->
    <div class="clearfix"></div>
    </div>
    <!-- end konten -->