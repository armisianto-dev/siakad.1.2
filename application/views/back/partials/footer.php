			</div><!-- ./wrapper -->    
        <script src="<?php echo base_url('themes/back/bundle/bootstrap/js/bootstrap.min.js');?>" ></script>
        <?php if(isset($includes_for_layout['js']) AND count($includes_for_layout['js']) > 0): ?>
			<?php foreach($includes_for_layout['js'] as $js): ?>
				<?php if($js['options'] === NULL OR $js['options'] == 'footer'): ?>
					<script type="text/javascript" src="<?php echo $js['file']; ?>"></script>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
        <script src="<?php echo base_url('themes/back/js/admin.js');?>"></script>
    </body>
</html>