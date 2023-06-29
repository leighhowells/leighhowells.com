
//gently fade up images
function imageFader() {
	var duration = 500;
	$('.article img').each(function(i)	{
			$(this).delay(i*duration).addClass('loaded').animate({opacity: 1}, duration);
	});
}

//hero apearance and bobbing :)
function meShow(){
  $(".home #hero img").delay(1800).animate({"margin-bottom":"-490px"}, 1000 );
  $(".music #hero img").delay(3000).animate({"margin-bottom":"-430px"}, 1300);
  $(".articles #hero img").delay(900).animate({"margin-bottom":"-430px"}, 1000);
  $(".design #hero img").delay(900).animate({"margin-bottom":"-430px"}, 1000);
  $(".blog #hero img").delay(900).animate({"margin-bottom":"-430px"}, 2000);
  }
  
function alienBob(){
  $(".music #hero img").animate({"margin-bottom":"-440px"}, 150).animate({"margin-bottom":"-430px"}, 190 );
    $(".music #hero img").animate({"margin-bottom":"-440px"}, 150).animate({"margin-bottom":"-430px"}, 190 );
      $(".music #hero img").animate({"margin-bottom":"-440px"}, 150).animate({"margin-bottom":"-430px"}, 190 );
         $(".music #hero img").animate({"margin-bottom":"-440px"}, 150).animate({"margin-bottom":"-430px"}, 190 );
  }
  
function alienBob2(){
  $(".articles #hero img").animate({"margin-bottom":"-440px"}, 300).animate({"margin-bottom":"-430px"}, 400 );
   $(".articles #hero img").animate({"margin-bottom":"-440px"}, 300).animate({"margin-bottom":"-430px"}, 400 ); 
     $(".articles #hero img").animate({"margin-bottom":"-440px"}, 300).animate({"margin-bottom":"-430px"}, 400 ); 
       $(".articles #hero img").animate({"margin-bottom":"-440px"}, 300).animate({"margin-bottom":"-430px"}, 400 );
    
  
  $(".design #hero img").animate({"margin-bottom":"-440px"}, 600).animate({"margin-bottom":"-430px"}, 300 );
    $(".design #hero img").animate({"margin-bottom":"-440px"}, 600).animate({"margin-bottom":"-430px"}, 300 );  
      $(".design #hero img").animate({"margin-bottom":"-440px"}, 600).animate({"margin-bottom":"-430px"}, 300 );  
        $(".design #hero img").animate({"margin-bottom":"-440px"}, 600).animate({"margin-bottom":"-430px"}, 300 ); 
  
  
  $(".blog #hero img").animate({"margin-bottom":"-480px"}, 1200).animate({"margin-bottom":"-430px"}, 1200 );
    $(".blog #hero img").animate({"margin-bottom":"-480px"}, 1200).animate({"margin-bottom":"-430px"}, 1200 );
  }
  

//Simple parrallax background

function scroller() {
	if ( $(window).width() > 1023 ) {
		var scrollPos = 1-($(window).scrollTop() / 5);
		$('header').css('background-position', 'center'+' '+scrollPos+'px');
		$('header.header').css('opacity', (1+scrollPos/80));

	} else {
	}
}


// Wait for DOM load
$(document).ready(function(){
	
  if ($(this).width() > 800) {
  imageFader();
  meShow();
  alienBob();
  alienBob2();
  
  }
   
  $(window).scroll(function(){
    scroller();
  });

  $(function() {
    $('article').matchHeight();
  });
  
  //if (jQuery) { alert("jQuery loaded"); }

  $('#fit-vids').fitVids();
 
 
});


 $(document).ready(function() {
       $('#search-form').submit( function() {              
       searchKeyword = '/search/query:' + $('#keyword').val().toLowerCase();
        window.location = searchKeyword;
        return false;  // Prevent the default form behaviour
        });
 });




