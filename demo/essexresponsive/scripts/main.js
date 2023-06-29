$(document).ready(function(){
	$('body').addClass('has_js').addClass($.client.os.toLowerCase()).addClass($.client.browser.toLowerCase());
	chooseEssex();
	carousel();
	ctaNav();
	siteSearch();
	socialMedia();
	tabsSetup();
	alternateRows();
	//vtip();
	imageCaptions();
	ctaA();
	
	checkWinWidth();
	
	$(window).smartResize(function(){
		checkWinWidth();
	});
	
});

// Carousel Functions -----------------------------------------------------------------------------------------

function chooseEssex() {
	$('#pageContent .feature#chooseEssex:nth-child(1)').addClass('nth-child1');
	$('#pageContent .feature#chooseEssex:nth-child(2)').addClass('nth-child2');
	$('#pageContent .feature#chooseEssex:nth-child(3)').addClass('nth-child3');
	$('#pageContent .feature#chooseEssex ol li').each(function() {
		$(this).prepend('<span class="num">' + ($(this).index()+1) + '</span>');
	});
}

function carousel() {
	
	// add identifiers to list
	$('#pageContent #carousel ul li').each(function() {
		$(this).addClass('n'+($(this).index()+1));
	});
	
	// add slide container divs
	$('#pageContent #carousel .container').append('<div id="slides"><div class="n6" style="left: -702px;"></div><div class="n1" style="left: 0px;"></div><div class="n2" style="left: 702px;"></div><div class="n3" style="left: 1404px;"></div><div class="n4" style="left: 2106px;"></div><div class="n5" style="left: 2808px;"></div></div>');
	
	// setup slides
	$('#pageContent #carousel #slides > div').each(function() {
		$(this).html($('#pageContent #carousel ul li.'+$(this).attr('class')).html());		
	});
	$('#pageContent #carousel #slides > div.n1, #pageContent #carousel ul li.n1').addClass('active');
	$('#pageContent #carousel #slides img').css({opacity: 0.25});
	$('#pageContent #carousel #slides .active img').css({opacity: 1});
	
	// intro animation
	$('#pageContent #carousel #slides').css('left',30).animate({'left': '-=30px'}, 'slow');
	$('#pageContent #carousel #slides > div:eq(1) .caption').fadeIn(1500);
	
	// set cycle interval
	var carouselInterval = 8000;
	var playCarousel =  setInterval( 'carouselSlideSwitch()', carouselInterval );
	
	// pause cycle on hover
	$('#pageContent #carousel ul').hover(function() {
		clearInterval(playCarousel);
	},
	function() {
		playCarousel =  setInterval( 'carouselSlideSwitch()', carouselInterval );
	});
	
	// add onclick event to slide select links
	$('#pageContent #carousel .container ul li a').click(function() {
		//carouselSlideSwitch($(this).parent().attr('class'));
		return false;
	});

}

function carouselSlideSwitch(slide) {
	if (slide) {
		alert(slide);
	}
	curSlide = $('#pageContent #carousel #slides > div:eq(2)').attr('class');
	$('#pageContent #carousel #slides > div.active').removeClass('active');
	$('#pageContent #carousel #slides').animate({'left': '-=698px'}, 1000, function() {
		newPos = ($("#pageContent #carousel #slides > div:last").position().left+702)+'px';
		$('#pageContent #carousel #slides > div:eq(0)').appendTo($('#pageContent #carousel #slides')).css('left',newPos);
		$('#pageContent #carousel #slides').css('left',0);
		$('#pageContent #carousel #slides > div').each(function() {
			$(this).css('left',$(this).position().left-702);
		});
		$('#pageContent #carousel #slides > div:eq(1) .caption').fadeIn(1500);
	});
	$('#pageContent #carousel #slides > div:eq(2)').addClass('active');
	$('#pageContent #carousel #slides > div:eq(2) img').fadeTo(1500,1);
	$('#pageContent #carousel #slides > div:eq(1) img').fadeTo('slow',0.25);
	$('#pageContent #carousel #slides > div:eq(1) .caption').fadeOut('fast');
	$('#pageContent #carousel ul li').removeClass('active');
	$('#pageContent #carousel ul li.'+curSlide).addClass('active');
}

// Call To Action Functions -----------------------------------------------------------------------------------------


//note - important change to click function as menus are pulled in dynamically - .live('click')

