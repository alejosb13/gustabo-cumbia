	</div>
	</div>
	<script>
		const BASE_URL = "<?php echo base_url(); ?>";
	</script>
	<script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/velocity-animate/velocity.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/master.js"></script>
	<?php if (isset($js)): ?>
		<?php foreach ($js as $val): ?>
			<script src="<?php echo $val; ?>"></script>
		<?php endforeach; ?>
	<?php endif; ?>