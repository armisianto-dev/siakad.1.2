    <div class="container margin-top-single">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <div class="row">
            <div class="col-md-9">
              <div class="outer-blog">
                <h2><?php echo $judul; ?></h2>
                <p>
                  <?php echo $list->VAL; ?>
                </p>

                <?php 
                  if ($list->TAG=="contact_us") {
                    ?>
                    <div class="col-sm-12" style="margin-top:10px;">
                    <?php echo $notif; ?>
                    <div class="clearfix"></div>
                    <?= form_open('setting/save', array('id' => 'form-tambah','class'=>'form-horizontal margin-top-single small', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="nama" class="form-control input-sm" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="text" name="email" class="form-control input-sm" placeholder="Your Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-6">
                          <input type="text" name="telp" class="form-control input-sm" placeholder="Your Phone Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Testimonial</label>
                        <div class="col-sm-10">
                          <textarea class="form-control input-sm" rows="3" name="isi" placeholder="Your Testimonial"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Security Code</label>
                        <div class="col-sm-6">
                          <?=$cap_img;?>
                          <div class="form-group"></div>
                          <input type="text" name="kode_captcha" class="form-control input-sm" placeholder="Input Security Code">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Send</button>
                        </div>
                      </div>
                    <?= form_close(); ?>

                  </div>
                 <?php }
                ;?>
                
              <div class="clearfix"></div>
              </div>

             

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
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-tambah').validate({
            rules: {
                isi: {
                    required: true
                },
                nama: {
                    required: true
                },
                telp: {
                    required: true,
                    number: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                isi: {
                    required: "Kolom Testimonial Harus Diisi"
                },
                nama: {
                    required: "Kolom Nama Harus Diisi"
                },
                telp: {
                    required: "Kolom Phone Number Harus Diisi",
                    number: "Masukkan Phone Number yang valid"
                },
                email: {
                    required: "Kolom E-mail Harus Diisi",
                    email: "Masukkan email yang valid"
                },
            }
        });
    });
</script>