function ctaNav() {
	$('#ctaNav ul li a').live('click',function() {
		
		if ($(this).parent().hasClass('active') || !$('#ctaNav ul li').hasClass('active')) {
         	$(this).parent().toggleClass('active').find('.toolbox').slideToggle('fast');
		} else {
			$('#ctaNav ul li.active').removeClass('active').find('.toolbox').hide();			
			$(this).parent().toggleClass('active').find('.toolbox').show();
		}
		return false;
	});
}

// Search box expansion Functions -----------------------------------------------------------------------------------------


function siteSearch() {
	$('.siteSearch input').focusin(function() {
		$(this).animate({'width': '+=100px'});
	});
	$('.siteSearch input').focusout(function() {
		$(this).animate({'width': '-=100px'});
	});
}

// Social media animation functions -----------------------------------------------------------------------------------------


function socialMedia() {
	$('#pageFooter .container .col#socialMedia ul li').hover(function() {
		$(this).toggleClass('hover');	
	});
	$('#pageFooter .container .col#socialMedia ul li').click(function() {
		window.location = $(this).find('a').attr('href');	
	});
}

// Add quotes to blockquotes ------------------------------------------------------------------------------------------------

function blockquotes() {
	$("p.pullquote").prepend('<span class="quoteopen">&ldquo;</span>').append('<span class="quoteclosed">&rdquo;</span>');
	$("p.pullquote, p.textsplash").wrapInner('<span class="container"></span>');
}

// Add class to alternate rows ----------------------------------------------------------------------------------------------

function alternateRows() {
	$("#pageContent .article table tr:even").addClass("alt");
}

// Add icons to downloads ---------------------------------------------------------------------------------------------------

function downloadIcons() {
	var arrFileTypes = ["doc","docx","xls","xlsx","ppt","pptx","pdf","zip","gif","png","jpg","jpeg"];
	for (i in arrFileTypes) {
		$("#pageContent .links ul li a[href$='." + arrFileTypes[i] + "']").parent().addClass(arrFileTypes[i]);
		$("#pageContent .links ul li a[href$='." + arrFileTypes[i] + "']").after('<div class="meta"><span class="filetype">' + arrFileTypes[i] + '</span></div>');
		$("#pageContent .links ul li a[href$='." + arrFileTypes[i] + "']").parent().each(function() {
			$(this).find(".filesize").prepend(", ").appendTo($(this).find(".meta"));
		});
	}
}

// Setup image captions -----------------------------------------------------------------------------

function imageCaptions(){
	$("#pageContent #mainpage .maincontent img:not(#gallery img, .rotatingFeature img)").each(function () {
		divWrapper = $('<div/>').addClass('img'+$(this).attr("class")).css({width:$(this).outerWidth(true)});
		if ($(this).parent().get(0).tagName == "A") {
			$(this).parent().wrap(divWrapper);
		} else {
			$(this).wrap(divWrapper);
		};
		$(this).removeAttr("class");
		if ($(this).attr("title") != "") {
			$(this).after('<p class="caption">' + $(this).attr("title") + "</p>");
		} else if ($(this).parent("a").attr("title") != "" && $(this).parent("a").attr("title") != undefined) {
			$(this).after('<p class="caption">' + $(this).parent("a").attr("title") + "</p>");
		};
	});
}

// Set external links to open in a new window -----------------------------------------------------------------------------------------------------

function externalLinks() {
	$('a[href^=http://]:not([href*="gla.ac.uk"]),a[href^=https://]:not([href*="gla.ac.uk"])').each(function() {
		// Fix for IE6 and 7 inexplicably applying the above selector for the A-Z list nav and narrow rotating feature nav
		if (!($(this).parent().hasClass("ln-letters")) && !($(this).parent().hasClass("nav"))) {
			var titleStr = $(this).attr("title");
			if (titleStr!="" && titleStr!=undefined) {
				titleStr += " (new window)";
			} else {
				titleStr = "(new window)";
			}
			$(this).addClass("externalLink");
			$(this).attr("title", titleStr);
			$(this).click(function() {
				window.open(this.href);
				return false;
			});
		}
	});
}

// Clear value on focus ------------------------------------------------------------------------------------------------------

function clearOnEnter() {
	// Store the default value for each box
	$('.clearOnEnter, #siteSearch form #ssKeywords').each(function() {
		$(this).data('swap', $(this).attr('value'));
	}).bind('focus', function() {
		if ($(this).val() == $(this).data('swap')) {
			$(this).val('');
		}
	}).bind('blur', function() {
		if ($(this).val() == '') {
			$(this).val($(this).data('swap'));
		}
	});
}

