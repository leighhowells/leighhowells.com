$(document).ready(function()
{
	noresizeMessage();
	checkSVG();
	openVid();
});

function noresizeMessage()  {

	if (Modernizr.touch)
	{
	//do nothing
	}  
	
	else {
			  $('#mobileInfo').hide();
			  $('html').attr('style', 'overflow: hidden;');
			  
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




function openVid()  {	
	$('#videoRes').click(function() {
	  $('.vzaar_media_player').show();
	});
	
	
}	


function checkWidths() {
	if (Modernizr.mq("screen and (min-width:641px)")) {
	$('body').hide();
	}
}