$(document).ready(function(){
	$(".cst-clickable-row").click(function(){
		window.document.location = $(this).data("href");
	});
});