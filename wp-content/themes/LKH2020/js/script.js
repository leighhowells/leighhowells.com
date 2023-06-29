//gently fade up images
function imageFader() {
  var duration = 500;
  $('.article img').each(function (i) {
    $(this).delay(i * duration).addClass('loaded').animate({opacity: 1}, duration);
  });
}

function bokehfade() {
  var element = $("#bokeh");
  $(window).scroll(function () {
    if($(window).scrollTop() > 0) {
      element.addClass("fadeout");
      element.removeClass("fadein");
    }
    if($(window).scrollTop() <= 0) {
      element.removeClass("fadeout");
      element.addClass("fadein");
    }
  });
}

document.addEventListener("DOMContentLoaded", function (event) {
  bokehfade();
});

