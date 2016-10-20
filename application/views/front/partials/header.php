<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="shortcut icon" href="<?php echo base_url('themes/front/ico/favicon.ico');?>">

    <title><?php echo $title_for_layout; ?><?php echo $this->config->item('site_title', 'ion_auth'); ?></title>
    <meta name="description" content="<?php echo $meta_for_layout; ?>"/>
    <meta name="author" content="<?php echo $this->config->item('site_title', 'ion_auth'); ?>">   
    
    <link href="<?php echo base_url('themes/front/css/bootstrap.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('themes/front/css/carousel.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('themes/front/css/custom-saf.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('themes/front/css/css-grid/pin.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('themes/front/bundle/lightboxgallery/lightGallery.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('themes/front/bundle/owlcarousel/owl.carousel.css');?>" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo base_url('themes/front/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url('themes/front/js/html5shiv.js');?>"></script>
      <script src="<?php echo base_url('themes/front/js/respond.min.js');?>"></script>
    <![endif]-->

    <script src="<?php echo base_url('themes/front/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('themes/front/bundle/lightboxgallery/lightGallery.js');?>"></script>

    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 2000
      })
    </script>
    
    <?php if(isset($includes_for_layout['css']) AND count($includes_for_layout['css']) > 0): ?>
	  <?php foreach($includes_for_layout['css'] as $css): ?>
    <!-- additional css -->
		<link rel="stylesheet" href="<?php echo $css['file']; ?>"<?php echo ($css['options'] === NULL ? '' : ' media="' . $css['options'] . '"'); ?>>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php if(isset($includes_for_layout['js']) AND count($includes_for_layout['js']) > 0): ?>
		<?php foreach($includes_for_layout['js'] as $js): ?>
    <?php if($js['options'] !== NULL AND $js['options'] == 'header'): ?>
    <!-- additional javascript -->
    <script src="<?php echo $js['file']; ?>"></script>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>

  </head>
  <body>