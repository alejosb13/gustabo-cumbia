$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});

	menu_animation()

});

function widget_spotify() {
	let widget = document.getElementById("widget-rigth")
	widget.classList.toggle("active")	
}


function menu_animation() {
		//Menu animation icon
	let McButton = $("[data=hamburger-menu]");
	let McBar1 = McButton.find("b:nth-child(1)");
	let McBar2 = McButton.find("b:nth-child(2)");
	let McBar3 = McButton.find("b:nth-child(3)");



	McButton.click( function() {
		$(this).toggleClass("active");
		
		if (McButton.hasClass("active")) {
			McBar1.velocity({ top: "50%" }, {duration: 200, easing: "swing"});
			McBar3.velocity({ top: "50%" }, {duration: 200, easing: "swing"})
				.velocity({rotateZ:"90deg"}, {duration: 800, delay: 200, easing: [500,20] });
			McButton.velocity({rotateZ:"135deg"}, {duration: 400, delay: 200, easing: [500,20] });
		} else {
			McButton.velocity("reverse");
			McBar3.velocity({rotateZ:"0deg"}, {duration: 200, easing: [500,20] })
				.velocity({ top: "100%" }, {duration: 100, easing: "swing"});
			McBar1.velocity("reverse", {delay: 800});
		}
	});
}

