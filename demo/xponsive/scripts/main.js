$(document).ready(function(){
	$('body').addClass('has_js');
	noresizeMessage();
});

function noresizeMessage() {

	setTimeout(function() {
	     $("#fadeMessage").fadeIn(2000);	    
	}, 4000);

	$(window).resize(function() {
	   $("#fadeMessage").fadeOut(2000);	
	});
	


}



