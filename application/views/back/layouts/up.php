    <style>
	.cropit-image-preview {
		background-color: #f8f8f8;
		background-size: cover;
		margin-top: 7px;
		width: 170px;
		height: 170px;
		cursor: move;
	}
	.cropit-image-background {
		opacity: .2;
		cursor: auto;
	}
	/*
	* If the slider or anything else is covered by the background image,
	* use relative or absolute position on it
	*/
	input.cropit-image-zoom-input {
		position: relative;
		width: 200px;
	}

	/* Limit the background image by adding overflow: hidden */
	#image-cropper {
		overflow: hidden;
	}
	.image-size-label {
		margin-top: 10px;
	}
	input {
		display: block;
	}
    </style>
    <script>
      $(function() {
        $('.image-editor').cropit({
          imageState: {
            src: '<?php echo site_url('themes/general/img/sample.jpg');?>'
          }
        });

        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export', {
			  type: 'image/jpeg',
			  quality: 1
			});          
          window.open(imageData);
        });

        $('.save').click(function() {
          var imageData = $('.image-editor').cropit('export', {
			  type: 'image/jpeg',
			  quality: 1
			});          
          $("#base").text(imageData);
        });
      });
    </script>

	<form class="form-inline form-padding image-editor"> 
      	<div id="gmb" class="cropit-image-preview"></div><br/>
      	<div class="form-group" >
	      	<input type="range" id="range" class="cropit-image-zoom-input">
	   	</div>
	   	<div class="form-group">
	   		<input type="file" data-size="xs" data-input="false" data-iconName="" data-badge="false" data-buttonName="btn-primary btn-flat" class="filestyle cropit-image-input">
      		<a class="export btn btn-flat btn-xs btn-primary">Export</a>
      		<a class="save btn btn-flat btn-xs btn-primary">Save</a>
	   	</div>
	   	<div class="clearfix"></div>
	   	<div class="form-group">
	   	<span id="base"></span>
	   	</div>
    </form>

	