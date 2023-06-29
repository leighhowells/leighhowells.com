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





function smoothscroll() {
  $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 600, function () {
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                return false;
              } else {
                $target.attr('tabindex', '-1');
                $target.focus();
              }
              ;
            });
          }
        }
      });
}

function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');

    osElement.css({
      '-webkit-animation-delay':  osAnimationDelay,
      '-moz-animation-delay':     osAnimationDelay,
      'animation-delay':          osAnimationDelay
    });

    var osTrigger = ( trigger ) ? trigger : osElement;

    osTrigger.waypoint(function() {
      osElement.addClass('animated').addClass(osAnimationClass);
    },{
      triggerOnce: true,
      offset: '80%'
    });
  });
}



//gently fade up images
//function imageFader() {
//  var duration = 500;
//  $('.article img').each(function (i) {
//    $(this).delay(i * duration).addClass('loaded').animate({opacity: 1}, duration);
//  });
//}



function scroller() {
  var vertical_position = 0;
  var header = document.getElementById("topbar");
  var jungle2020 = document.getElementById("header");
  var hero = document.getElementById("heroimage");
  var images = document.getElementsByTagName('img');

  window.addEventListener("scroll", function () {
    var top = this.scrollY;
    header.style.opacity = 1 - top / 100;
    header.style.top = 0 - top * 0.05 + 'px';
    jungle2020.style.backgroundPositionY = top / 1.5 + 'px';
    hero.style.bottom = -100 - top / 0.8 + 'px';
  });
}




// match tiles heights
function sameHeights() {
  var nodeList = document.getElementsByTagName('article');
  var elems = [].slice.call(nodeList);
  var tallest = Math.max.apply(Math, elems.map(function (elem, index) {
    elem.style.minHeight = ''; // clean first
    return elem.offsetHeight;
  }));
  elems.forEach(function (elem, index, arr) {
    elem.style.minHeight = (tallest - 40) + 'px';
  });
}



var resized = true;
var timeout = null;
var refresh = function () {
  if (resized) {
    requestAnimationFrame(sameHeights);
  }
  clearTimeout(timeout);
  timeout = setTimeout(refresh, 100);
  resized = false;
};



window.addEventListener('resize', function () {
  resized = true;
});
refresh();




document.addEventListener("DOMContentLoaded", function (event) {
  scroller();
  //imageFader();
  smoothscroll();
  onScrollInit( $('.os-animation') );
  onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
  onScrollInit( $('.staggered-animation2'), $('.staggered-animation-container2') );
});



