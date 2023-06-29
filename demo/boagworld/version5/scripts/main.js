$(document).ready(function(){
	$('body').addClass('has_js').addClass($.client.os.toLowerCase()).addClass($.client.browser.toLowerCase());
	
	checkWinWidth();
	
	$(window).smartResize(function(){
		checkWinWidth();
	});
	
});



// Browser width detection and menu loader ------------------------------------------------------------------------------------

(function($,sr){
 
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  
  var debounce = function (func, threshold, execAsap) {
      var timeout;
 
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };
 
          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
 
          timeout = setTimeout(delayed, threshold || 250); 
      };
  }
	// smartResize 
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
 
})(jQuery,'smartResize');


function checkWinWidth() {

	var winWidth = $(window).width();
	//console.log(winWidth);
	
	
	if (winWidth < 500) {
		$('#narrowNav').load('narrownav.htm');
		$('div').remove('#WideNav');
	}
	
	
	

}
