<div class="wrapper">
	<!-- Sidebar  -->
	<nav id="sidebar" class="active">
		<div class="sidebar-header">
			<!-- <h3>Bootstrap Sidebar</h3> -->
		</div>

		<ul class="list-unstyled components">
			<!-- <p>Dummy Heading</p> -->

			<li class="<?php echo ($section == "Inicio") ? "active":"" ; ?>">
				<a href="<?php echo base_url("eng"); ?>">Home</a>
			</li>
			<li class="<?php echo ($section == "Sobre mi") ? "active":"" ; ?>">
				<a href="<?php echo base_url("eng/about-me"); ?>">About Me</a>
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
			<li class="<?php echo ($section == "Discografia") ? "active":"" ; ?>" >
				<a href="<?php echo base_url("eng/discography"); ?>">Discography</a>
			</li>
			<li class="<?php echo ($section == "Musica") ? "active":"" ; ?>" >
				<a href="<?php echo base_url("eng/music"); ?>">Music</a>
			</li>
			<li class="<?php echo ($section == "Galeria") ? "active":"" ; ?>" >
				<a href="<?php echo base_url("eng/gallery"); ?>">Gallery</a>
			</li>
<!-- 			<li>
				<a href="#">Social media</a>
			</li> -->
		</ul>

	</nav>
	<nav class="cont-informacion">
		<div class="cont_logo">
			<a href="<?php echo base_url("/eng"); ?>">
				<img class="logo" src="<?php echo base_url()."lib/images/logo.png"; ?>" alt="">
			</a>
		</div>
		<div class="cont_menu">
			<div class="menu">
				<span>Menu</span>
				<a class="McButton" id="sidebarCollapse" data="hamburger-menu">
					<b></b>
					<b></b>
					<b></b>
				</a>
			</div>
		</div>
		<div class="cont-lenguaje">
			<div class="lenguaje">
				<a class="leng" href="<?php echo base_url(); ?>">ES</a>
				<a class="leng" href="<?php echo base_url("/eng"); ?>">EN</a>
			</div>
			<div class="cont-redes">
				<a target="_blank" href="https://www.facebook.com/gustavocumbiaurbana/"><img src="<?php echo base_url()."lib/images/iconos/facebook.png"; ?>" alt=""></a>
				<a target="_blank" href="https://www.instagram.com/gustavocumbiaurbana/"><img src="<?php echo base_url()."lib/images/iconos/instagram.png"; ?>" alt=""></a>
				<a target="_blank" href="mailto:gustavocumbiaurbana@gmail.com"><img src="<?php echo base_url()."lib/images/iconos/email.png"; ?>" alt=""></a>
			</div>
		</div>
	</nav>


	<div id="content">
	<?php $this->load->view('ingles/includes/spotify'); ?>
