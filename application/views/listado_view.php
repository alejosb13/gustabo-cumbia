<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="principal listado container-fluid">
	<h2 class="container-fluid mb-4" style="font-weight: 800;margin-top: 35px;font-family: 'Shadows Into Light', cursive !important;color: #CCA418;">Noticias</h2>
	<div class="row m-0">
		<?php foreach ($noticias as $noticia) : ?>
			<div class="col-md-12 pb-4">
				<div class="card">
					<div class="card-img-top">
						<img src="<?php echo $noticia->imagen_list; ?>" alt="Card image cap">
					</div>
					<div class="card-body">
						<h5 class="card-title"><a href="<?php echo base_url("noticias/interna/$noticia->id") ?>"><?php echo $noticia->titulo ?></a></h5>
						<p class="card-text"><a href="<?php echo base_url("noticias/interna/$noticia->id") ?>"><?php echo $noticia->descripcion ?></a></p>
						<div class="btn-container">
							<a href="<?php echo base_url("noticias/interna/$noticia->id") ?>" class="btn first">Leer más</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</section>
<?php $this->load->view('includes/footer_scripts_view'); ?>
<?php $this->load->view('includes/footer_tags_view'); ?>