function slideList() {
	$('ul.slide').each(function() {
		if ($(this).children('li').length > 3) {
			$(this).children('li:gt(2)').hide();
			$(this).append('<li class="more"><a href="#"><span>Show more...</span></a></li>');
			$(this).children('li.more').click(function() {
				var speed = $.browser.msie ? 0 : 200;
				if ($.browser.msie) {
					$(this).addClass("loading").find("a span").text("Loading...");
				}
				$parentthis = $(this);
				$(this).siblings("li:gt(2):not(this)").delay(0).toggle(speed,function() {
					// IE7 ClearType fix
					if($.browser.msie) {$(this).get(0).style.removeAttribute('filter');}
					if ($(this).index() == $parentthis.siblings("li").length-1) {
						// intentionally duplicated, not sure why the redraw doesn't work without
						if(isdefined("curvyCorners")){
							curvyCorners.redraw();
							curvyCorners.redraw();
						}
						if ($parentthis.hasClass("open")) {
							$parentthis.removeClass("open").find("a span").text("Show more...");
						} else {
							$parentthis.addClass("open").find("a span").text("Show less...");
						}
					}
				});
				return false;
			});
		}
	});
}

function tabsSetup() {
	
		var currentTab = 0; // Set to a different number to start on a different tab.
		
		function openTab(clickedTab) {
		   var thisTab = $(".tabbed-box .tabs a").index(clickedTab);
		   $(".tabbed-box .tabs li a").removeClass("active");
		   $(".tabbed-box .tabs li a:eq("+thisTab+")").addClass("active");
		   $(".tabbed-box .tabbed-content").hide();
		   $(".tabbed-box .tabbed-content:eq("+thisTab+")").show();
		   currentTab = thisTab;
		}
		
		$(document).ready(function() {
		   $(".tabs li:eq(0) a").css("border-left", "none");
		   
		   $(".tabbed-box .tabs li a").click(function() { 
			  openTab($(this)); return false; 
		   });
		   
		   $(".tabbed-box .tabs li a:eq("+currentTab+")").click()
		});
}


function imageGallery() {
	$("#gallery img").each(function() {
	   $(this).cjObjectScaler({
		 method: "fit",
		 fade: 800
	   });
	});
}

function isdefined(variable){
    return (typeof(window[variable]) == "undefined")?  false: true;
}

//  Mouse over tip function (subnav) --------------------------------------------------------------------------------------------

function vtip() {    
    this.xOffset = 0; // x distance from mouse
    this.yOffset = 19; // y distance from mouse       
    
    $(".vtip").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = (e.pageY + yOffset); this.left = (e.pageX + xOffset);
            
            $('#sNav h3').append( '<p id="vtip"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip #vtipArrow').attr("src", 'scripts/images/vtip_arrow.png');
            $('p#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip").fadeOut("slow").remove();
        }
    ).mousemove(
        function(e) {
            this.top = (e.pageY + yOffset);
            this.left = (e.pageX + xOffset);
                         
            $("p#vtip").css("top", this.top+"px").css("left", this.left+"px");
        }
    );            
    
};


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
	
	if (winWidth >= 768) {
		includes();
	}
}


// Include files function -----------------------------------------------------------------------------------------------------

function includes() {

	$(".js-include").each(function(){
		var inc=$(this);
		$.get(inc.attr("title"), function(data){
			inc.replaceWith(data);
		});
	});

};


// Panel switching functions -------------------------------------------------------------------------------


