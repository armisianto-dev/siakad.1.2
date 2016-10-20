<script type="text/javascript">
  var site = $('#site');
  
  $(document).ready(function() {
    window.prettyPrint && prettyPrint()
    $('#lightGallery').lightGallery({caption:true,desc:true,mobileSrc:true,hideControlOnEnd:true,easing:'cubic-bezier(0.25, 0, 0.25, 1)'});   
    var clk = true;
        $('.btn-navbar').on('click',function(){
            if(site.hasClass('translate')){
                clk = false;    
                site.removeClass('translate');  
                setTimeout(function(){
                    $("#mast-head").css('display','none');  
                    clk = true;
                },700);
            }else if(clk){
                $("#mast-head").css('display','block'); 
                site.addClass('translate');     
            }
        });
        $('#site').on('touchmove', function(e) {
            if($(this).hasClass('translate')){
                e.preventDefault();
            }
        });
        $('#site > .nav-over').on('click touchstart',function(e){
            e.preventDefault();
            e.stopPropagation();
            clk = false;
            site.removeClass('translate');  
            setTimeout(function(){
                $("#mast-head").css('display','none');  
                clk = true;
            },700); 
        })
        $(window).on("resize orientationchange", function(){
            if($(window).width() > 767){
                $("#mast-head").css('display','block'); 
                site.removeClass('translate');
            }else if(!site.hasClass('translate')){
                $("#mast-head").css('display','none');      
            }
        });
  });
</script>
<!-- konten -->
  <div class="container margin-top-single">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="bgputih">
          <div class="outer-blog">
            <h2>Foto Gallery dari Album - <span style="color: #00a651;"><strong><?php echo $album->JUDUL; ?></strong></span></h2>
          </div>
          <div class="clearfix"></div>

          <div id="container" class="large-8 columns transitions-enabled large-centered clearfix" >
            <ul id="lightGallery" class="gallery list-unstyled">
              <?php 
                foreach ($list as $value) { ?>
              <li data-title="<?php echo $value->JUDUL; ?>" data-desc="<?php echo $value->JUDUL_G; ?>" data-src="<?php echo base_url(); ?>res/foto/galery/<?php echo $value->GAMBAR; ?>">
                <div class="box col2">
                  <div class="tinggi-fix">
                    <a href="<?php echo base_url(); ?>res/foto/galery/<?php echo $value->GAMBAR; ?>">
                      <img src="<?php echo base_url(); ?>res/foto/galery/<?php echo $value->GAMBAR; ?>" title="<?php echo $value->JUDUL_G; ?>" alt="<?php echo $value->JUDUL_G; ?>">
                    </a>
                  </div>
                  <div class="nm-produk text-center">
                    <?php echo $value->JUDUL_G; ?>
                  </div>
                </div>
              </li>
              <?php };?>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
  <!-- end konten -->


   