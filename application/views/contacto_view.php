<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="principal contacto">
<!-- 	<div class="map-responsive">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d152296.99944934074!2d-80.20959325684781!3d25.8277029391309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1590443456335!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div> -->
	<div class="banner">
		<img src="<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>" alt="" style="width: 100%;">
	</div>
	<div class="container-fluid pt-5 ">
		<h2 class="pb-3">Contacto</h2>
		<div class="row ">
			<div class="col-md-6 ">
				<div class="info" >
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam reiciendis incidunt dolor ipsa perferendis dolorem, rerum dolorum obcaecati ipsam molestiae dicta consequuntur doloremque repellat autem culpa ea blanditiis vel facilis.<br><br>

						Puede comunicarse a través de los siguientes números telefónicos:<br>
						<a href="tel:+0000000000 " class="sitetel">+000000000 </a> /  / <a href="tel:+00000000" class="sitetel">00000000</a><br><br>

						<br>
						<b>Ubicación</b><br>
						Miami, 0000.
					</p>
				</div>
			</div>
			<div class="col-md-6 formulario">
				<form action="">
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<input class="input" type="text" placeholder=" ">
								<div class="placeholder">Nombre</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<input class="input" type="text" placeholder=" ">
								<div class="placeholder">Correo Electrónico</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<input class="input" type="text" placeholder=" ">
								<div class="placeholder">Dirección</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<input class="input" type="text" placeholder=" ">
								<div class="placeholder">Teléfono</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<!-- <input class="input" type="text" placeholder=" " style="height: 120px;"> -->
								<textarea name="text" class="textarea" style="height: 120px;" ></textarea>
								<div class="placeholder">Mensaje</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-holder">
								<input class="btn first" value="Enviar" type="submit">
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('includes/footer_scripts_view'); ?>
<?php $this->load->view('includes/footer_tags_view'); ?>
