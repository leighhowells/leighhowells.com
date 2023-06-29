$(document).ready(function(){
	$('body').addClass('has_js');
	noresizeMessage();
});

function noresizeMessage() {

	setTimeout(function() {
	     $("#fadeMessage").fadeIn(500);	    
	}, 2000);

	$(window).resize(function() {
	   $("#fadeMessage").fadeOut(500);	
	});
	
}


