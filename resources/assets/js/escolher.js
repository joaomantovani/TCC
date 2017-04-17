$(document).ready(function(){
	$('.shape').shape();

	$('.shape').hover(function() {
		$(this).shape('flip over');
	}, function() {
		$(this).shape('flip back');
	});
});