$(document).ready(function() {

	//Parallax effect
	$('.parallax-section-1').parallax({
		speed : 0.15
	});

	//Detectar si hay scrollbar
	if ($("body").height() > $(window).height()) {
        //alert("Vertical Scrollbar! D:");
        getScrollBarWidth();
    }

	function getScrollBarWidth () {
	    var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
	        widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
	    $outer.remove();
	    //alert( 100 - widthWithScroll );
	    //return 100 - widthWithScroll;
	};


});