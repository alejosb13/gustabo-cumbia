<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="interna">
	<div class="container-fluid pt-4">
		<div class="row pb-4">
			<div class="col-xl-12 px-7">
				<?php echo $noticia->contenido; ?>
			</div>
		</div>
	</div>
	</div>
</section>

<?php $this->load->view('includes/footer_scripts_view'); ?>
<?php $this->load->view('includes/footer_tags_view'); ?>