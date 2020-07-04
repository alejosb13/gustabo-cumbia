$(document).ready(function () {
	$(".textarea").on("change keyup",()=>{
		let element = $(".textarea")
		console.log(element.val());

		
		if(element.val() != ""){
			element.addClass("val-text");
		}else{
			element.removeClass("val-text");
		}
	})
});
