//Master Javascript file
//version:   4.0

// Loads up the various functions we are going to use
$(document).ready(function(){
	jsEnabled();
	addFades();
});


// Adds a class to the body tag so any elements on the page can be styled differently if the browser supports JS
function jsEnabled(i) { 
	$("body").addClass("jsEnabled");
}

function newwindow() {
	$(".email a").click(function(){
			window.open (this.href, "mywindow","resizable=1,width=550,height=450"); 	
			return false;
	});
};

//Lighbox function
function lighbox(i) {
    $('.box a').lightBox();
}

function addOverlay (i) {
	$(".overlayCurve").wrap('<span class="curvedImage"></span>');
	$(".curvedImage").append('<span class="curveBr">&nbsp;</span>');
}

//Fadeing elements script


function addFades9() {
	$("#users li").fadeTo("slow", 0.8); // This sets the opacity of the thumbs to fade down to 60% when the page loads
	$("#users li").hover(function(){
		$(this).fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
	},function(){
		$(this).fadeTo("slow", 0.6); // This should set the opacity back to 60% on mouseout
	});
}
