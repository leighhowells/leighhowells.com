$(document).ready(function()
{
	noresizeMessage();
	checkSVG();
	
	//playOnWidth();	
	
	//$.ajax({
	  //     url: "test.mp3",
	    //   url: "test2.mp3"
	    //   }
	   //);
});


function noresizeMessage()  {

	if (Modernizr.touch)
	{
	
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


function playOnWidth() {
	
	$(window).resize(function() {
	  var winWidth=$(window).width();
	  
	  if ((winWidth <= 950) && (winWidth >=930)) {
	  	$.fn.soundPlay({url: 'test.mp3', playerId: 'embed_player', command: 'play'});
	  	winWidth=20000;
	  }
	  
	  if ((winWidth <= 850) && (winWidth >=830)) {
	  	$.fn.soundPlay({url: 'test2.mp3', playerId: 'embed_player', command: 'play'});
	  	winWidth=20000;
	  }
	  
	});
		
}
