<?php $this->load->view('includes/header_view.php'); ?>
<?php $this->load->view('includes/header_menu.php'); ?>

<section class="interna discografia">
	<div class="col-md-12">
		<h2 style="font-weight: 800;margin-top: 35px;font-family: 'Shadows Into Light', cursive !important;color: #CCA418;">Música</h2>
		<p style="font-weight: 400;margin-top: 15px;color:#fff;">Siguenos en nustros diferentes portales y disfruta de mas contenidos.</p>
	</div>
	<br>
	<div class="container padre-m" >
		<a href="https://music.apple.com/us/album/que-vuelva/1497811493?l=es" class="cont-img">
			<img class="img-center img-thumbnail mx-auto d-block mr-3 imgh-i" src="<?php echo base_url("lib/images/iconos/itunes.png") ?>" alt="">
		</a>
		<a href="https://music.amazon.com/albums/B084H789VP?ref=dm_sh_iGtY8Htn93L7UJcFBcMkYfLep" class="cont-img">
			<img class="img-center img-thumbnail mx-auto d-block mr-3 imgh-a" src="<?php echo base_url("lib/images/iconos/amusic.png") ?>" alt="">
		</a>
		<a href="https://open.spotify.com/album/7nFjpwsD7Mx3CHnqjS0aQI" class="cont-img">
			<img class="img-center img-thumbnail mx-auto d-block mr-3 imgh-s" src="<?php echo base_url("lib/images/iconos/spotify.png") ?>" alt="">
		</a>
		<a href="https://www.youtube.com/channel/UC0qlzfx1wPxW1cFGRNCjRDw/videos" class="cont-img">
			<img class="img-center img-thumbnail mx-auto d-block mr-3 imgh-y" src="<?php echo base_url("lib/images/iconos/youtube.png") ?>" alt="">
		</a>
	</div>
	<br><br>
	<div class="col-md-12">
		<h2 style="font-weight: 800;margin-top: 35px;font-family: 'Shadows Into Light', cursive !important;color: #CCA418;">Videos</h2>
<!-- 		<p style="font-weight: 400;margin-top: 15px;">Siguenos en nustros diferentes portales y disfruta de mas contenidos.</p> -->
	</div>
	<br>
	<div class="container" >
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe"  width="560" height="315" src="https://www.youtube.com/embed/delj75yjVLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe"  width="560" height="315" src="https://www.youtube.com/embed/rqSiNswG170" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe"  width="560" height="315" src="https://www.youtube.com/embed/zMr9J-GmcRA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe" src="https://www.youtube.com/embed/MGfFdeAkkg8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe" src="https://www.youtube.com/embed/pWzrxFR6-rc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe" src="https://www.youtube.com/embed/xXE4r6S5o9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 ">
				<iframe class="respon-iframe" src="https://www.youtube.com/embed/lZfwfhmJk-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<iframe class="respon-iframe" src="https://www.youtube.com/embed/deHt_hYqEnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

	</div>
</section>



<?php $this->load->view('includes/footer_scripts_view'); ?>
<script>
	$(document).ready(function () {
		$(".imgh-i").hover(function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/itunes-h.png")
			}, function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/itunes.png")
				// out
			}
		);
		$(".imgh-a").hover(function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/amusic-h.png")
			}, function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/amusic.png")
				// out
			}
		);
		$(".imgh-s").hover(function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/spotify-h.png")
			}, function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/spotify.png")
				// out
			}
		);
		$(".imgh-y").hover(function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/youtube-h.png")
			}, function () {
				$(this).attr("src",BASE_URL+"lib/images/iconos/youtube.png")
				// out
			}
		);
	});
</script>
<?php $this->load->view('includes/footer_tags_view'); ?>
