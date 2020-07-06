<div class="wrapper">
	<!-- Sidebar  -->
	<nav id="sidebar" class="active">
		<div class="sidebar-header">
			<!-- <h3>Bootstrap Sidebar</h3> -->
		</div>

		<ul class="list-unstyled components">
			<!-- <p>Dummy Heading</p> -->

			<li class="active">
				<a href="<?php echo base_url(); ?>">Inicio</a>
			</li>
			<li>
				<a href="<?php echo base_url("sobre-mi"); ?>">Sobre mí</a>
			</li>
<!-- 			<li>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
				<ul class="collapse list-unstyled" id="pageSubmenu">
					<li>
						<a href="#">Page 1</a>
					</li>
					<li>
						<a href="#">Page 2</a>
					</li>
					<li>
						<a href="#">Page 3</a>
					</li>
				</ul>
			</li> -->
			<li>
				<a href="<?php echo base_url("discografia"); ?>">Discografia</a>
			</li>
			<li>
				<a href="<?php echo base_url("musica"); ?>">Música</a>
			</li>
			<li>
				<a href="<?php echo base_url("galeria"); ?>">Galería</a>
			</li>
<!-- 			<li>
				<a href="#">Social media</a>
			</li> -->
		</ul>

	</nav>
	<nav class="cont-informacion">
		<div class="cont_logo">
			<a href="<?php echo base_url(); ?>">
				<img class="logo" src="<?php echo base_url()."lib/images/logo.png"; ?>" alt="">
			</a>
		</div>
		<div class="cont_menu">
			<div class="menu">
				<span>Menú</span>
				<a class="McButton" id="sidebarCollapse" data="hamburger-menu">
					<b></b>
					<b></b>
					<b></b>
				</a>
			</div>
		</div>
		<div class="cont-lenguaje">
			<div class="lenguaje">
				<a class="leng" href="#">ES</a>
				<a class="leng" href="#">EN</a>
			</div>
			<div class="cont-redes">
				<a href="https://www.facebook.com/gustavocumbiaurbana/"><img src="<?php echo base_url()."lib/images/iconos/facebook.png"; ?>" alt=""></a>
				<a href="https://www.instagram.com/gustavocumbiaurbana/"><img src="<?php echo base_url()."lib/images/iconos/instagram.png"; ?>" alt=""></a>
				<a href="mailto:gustavocumbiaurbana@gmail.com"><img src="<?php echo base_url()."lib/images/iconos/email.png"; ?>" alt=""></a>
			</div>
		</div>
	</nav>


	<div id="content">
	<?php $this->load->view('includes/spotify'); ?>
