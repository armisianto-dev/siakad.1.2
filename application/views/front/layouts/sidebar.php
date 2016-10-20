<div class="col-md-3">
	<div class="outer-judul-line-abu2">
	  <h1>Berita Terbaru</h1>
	  <div class="clearfix"></div>
	</div>
	<?php foreach ($berita_terbaru as $value) { ?>
	<div class="media">
		<a href="<?php echo site_url();?>berita/<?php echo $value['SLUG']; ?>">
		  <span class="pull-left img-sidebar" href="#">
		  <?php
		    $image=$value['GAMBAR'];
		    $explode=explode(".",$image);
		    $gambar= $explode[0]."_thumb.".$explode[1];

		    ?>
		    <img class="media-object" src="<?php echo base_url(); ?>res/foto/berita/thumb/<?php echo $gambar; ?>" alt="judul">
		  </span>
		  <div class="media-body">
		    <h4 class="media-heading"><?php echo $value['JUDUL'];?></h4>

		    <p class="wkt-post" style="text-align: left;">
		    	<span class="glyphicon glyphicon-calendar"></span> <?php echo tgl($value['TANGGAL']); ?>
		    </p>
		  </div>
	  </a>
	</div>
	<?php }; ?>
	<div class="clearfix"></div>
	<p class="pull-right" style="margin-top:20px;">
		<a href="<?php echo site_url('berita/index');?>" class="btn btn-primary btn-xs">Semua Berita</a>
	</p>
	
</div>