$(document).ready(function () {
	$(".bgChange").hover(function (e) {
			// over
			let element = $(this)
			let link = element.data("image")
			$(".image-change").css('background-image', 'url(' + link + ')')
			/* element.find(".bgtexto").css("padding-bottom","60px") */
		}, function (v) {
			// out
		}
	);

	$(".bgChange").click(function (e) { 
		e.preventDefault();
		let element = $(this)
		let link = element.data("link")
		window.location= link
	});

	reproductor()
});


function reproductor() {
	var v = document.getElementsByTagName("audio")[0];
	v.play();
}
