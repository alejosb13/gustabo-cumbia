	</div>
</div>
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/velocity/velocity.min.js"></script>
<script src="<?php echo base_url(); ?>lib/js/master.js"></script>
<?php if(isset($js)): ?>
	<?php foreach($js as $val): ?>
		<script src="<?php echo $val; ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
