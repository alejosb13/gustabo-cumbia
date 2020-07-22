<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="interna discografia">
<div class="col-md-12">
	<h2 style="font-weight: 800;margin-top: 35px;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;" >Galería</h2>
</div>
	<div class="row m-0 pt-4 ">
		<div class="col-md-3 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto radio" style=" cursor: pointer;" src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto radio" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Radio</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto television" style=" cursor: pointer;" src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto television" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Televisión</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto varias" style=" cursor: pointer;" src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto varias" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Varias</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto algunas_foticos" style=" cursor: pointer;" src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto algunas_foticos" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Algunas Foticos</span>
				</div>
			</div>
		</div>
	</div>

</section>

<script type="text/javascript">
	const radio = <?php echo json_encode($radio); ?>;
	const television = <?php echo json_encode($television); ?>;
	const varias = <?php echo json_encode($varias); ?>;
	const algunas_foticos = <?php echo json_encode($algunas_foticos); ?>;
</script>
<?php $this->load->view('includes/footer_scripts_view'); ?>
<script>
$(document).ready(function () {
	$(".radio").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( radio, {
			loop : false
		});
	});
	$(".television").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( television, {
			loop : false
		});
	});
	$(".varias").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( varias, {
			loop : false
		});
	});
	$(".algunas_foticos").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( algunas_foticos, {
			loop : false
		});
	});

});
</script>
<?php $this->load->view('includes/footer_tags_view'); ?>
