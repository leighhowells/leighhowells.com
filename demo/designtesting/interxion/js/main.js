$(function(){
	
	mobileMenus();
	languageMenu();
	masks();
	
	if (!badIE){
	}
	
});


function mobileMenus(){
	$('#pNav, #toolsNav, #counryNav, #siteSearch').hide();
	
	$('#toggleSiteMenu').click(function(event){
		event.preventDefault();
		
		if ($(this).parent().hasClass('active')){
			$('#pNav, #toolsNav').slideUp();
			$(this).parent().removeClass('active');
		
		} else {
			$('#pNav, #toolsNav, #countryNav, #siteSearch').slideUp('fast');
			$('#mobileNav li').removeClass('active');
			$(this).parent().toggleClass('active');
			$('#pNav, #toolsNav').slideDown();		
		}
	});
	
	$('#toggleSiteSearch').click(function(event){
		event.preventDefault();
		
		if ($(this).parent().hasClass('active')){
			$('#siteSearch').slideUp();
			$(this).parent().removeClass('active');
		
		} else {
			$('#pNav, #toolsNav, #countryNav, #siteSearch').slideUp('fast');
			$('#mobileNav li').removeClass('active');
			$(this).parent().toggleClass('active');
			$('#siteSearch').slideDown();		
		}
	});
	
	$('#toggleCountryNav').click(function(event){
		event.preventDefault();
		
		if ($(this).parent().hasClass('active')){
			$('#countryNav').slideUp();
			$(this).parent().removeClass('active');
		
		} else {
			$('#pNav, #toolsNav, #countryNav, #siteSearch').slideUp('fast');
			$('#mobileNav li').removeClass('active');
			$(this).parent().toggleClass('active');
			$('#countryNav').slideDown();		
		}
	});
	
	
	
		$('#contactForm').click(function(event){
		event.preventDefault();
		
		if ($(this).parent().hasClass('active')){
			$('#contactus').slideUp('fast');
			$(this).parent().removeClass('active');
		
		} else {
			$('#contactus').slideUp('fast');
			$(this).parent().toggleClass('active');
			$('#contactus').slideDown('fast');
					
		}
	});
	
	
}


function languageMenu(){
	$('#countryNav').removeClass('noJS');
	
	$('#countryNav').click(function(event){
	
		if (window.innerWidth >= 720 || $('#header').width() >= 720){
			$(this).toggleClass('active');
			$('#transparentMask').toggle();
		}		
	});
	
	$('#countryNav > a').click(function(event){
		event.preventDefault();
	});
}

function masks(){
	$('<div id="transparentMask"></div>').appendTo('body');
	
	$('#transparentMask').click(function(){
		$(this).hide();
		$('#countryNav').removeClass('active');
	});
}