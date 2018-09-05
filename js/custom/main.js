jQuery(document).ready(function($) {
    function screen_width() {
		return $(window).width();
	}
    
    function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};

			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	}
    
//    $('ul.sub-menu').superfish('destroy');
    
    $(".js-superfish.menu").superfish({ 
        delay:       100,                           
        animation:   {opacity:'show',height:'show'},
        speed:       1,                          
        autoArrows:  true,                           
        dropShadows: true,
        disableHI:   true                   
    });
    
    $('.menu-item-has-children > a').append('<i class="fa fa-angle-down"></i>');
    
});