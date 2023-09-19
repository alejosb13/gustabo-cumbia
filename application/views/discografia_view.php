<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="interna discografia">
<div class="col-md-12">
	<h2 style="font-weight: 800;margin-top: 35px;color: #CCA418;font-family: 'Shadows Into Light', cursive !important;" >Discografía</h2>
</div>
	<div class="row m-0 pt-4 justify-content-center">
		<div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center" style="flex-direction: column;text-align: center;">
			<div class="padre-disc">
				<img class="img-fluid m-auto img-change" src="<?php echo base_url("lib/images/profile/IMG_2685.jpg"); ?>" alt="">
<!-- 				<div class="wrapper-disc" >
					  <div class="icon"></div>
					 <span class="texto">Que Vuelva</span> 
				</div> -->
			</div>
			<span class="texto info-t" style="color: #CCA418;font-family: 'Shadows Into Light', cursive !important;cursor: pointer;margin-top:8px;">Ver más</span>
		</div>
	</div>
	<div class="row justify-content-center px-0 py-5 m-0 ">
		<div class="col-md-8 justify-content-center">
			<iframe src="https://open.spotify.com/embed/album/7nFjpwsD7Mx3CHnqjS0aQI" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
		</div>
	</div>


</section>



<?php $this->load->view('includes/footer_scripts_view'); ?>
<?php $this->load->view('includes/footer_tags_view'); ?>
