		<div class="outer100footer margin-top-content">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 margin-container-login">
            <div class="row">
              <div class="col-sm-6">
                <div class="outer-col-footer col-footer">
                  <h4>Tentang Kami</h4>
                  <p>
                    <?=  strip_tags(substr($aboutus->VAL, 0,250));?>... <br/>
                    <?= anchor('/' . $aboutus->TAG . '', 'Selengkapnya', 'class="btn btn-primary btn-sm"') ?>
                  </p>
                <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="outer-col-footer col-footer">
                  <h4>Kontak</h4>
                  <p>
                    <?=  strip_tags(substr($contactus->VAL, 0,250));?>...<br/>
                     <?= anchor('/' . $contactus->TAG . '', 'Selengkapnya', 'class="btn btn-primary btn-sm"') ?>
                  </p>
                <div class="clearfix"></div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    <div class="clearfix"></div>
    </div>

    <div class="outer100footer-b">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            Copyright&copy; 2014 <strong>Yayasan Salman Al-Farisi</strong>
            <span class="pull-right">Developed by <a href="http://www.rai.asia">Raksa Abadi Informatika</a></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url('themes/front/js/bootstrap.min.js');?>"></script>
    
    <!-- js grid -->
    <!-- <script src="asset/js/js-grid/jquery2.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url('themes/front/js/js-grid/jquery.masonry.js');?>"></script>
    <script src="<?php echo base_url('themes/front/js/js-grid/modernizr.js');?>"></script>
    
    <?php if(isset($includes_for_layout['js']) AND count($includes_for_layout['js']) > 0): ?>
    <?php foreach($includes_for_layout['js'] as $js): ?>
    <?php if($js['options'] === NULL OR $js['options'] == 'footer'): ?>
    <!-- additional javascript -->
    <script src="<?php echo $js['file']; ?>"></script>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>

     <script>
      /*untuk pin style*/
        var $containter = $('#container');
        $containter.imagesLoaded( function(){
          $containter.masonry({
            itemSelector: '.box',
            isAnimated: !Modernizr.csstransitions,
            isFitWidth: true
          }); 
        });
      </script> 

      <!-- owl --> 
        <script src="<?php echo base_url('themes/front/bundle/owlcarousel/owl.carousel.min.js');?>"></script>
        <script>
          $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
          });

          var owl = $('.owl-carousel');
          owl.owlCarousel({
              items:4,
              loop:true,
              margin:10,
              autoplay:true,
              autoplayTimeout:3500,
              autoplayHoverPause:true
          });
          $('.play').on('click',function(){
              owl.trigger('autoplay.play.owl',[1000])
          })
          $('.stop').on('click',function(){
              owl.trigger('autoplay.stop.owl')
          })
        </script>
      <!-- end owl -->    

  </body>
</html>
