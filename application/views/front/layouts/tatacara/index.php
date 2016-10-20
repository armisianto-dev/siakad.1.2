    <div class="container margin-top-single">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <div class="row">
            <div class="col-md-9">
              <div class="outer-blog">
                <h2><?php echo $list->JUDUL; ?></h2>
                <p class="wkt-post">
                  <span class="glyphicon glyphicon-calendar"></span> Diterbitkan Pada &nbsp;<?php echo tgl($list->TANGGAL); ?>
                 
                </p>
                <p>
                  <?php echo $list->ISI; ?>
                </p>
                
              <div class="clearfix"></div>
              
          </div> <!-- /row -->
          </div>
          
          <!-- sidebar -->
            <?php
            include("application/views/front/layouts/sidebar.php");
            ?>
            
            <!-- end sidebar -->

        </div> 
        </div> 
        </div> 
      </div> <!-- /row -->
    <div class="clearfix"></div>
    </div>
    <!-- end konten -->
<script type="text/javascript" src="<?php echo base_url(); ?>themes/back/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        height: 250,
        subfolder:"folder",
        plugins: [
            "advlist autolink image charmap list",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "nonbreaking save contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
</script>