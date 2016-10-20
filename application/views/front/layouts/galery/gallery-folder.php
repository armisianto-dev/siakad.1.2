    <div class="container margin-top-single">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <div class="outer-blog">
              <h2>Gallery Foto Yayasan Salman Al-Farisi</h2><br>
              <div class="row">
                <?php 
                if(!empty($list)) {
                foreach ($list as $value) { ?>
                <div class="col-sm-4 news">
                  <a href="<?php echo site_url(); ?>gallery/<?php echo $value['SLUG'];;?>">
                    <p class="img-news">
                      <img src="<?php echo base_url(); ?>res/foto/galery/<?php echo $value['GAMBAR']; ?>">
                    </p>
                    <h1><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<?= $value['JUDUL'] ?></h1>
                  </a>
                </div>
              <?php }; 
            } else {  ?>
              <div class="col-md-9">
                <p>Belum ada data gallery</p>
              </div>
            <?php }
              ?>
            </div>
            <?php echo $pagination; ?>
          </div>
        </div> 
      </div> <!-- /row -->
      </div> <!-- /row -->
      <div class="clearfix"></div>
    </div>
    <!-- end konten-->