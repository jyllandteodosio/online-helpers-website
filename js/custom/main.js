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

    function adjustWidth() {
        var parentwidth = $(".site-container").width();
        $(".site-header").width(parentwidth);
    }

    adjustWidth();

    $(window).resize(function() {
        console.log('adjusting header width');
        adjustWidth();
    });

    //    var responsive_menu_icons = '<div class="responsive-menu-icons">'
    //    +'<a href="https://onlinehelpers.com.au/contact-us/" class="contact-us-menu"><i class="fas fa-phone"></i><span>Contact Us</span></a>'
    //    +'<a href="#" class="live-chat-menu"><i class="fas fa-comments"></i><span>Live Chat</span></a>'
    //    +'<a href="#" class="responsive-menu-icon">MENU</a>'
    //    +'</div>';

    var responsive_menu_icons = '<div class="responsive-menu-icons">'
    +'<a href="tel:1300536626" class="contact-us-menu"><i class="fas fa-phone"></i><span>Contact Us</span></a>'
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

    $('.menu-item-has-children > a').append('<i class="fas fa-angle-down"></i>');

    if(screen_width() <= 768) {
        $('.menu-item-has-children').append('<i class="fas fa-angle-down mobile-expand"></i>');

        $(document).on('click', '.mobile-expand', function() {

            $(this).parents('.menu-item-has-children').find('ul.sub-menu').slideToggle();
            
            if($(this).hasClass('fa-angle-down')) {
                $(this).addClass('fa-angle-up');
                $(this).removeClass('fa-angle-down');
            } else {
                $(this).addClass('fa-angle-down');
                $(this).removeClass('fa-angle-up');
            }
        });
    } else {
        $('.mobile-expand').remove();
    }

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


    // Help Item - trigger link
    $('.help-item').click(function() {
        var help_link = $(this).find('.help-link');
        help_link[0].click();
    });

});