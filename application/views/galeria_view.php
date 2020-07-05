<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="interna discografia">
<div class="col-md-12">
	<h2 style="font-weight: 800;margin-top: 35px;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;" >Galería</h2>
</div>
	<div class="row m-0 pt-4 ">
		<div class="col-md-3 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto album" style=" cursor: pointer;" src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="">
				<div class="wrapper-disc" data-link="https://open.spotify.com/album/7nFjpwsD7Mx3CHnqjS0aQI">
					<div class="icon"></div>
					<span class="texto album" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Test</span>
				</div>
			</div>
		</div>
	</div>

</section>


<script type="text/javascript">
	const album = <?php echo json_encode($albun); ?>;
</script>
<?php $this->load->view('includes/footer_scripts_view'); ?>
<script>
$(document).ready(function () {
	$(".album").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( album, {
			loop : false
		});
	});
});
</script>
<?php $this->load->view('includes/footer_tags_view'); ?>
