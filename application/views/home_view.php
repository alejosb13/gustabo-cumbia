<?php $this->load->view('includes/header_view'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>
<audio autoplay autobuffer  >
	<source src="<?php echo base_url("lib/audio/siento.mp3"); ?>"  type="audio/mpeg">
</audio> 
<section class="principal home">
	<div class="container-fluid image-change">
		<div class="row">
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("sobre-mi") ?>" data-image="<?php echo base_url("lib/images/profile/1.jpg") ?>">
					<span class="bgtexto">Sobre mí</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("discografia") ?>" data-image="<?php echo base_url("lib/images/profile/2.jpg") ?>">
					<span class="bgtexto">Discografía</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("musica") ?>" data-image="<?php echo base_url("lib/images/profile/3.jpg") ?>">
					<span class="bgtexto">Música</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("galeria") ?>" data-image="<?php echo base_url("lib/images/profile/4.jpg") ?>">
					<span class="bgtexto">Galería</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('includes/footer_scripts_view'); ?>
<?php $this->load->view('includes/footer_tags_view'); ?>
