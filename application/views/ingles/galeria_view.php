<?php $this->load->view('ingles/includes/header_view.php'); ?>
<?php $this->load->view('ingles/includes/header_menu.php'); ?>

<section class="principal discografia">
<div class="col-md-12">
	<h2 style="font-weight: 800;margin-top: 35px;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;" >Gallery</h2>
</div>
	<div class="row m-0 pt-4 ">
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto siento" style=" cursor: pointer;" src="<?php echo base_url("lib/images/siento/Detrás de camaras.jpeg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto siento" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Siento</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto radio" style=" cursor: pointer;" src="<?php echo base_url("lib/images/radio/Bailando con Gustavo Quintero Radio Picardia 69.9 Fm Los Angeles.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto radio" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Radio</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto television" style=" cursor: pointer;" src="<?php echo base_url("lib/images/television/De visita en Telemundo 52 Los Angeles.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto television" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >TV</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto varias" style=" cursor: pointer;" src="<?php echo base_url("lib/images/varias/Compartiendo con periodistas en el Festival de la Independencia Mexicana.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto varias" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Other</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto algunas_foticos" style=" cursor: pointer;" src="<?php echo base_url("lib/images/algunas_foticos/SF GQ 3.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto algunas_foticos" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Some Photos</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="padre-disc">
				<img class="img-fluid m-auto videos_varios" style=" cursor: pointer;" src="<?php echo base_url("lib/images/algunas_foticos/SF GQ 6.jpg"); ?>" alt="">
				<div class="wrapper-disc" >
					<div class="icon"></div>
					<span class="texto videos_varios" style="font-weight: 800;margin-top: 10px;display: block;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;text-align: center;font-size: 18px;padding: 0px 20px; cursor: pointer;" >Regards</span>
				</div>
			</div>
		</div>
	</div>

</section>

<script type="text/javascript">
	const siento = <?php echo json_encode($siento); ?>;
	const radio = <?php echo json_encode($radio); ?>;
	const television = <?php echo json_encode($television); ?>;
	const varias = <?php echo json_encode($varias); ?>;
	const algunas_foticos = <?php echo json_encode($algunas_foticos); ?>;
	const videos_varios = <?php echo json_encode($videos_varios); ?>;
</script>
<?php $this->load->view('ingles/includes/footer_scripts_view'); ?>
<script>
$(document).ready(function () {
	$(".siento").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( siento, {
			loop : false
		});
	});
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
	$(".videos_varios").click(function (e) { 
		e.preventDefault();
		$.fancybox.open( videos_varios, {
			loop : false
		});
	});

});
</script>
<?php $this->load->view('ingles/includes/footer_tags_view'); ?>
