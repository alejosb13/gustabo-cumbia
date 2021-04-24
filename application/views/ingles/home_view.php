<?php $this->load->view('ingles/includes/header_view.php'); ?>
<?php $this->load->view('ingles/includes/header_menu.php'); ?>
<audio autoplay autobuffer  >
	<source src="<?php echo base_url("lib/audio/siento.mp3"); ?>"  type="audio/mpeg">
</audio> 
<section class="principal home">
	<div class="container-fluid image-change">
		<div class="row">
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("eng/about-me") ?>" data-image="<?php echo base_url("lib/images/profile/1.jpg") ?>">
					<span class="bgtexto">About Me</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("eng/discography") ?>" data-image="<?php echo base_url("lib/images/profile/2.jpg") ?>">
					<span class="bgtexto">Discography</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("eng/music") ?>" data-image="<?php echo base_url("lib/images/profile/3.jpg") ?>">
					<span class="bgtexto">Music</span>
				</div>
			</div>
			<div class="col-md-3">
				<div class="bgChange" data-link="<?php echo base_url("eng/gallery") ?>" data-image="<?php echo base_url("lib/images/profile/4.jpg") ?>">
					<span class="bgtexto">Gallery</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('ingles/includes/footer_scripts_view'); ?>
<?php $this->load->view('ingles/includes/footer_tags_view'); ?>
