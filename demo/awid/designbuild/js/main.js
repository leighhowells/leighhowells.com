$(document).ready(function() {

 
  //ACCORDION BUTTON ACTION 
  $('div.accordionButton').click(function() {
    $('div.accordionContent').slideUp('normal');  
    $(this).next().slideDown('normal');
  });
 
  //HIDE THE DIVS ON PAGE LOAD  
  $("div.accordionContent").hide();
 

    
  //Fixed navigation
  
  var placeholder = $( ".scrolltest" );
  var message = $( ".toolbar" );
  var view = $( window );
  view.bind(
  "scroll resize",
  function(){
  var placeholderTop = (placeholder.offset().top) +0;
  var viewTop = view.scrollTop();
    if (
      (viewTop > placeholderTop) && !message.is( "hide" )
      ){
        placeholder.height(
        placeholder.height()
      );
     message.removeClass( "hide" );
     message.addClass( "show" );
      } 
      else if (
      (viewTop <= placeholderTop) 
      ){
      placeholder.css( "height", "auto" );
      message.removeClass( "show" );
      message.addClass( "hide" );
  }});
 
});