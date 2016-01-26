jQuery(document).ready(function ($) {
    "use strict";

    /*********** PRELOADER ******************/
    $(".preloader-wrap div").delay(1500).fadeOut('slow');
    $(".preloader-wrap").delay(2000).fadeOut('slow');

    /*********** PRODUCT GALLERY ******************/
    $('#demo-1').find('.simpleLens-thumbnails-container img').simpleGallery({});
    $('#demo-1').find('.simpleLens-big-image').simpleLens({});

    /*********** MENU DROPDOWNS **************/
    $('.menu-trigger a').on('click', function (e) {
        e.preventDefault();
        $('.cart-dropdown, .sign-up-dropdown, .filter-dropdown').removeClass('active');
        $(this).closest('.header-wrapper').children(".menu-dropdown").toggleClass("active");
        $(this).children('.icon').delay(300).toggleClass('open');
    });
    $('.cart a').on('click', function (e) {
        e.preventDefault();
        $('.menu-dropdown, .sign-up-dropdown, .filter-dropdown').removeClass('active');
        $('.menu-trigger a').children('.icon').delay(300).removeClass('open');
        $(this).closest('.header-wrapper').children(".cart-dropdown").toggleClass("active");
    });
    $('.sign-up a').on('click', function (e) {
        e.preventDefault();
        $('.menu-dropdown, .cart-dropdown, .filter-dropdown').removeClass('active');
        $('.menu-trigger a').children('.icon').delay(300).removeClass('open');
        $(this).closest('.header-wrapper').children(".sign-up-dropdown").toggleClass("active");
    });
    $('.filter a.trigger').on('click', function (e) {
        e.preventDefault();
        $('.sign-up-dropdown, .menu-dropdown, .cart-dropdown').removeClass('active');
        $('.menu-trigger a').children('.icon').delay(300).removeClass('open');
        $(".filter-dropdown").toggleClass("active");
    });

    /******* FEATURED SLIDER **********/
    function checkitem() {
        $('[id^="featured"]').on('slid.bs.carousel', '', function () {
            if ($(this).find('.carousel-inner .item:first').hasClass("active")) {
                $(this).closest('.container-fluid').find(".controls .left").fadeTo("slow", .33).css('cursor', 'default');
                $(this).closest('.container-fluid').find(".controls .right").fadeTo("slow", 1).css('cursor', 'pointer');
            } else {
                $(this).closest('.container-fluid').find(".controls .left").fadeTo("slow", 1).css('cursor', 'pointer');
                $(this).closest('.container-fluid').find(".controls .right").fadeTo("slow", .33).css('cursor', 'default');
            }
        });
    }

    checkitem();
    $('[id^="featured"]').carousel({
        wrap: false,
        cycle: false,
        interval: 7000
    });

    /********* GALLERY **********/
    $('.flex-images').flexImages({
        rowHeight: 400
    });

    /********* SIDEBAR HEIGHT ***********/
    $(".sidebar").outerHeight($(".body-content").outerHeight() - 58);
    $(".sidebar").outerHeight($(".products").outerHeight());

    $(".sidebar.shop-single").outerHeight($(".product-single-wrap").outerHeight() - 3);


    /********* SIDEBAR SCROLL **********/
    function start_nano() {
        if ($(window).width() < 992) {
            $(".nano").nanoScroller({destroy: true});
            $(".blog-single-content-wrap").height('auto');
            $(".nano-content").css('position', 'relative');
        }
        else {
            $(".blog-single-content-wrap").height($(".blog-single-media").height());
            $(".sidebar.shop-single").height($(".product-single-wrap").outerHeight(true));
            $(".nano-content").css('position', 'absolute');
            $(".nano").nanoScroller({
                sliderMaxHeight: 200,
                sliderMinHeight: 40
            });
        }
    }

    $('.product-single-tabs a[data-toggle="tab"]').on('click', function () {
        setTimeout(function () {
            start_nano();
        }, 200);
    });

    start_nano();

    $(window).load(function () {
        start_nano();
    });

    $(window).resize(function () {
        start_nano();
    });
    /******** HOME SLIDER *****************/
    $('#home-carousel').carousel({
        interval: 10000,
        pause: true
    });
    $('#home-carousel').on('slide.bs.carousel', function (e) {
        $(e.relatedTarget).find('img').css('opacity', '0');
        $(e.relatedTarget).find('img').animate({
            opacity: 1
        }, 400);
        $(e.relatedTarget).find('.carousel-caption').hide();
    });
    $('#home-carousel').on('slid.bs.carousel', function () {
        $('#home-carousel').find('.item.active').find('.carousel-caption').fadeIn(1000);
    });

    /******** LOGO SLIDER *********/
    $('#myCarousel').carousel({
        interval: 8000
    });

    /************* MEGA MENU **************/
    $('.mega-menu').slideUp();
    $('.main-nav ul li').on('hover', function () {
        $(this).children('.mega-menu').stop(true, true).slideToggle(300);
    });
    $('.top-action-menu ul li').on('hover', function () {
        $(this).children('.mega-menu').stop(true, true).slideToggle(300);
    });

    /************* ACTIVE HOVER STATE ON SMALL SCREENS **************/
    if ($(window).width() < 1030) {
        $('.product-image').addClass('hover');
    }

    /************* ACCORDION ACTIVE STATE **************/
    $('#accordion').find('.panel-heading a').on('click', function () {
        if ($(this).closest('#accordion .panel-heading').hasClass('plus')) {
            $(this.closest('#accordion .panel-heading')).removeClass('plus');
        }
        else {
            $('#accordion').find('.panel-heading').removeClass('plus');
            $(this).closest('#accordion .panel-heading').toggleClass('plus');
        }
    });


});
