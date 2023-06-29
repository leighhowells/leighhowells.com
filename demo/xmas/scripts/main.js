$(document).ready(function()
{
	noresizeMessage();
	checkSVG();
});

function noresizeMessage()  {

	if (Modernizr.touch)
	{
		$("#fadeMessage").hide();	
		$('body').attr('style', 'height: auto; '); 
	}  
	
	else {
			  $('#mobileInfo').hide();
			  $('html').attr('style', 'overflow: hidden; ');
			  
			  setTimeout(function() {
			   	 var winWidth=$(window).width(); 
				 if (winWidth > 480)  {
				  	     $("#fadeMessage").fadeIn(900);	    
				 }
			   }, 2000);
			  
			  $(window).resize(function() {
			   $("#fadeMessage").hide();
			   $("#nyRes").show();
	  	});	
	}
		
}


function checkSVG()  {
	if (Modernizr.svg)  {
	//console.log("YES SVG");
	     $('#noSVG').hide();
	}  
	
	else {
	 	  $('#plax1').hide();
	      $('#noSVG').show();		  
	}	
}	
  