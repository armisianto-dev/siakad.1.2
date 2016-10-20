    <div class="container margin-top-single">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="bgputih">
            <div class="row">
            <div class="col-md-9">
              <div class="outer-blog">
                <h2><?php echo $list->JUDUL; ?></h2>
                <p class="wkt-post">
                  <span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo tgl($list->TANGGAL); ?>
                  &nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span>&nbsp;<?php echo $JML; ?>&nbsp;Komentar
                </p>
                
                <p>
                  <img src="<?php echo base_url(); ?>res/foto/berita/<?php echo $list->GAMBAR; ?>">
                </p>
                <p>
                  <?php echo $list->ISI; ?>
                </p>
                
              <div class="clearfix"></div>
              </div>

              <!-- komentar -->
              <div class="outer-blog">
              <h2>Komentar</h2>
              <?php echo $notif; ?>
              <div class="clearfix"></div>
              <?= form_open('singlepage/komentar', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                  <input type="hidden" name="beritaid" value="<?php echo $list->ID; ?>">
                  <input type="hidden" name="beritaslug" value="<?php echo $list->SLUG; ?>">

                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control input-sm" name="nama" type="text" placeholder="Isikan Nama Anda">
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control input-sm" name="email" type="text" placeholder="Isikan e-mail Anda">
                  </div>
                  <div class="form-group">
                    <label>Komentar</label>
                    <textarea class="form-control" rows="3" name="komentar"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Security Code</label>
                    <div class="clearfix"></div>
                    <?=$cap_img;?>
                  </div>
                  <div class="form-group">
                    <input type="text" name="kode_captcha" class="form-control input-sm" placeholder="Isikan Security Code">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp; Kirim</button>
                  </div>
                  <div class="clearfix"></div>
              <?= form_close(); ?>
                <!-- tampil komentar -->
                <?php if(!empty($komen)) {?>
                <?php foreach ($komen as $value) { ?>
                <div style="float:left">
                  <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $value['NAMA']; ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo tgl($value['WAKTU_K']); ?> 
                  <div class="clearfix"></div>
                  <p><?php echo $value['komentar']; ?></p>
                </div>
                <div class="clearfix"></div>
                <?php } ?>
                <?php }else{
                    echo "<h2>Tidak ada komentar</h2>";
                  } ?>
                <!-- end tampil komentar -->
              <!-- end komentar -->
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
                komentar: {
                    required: true
                },
                nama: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                komentar: {
                    required: "Kolom Komentar Harus Diisi"
                },
                nama: {
                    required: "Kolom Nama Harus Diisi"
                },
                email: {
                    required: "Kolom E-mail Harus Diisi",
                    email: "Masukkan email yang valid"
                }
            }
        });
    });
</script>