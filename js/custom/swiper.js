jQuery(document).ready(function($) {

    var clients_swiper = new Swiper ('.clients-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: false,
        navigation: {
            nextEl: '.clients-next.swiper-button-next',
            prevEl: '.clients-prev.swiper-button-prev',
        },
        breakpoints: {
            800: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            }
        }
    });
    
    var testimonials_swiper = new Swiper ('.testimonials-container', {
        loop: false,
        pagination: {
            el: '.testimonials-pagination.swiper-pagination',
        },
    });

});