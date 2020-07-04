$(document).ready(function () {
/* 	resizeOnCharge()
	$(window).resize(function (e) { 
		resizeOnCharge()
	});
	$(".scroll").niceScroll({  emulatetouch: false,}); */
});

function getImageResize(){
	let img = document.getElementById("img-scroll");
	return img.height;
}

function resizeOnCharge() {
	if(window.innerWidth >= 996){
		console.log(window.innerWidth);
		
		$(".scroll").css("height", getImageResize());
	}else{
		$(".scroll").css("height", "auto");
	}
}