function ctaA() {

	   $(".button.fac_undergrad").live('click',function () {
				//toggle student type
				$(".button.fac_undergrad").addClass("current");    
				$(".button.fac_postgrad").removeClass("current");    
				$(".button.fac_posttaught").removeClass("current");
				//reset the second panel
				$(".col_2").hide("fast");     $(".col_2.option_1").show("fast");  
				//reset the third panel
				$(".col_3").hide("fast");     $(".col_3.option_1").show("fast");  			
	   });
	   
	      
	   $(".button.fac_postgrad").live('click',function () {
				//toggle student type
				$(".button.fac_undergrad").removeClass("current");  
				$(".button.fac_postgrad").addClass("current");   
				$(".button.fac_posttaught").removeClass("current");
				//reset the second panel
				$(".col_2").hide("fast");     $(".col_2.option_2").show("fast");    
				//reset the third panel
				$(".col_3").hide("fast");     $(".col_3.option_2").show("fast");   		
	   });
	    
	   
	   $(".button.fac_posttaught").live('click',function () {
				//toggle student type
				$(".button.fac_undergrad").removeClass("current");   
				$(".button.fac_postgrad").removeClass("current");   
				$(".button.fac_posttaught").addClass("current");
				//reset the second panel
				$(".col_2").hide("fast");       $(".col_2.option_3").show("fast");	
				//reset the third panel
				$(".col_3").hide("fast");       $(".col_3.option_4").show("fast");	
	   });
	   
     <!--*******************-->	     
	   
		$(".col_2.option_1 #keywords").live('click',function () {
 			$(".col_3").hide("fast");     $(".col_3.option_1").show("fast");   $(".col_4").show("fast");   });
		   
		$(".col_2.option_1 #subject").live('click',function () {
			$(".col_3").hide("fast");     $(".col_3.option_2").show("fast");   $(".col_4").show("fast");   });
		   
		$(".col_2.option_1 #atoz").live('click',function () {
			$(".col_3").hide("fast");     $(".col_3.option_3").show("fast");    $(".col_4").show("fast");   });
		
	<!--*******************-->		
		
		$(".col_2.option_2 #keywords").live('click',function () {
			 $(".col_3").hide("fast");     $(".col_3.option_1").show("fast");   $(".col_4").show("fast");   });
		$(".col_2.option_2 #subject").live('click',function () {
		     $(".col_3").hide("fast");     $(".col_3.option_2").show("fast");   $(".col_4").show("fast");   });
		$(".col_2.option_2 #atoz").live('click',function () {
			$(".col_3").hide("fast");      $(".col_3.option_3").show("fast");  $(".col_4").show("fast");   });
			
	<!--*******************-->	    
	   
	   $(".col_2.option_3 #details").live('click',function () {
		   $(".col_3").hide("fast");     $(".col_3.option_4").show("fast");   $(".col_4").show("fast");   }); 
	   $(".col_2.option_3 #department").live('click',function () {
		   $(".col_3").hide("fast");     $(".col_3.option_5").show("fast");   $(".col_4").show("fast");   });
	   $(".col_2.option_3 #subject").live('click',function () {
		   $(".col_3").hide("fast");     $(".col_3.option_2").show("fast");   $(".col_4").show("fast");   });

	
	
	
	<!--********************************************************************************************************************-->	   
	
	
	
	
	   $(".button.prsp_online").live('click',function () {
				//toggle student type
				$(".toolbox").removeClass("formHeight");
				$(".button.prsp_online").addClass("current");    
				$(".button.prsp_download").removeClass("current");    
				$(".button.prsp_postal").removeClass("current");
				//reset the second panel
				$(".col_2").hide("fast");     $(".col_2.option_1").show("fast");   $(".col_4").hide("fast");	
				//reset the third panel
				$(".col_3").hide("fast");   			
	   });
	   
	      
	   $(".button.prsp_download").live('click',function () {
				//toggle student type
				$(".toolbox").removeClass("formHeight");
				$(".button.prsp_online").removeClass("current");  
				$(".button.prsp_download").addClass("current");   
				$(".button.prsp_postal").removeClass("current");
				//reset the second panel
				$(".col_2").hide("fast");     $(".col_2.option_2").show("fast");     $(".col_4").hide("fast");	
				//reset the third panel
				$(".col_3").hide("fast");    		
	   });
	    
	   
	   $(".button.prsp_postal").live('click',function () {
				//toggle student type
				
				$(".toolbox").addClass("formHeight");
				$(".button.prsp_online").removeClass("current");   
				$(".button.prsp_download").removeClass("current");   
				$(".button.prsp_postal").addClass("current");
				//reset the second panel
				$(".col_2").hide("fast");       $(".col_2.option_3").show("fast");	  $(".col_4").show("fast");	
				//reset the third panel
				$(".col_3").hide("fast");  
	   });
	   
     <!--*******************-->	    
	   
	      
	   $(".button.odays_undergrad").live('click',function () {
				//toggle student type
				$(".toolbox").addClass("formHeight");
				$(".button.odays_undergrad").addClass("current");   
				$(".button.odays_postgrad").removeClass("current");  
				//reset the second panel
				$(".col_2").hide("fast");     $(".col_2.option_1").show("fast");     $(".col_4").hide("fast");	
				//reset the third panel
				$(".col_3").hide("fast");    		
	   });
	    
	   
	   $(".button.odays_postgrad").live('click',function () {
				//toggle student type
				
				$(".toolbox").addClass("formHeight");
				$(".button.odays_undergrad").removeClass("current");   
				$(".button.odays_postgrad").addClass("current");   
				//reset the second panel
				$(".col_2").hide("fast");       $(".col_2.option_2").show("fast");	  $(".col_4").hide("fast");	
				//reset the third panel
				$(".col_3").hide("fast");  
	   });


}




