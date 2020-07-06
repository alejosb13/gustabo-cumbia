$(document).ready(function () {
/* 	$("[data-link]").click(function (e) { 
		e.preventDefault();
		let link =	$(this).data("link")
		window.location=link 
	}); */
	$(".info-t,.padre-disc").click(function (e) { 
		e.preventDefault();
		if($(".img-change").hasClass("active")){
			$(".img-change").attr("src",BASE_URL+"lib/images/profile/IMG_2685.jpg");
			$(".img-change").removeClass("active");
			$(".info-t").text("Ver más")
		}else{
			$(".img-change").attr("src",BASE_URL+"lib/images/profile/mas.jpg");
			$(".img-change").addClass("active");
			$(".info-t").text("Ver menos");
		}
	});
});
