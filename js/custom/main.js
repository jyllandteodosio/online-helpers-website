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

    var responsive_menu_icons = '<div class="responsive-menu-icons">'
    +'<a href="#" class="contact-us-menu"><i class="fa fa-phone"></i><span>Contact Us</span></a>'
    +'<a href="#" class="live-chat-menu"><i class="fa fa-comments"></i><span>Live Chat</span></a>'
    +'<a href="#" class="responsive-menu-icon">MENU</a>'
    +'</div>';

    $('.title-area').append(responsive_menu_icons);

    $(window).resize(function(){
        if(screen_width() <= 768) {
            $('.site-header .widget-area').hide();
        } else {
            $('.site-header .widget-area').show();
        }
    });

    $(document).on('click', '.responsive-menu-icon', function() {
        $('.site-header .widget-area').slideToggle();
    });

    $(".js-superfish.menu").superfish({ 
        delay:       100,                           
        animation:   {opacity:'show',height:'show'},
        speed:       1,                          
        autoArrows:  true,                           
        dropShadows: true,
        disableHI:   true                   
    });

    $('.menu-item-has-children > a').append('<i class="fa fa-angle-down"></i>');


    // Select all links with hashes
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {

        if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {

                event.preventDefault();

                $('html, body').animate({
                    scrollTop: target.offset().top - 60

                }, 1000, function() {
                    var $target = $(target);
                    //                    $target.focus();

                    if ($target.is(":focus")) { 
                        return false;
                    } else {
                        $target.attr('tabindex','-1');
                        //                        $target.focus();
                    };

                });

            }
        }

    });

});