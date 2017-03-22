/**
 * Created by haiye_000 on 22-Mar-17.
 */
$(document).ready(function () {
    $(".slider-main").owlCarousel({
        navigation: false,
        items: 1,
        itemsCustom: false,
//            navigationText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],

        pagination: true,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        paginationSpeed: 1300,
        rewindSpeed: 1000,
        slideSpeed: 1000,
        autoPlay: true
    });

    if (window.innerWidth > 1024) {
        $(window).scroll(function () {
            if ($(window).scrollTop() >=150) {
                $('.banner_fix').addClass('fixed_bn');
            }
            else {
                $('.banner_fix').removeClass('fixed_bn');
            }
        });
    }
});
