$(document).ready(function () {
	$("[data-link]").click(function (e) { 
		e.preventDefault();
		let link =	$(this).data("link")
		window.location=link 
	});
});
