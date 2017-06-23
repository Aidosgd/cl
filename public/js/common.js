"use strict";
$(document).ready(function () {
    function d(a, b, c) {
        $(a).waypoint(function (d) {
            var e = $(a).find(".skillbar__percentage"), f = parseInt(e.data("skillbar-percent"), 10),
                g = $(a).find(".skillbar__progress-bar");
            $(g).find(".skillbar__progress-bar-active").css({transform: "translateX(" + f + "%)"}), $({countNum: 0}).stop().animate({countNum: f}, {
                duration: b,
                easing: c,
                step: function () {
                    e.text(parseInt(this.countNum, 10) + 1 + "%")
                },
                complete: function () {
                    stop(), f = 0
                }
            }), this.destroy()
        }, {offset: "100%"})
    }

    $("body").easeScroll({
        frameRate: 60,
        animationTime: 1e3,
        stepSize: 120,
        pulseAlgorithm: !0,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: !0,
        arrowScroll: 50
    });
    var a = $("#js-scroll-to-top");
    if ($(window).on("scroll", function (b) {
            $(this).scrollTop() > 0 ? a.fadeIn() : a.fadeOut()
        }), a.on("click", function (a) {
            a.preventDefault(), $("body,html").animate({scrollTop: 0}, 400)
        }), $("#js-toggle-menu").on("click", function (a) {
            a.preventDefault(), $(".top-navigation__menu").slideToggle(), $(".list-submenu").slideUp()
        }), $(".list-top-menu__item_has-submenu > .list-top-menu__link").on("click", function (a) {
            if (a.preventDefault(), $(window).width() < 992) {
                var b = $(this).next(".list-submenu");
                $(".list-submenu").slideUp(), b.is(":visible") ? b.slideUp() : b.slideDown()
            }
        }), $("body").imagesLoaded({background: !0}).always(function (a) {
            $(".js-jarallax_type_1").jarallax({
                type: "scroll",
                speed: .4
            }), $(".js-jarallax_type_2").jarallax({type: "scroll", speed: .9});
            var j = (new Swiper(".js-slider-intro", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                prevButton: ".slider-intro__prev",
                nextButton: ".slider-intro__next"
            }), new Swiper(".js-slider-experts", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                prevButton: ".slider-experts__prev",
                nextButton: ".slider-experts__next"
            }), new Swiper(".js-slider-testimonials", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                prevButton: ".slider-testimonials__prev",
                nextButton: ".slider-testimonials__next",
                spaceBetween: 30,
                slidesPerView: 3,
                autoHeight: !0,
                breakpoints: {1200: {slidesPerView: 2}, 992: {slidesPerView: 1}}
            }), new Swiper(".js-slider-testimonials-2", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                spaceBetween: 30,
                slidesPerView: 2,
                autoHeight: !0,
                pagination: ".slider-testimonials-2__pagination",
                paginationClickable: !0,
                bulletClass: "slider-testimonials-2__bullet",
                bulletActiveClass: "slider-testimonials-2__bullet_active",
                paginationModifierClass: "slider-testimonials-2__pagination-",
                breakpoints: {992: {slidesPerView: 1}}
            }), new Swiper(".js-slider-team", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                prevButton: ".slider-team__prev",
                nextButton: ".slider-team__next",
                spaceBetween: 30,
                slidesPerView: 4,
                autoHeight: !0,
                breakpoints: {992: {slidesPerView: 2}, 768: {slidesPerView: 1}}
            }), new Swiper(".js-slider-gallery", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                autoHeight: !0,
                prevButton: ".slider-gallery__prev",
                nextButton: ".slider-gallery__next"
            }), new Swiper(".js-slider-services-related", {
                onlyExternal: !0,
                loop: !0,
                speed: 400,
                spaceBetween: 30,
                slidesPerView: 3,
                autoHeight: !0,
                prevButton: ".slider-services-related__prev",
                nextButton: ".slider-services-related__next",
                breakpoints: {768: {slidesPerView: 2}, 480: {slidesPerView: 1}}
            }), new Swiper(".js-slider-gallery-about", {
                onlyExternal: !0,
                loop: !1,
                speed: 400,
                autoHeight: !0,
                spaceBetween: 30,
                slidesPerView: 4,
                prevButton: ".slider-gallery__prev",
                nextButton: ".slider-gallery__next",
                breakpoints: {992: {slidesPerView: 3}, 768: {slidesPerView: 2}, 480: {slidesPerView: 1}}
            }), new Swiper(".js-slider-services", {
                onlyExternal: !0,
                direction: "vertical",
                speed: 400,
                height: 370,
                centeredSlides: !0,
                grabCursor: !0
            })), k = new Swiper(".js-slider-services-controls", {
                onlyExternal: !0,
                direction: "vertical",
                speed: 400,
                height: 370,
                slidesPerView: 6,
                centeredSlides: !0,
                slideToClickedSlide: !0,
                prevButton: ".slider-services-controls__prev",
                nextButton: ".slider-services-controls__next"
            });
            j.params.control = k, k.params.control = j;
            var l = $(".js-masonry-grid-works");
            $(l).masonry({
                itemSelector: ".js-masonry-grid-works__item",
                columnWidth: ".js-masonry-grid-works__sizer",
                percentPosition: !0
            }).isotope(), $(".js-masonry-grid-works-filter").on("click", "a", function (a) {
                a.preventDefault();
                var b = $(this).attr("data-filter");
                $(".js-masonry-grid-works-filter").find(".list-masonry-grid-works-filter__link_active").removeClass("list-masonry-grid-works-filter__link_active"), $(this).addClass("list-masonry-grid-works-filter__link_active"), $(l).isotope({filter: b})
            }), $(".js-popup-gallery").magnificPopup({
                delegate: "a",
                type: "image",
                tLoading: "Loading image #%curr%...",
                mainClass: "mfp-img-mobile",
                gallery: {enabled: !0, navigateByImgClick: !0, preload: [0, 1]},
                image: {tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'}
            })
        }), Modernizr.touch && [].slice.call(document.querySelectorAll("a, button")).forEach(function (a, b) {
            var c = !1;
            a.addEventListener("touchmove", function (a) {
                a.stopPropagation(), c = !0
            }), a.addEventListener("touchstart", function (a) {
                a.stopPropagation(), c = !1
            })
        }), $(".js-figure-serivce-equalheight").equalHeights(), $(".js-team-member-equalheight").equalHeights(), $("#js-google-map-locations").length) {
        var b = [{
            lat: 43.245175,
            lon: 76.824076,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #1</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.465109,
            lon: 9.184197,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #2</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.46529,
            lon: 9.185679,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #3</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.463912,
            lon: 9.18271,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #4</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.463015,
            lon: 9.182929,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #5</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.464991,
            lon: 9.18205,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #6</p>',
            icon: "img/icons/map-marker.png"
        }, {
            lat: 45.463991,
            lon: 9.18705,
            title: "Title A1",
            html: '<p class="p">Cleaning Center #6</p>',
            icon: "img/icons/map-marker.png"
        }];
        new Maplace({
            map_div: "#js-google-map-locations",
            locations: b,
            controls_type: "list",
            controls_on_map: !1
        }).Load();
        $("#js-expand-map-link").on("click", function (a) {
            a.preventDefault(), $(this).toggleClass("expand-map-link_expanded"), $("#js-overlay-map").toggleClass("overlay-map_expanded")
        })
    }
    if ($("#js-google-map-contacts").length) {
        new Maplace({
            map_div: "#js-google-map-contacts",
            locations: [{
                lat: 43.237235,
                lon: 76.915048,
                title: "Title A1",
                html: '<p class="p">EXPERT CLEANING</p>',
                icon: "img/icons/map-marker-2.png",
                zoom: 17
            }],
            controls_type: "list",
            controls_on_map: !1,
            styles: {
                Night: [{featureType: "all", stylers: [{invert_lightness: "true"}]}],
                Greyscale: [{featureType: "all", stylers: [{saturation: -100}, {gamma: .8}]}]
            },
            map_options: {scrollwheel: !1}
        }).Load()
    }
    $.ionTabs("#js-overlay-map__content", {type: "none"}), $.ionTabs("#js-services-tabs", {type: "none"}), $("#js-toggle-estimate").on("click", function (a) {
        $("#js-form-estimate").slideToggle()
    }), $(".js-skillbar").each(function () {
        d(this, 3e3, "easeInOutCubic")
    }), $(".js-counterup").counterUp({
        delay: 10, time: 3e3, formatter: function (a) {
            return a.replace(/,/g, ".")
        }
    }), $(".js-skillcircle").each(function (a) {
        var b = $(this);
        b.waypoint(function (a) {
            var c = b.data("circle-percent");
            b.circleProgress({
                value: c / 100,
                size: 200,
                thickness: "10",
                startAngle: 1.5 * Math.PI,
                animation: {duration: 3e3, easing: "easeInOutCubic"},
                fill: "#26c9ff",
                emptyFill: "#f5f5f5"
            }).on("circle-animation-progress", function (a, b) {
                var d = parseInt(c * b, 10);
                $(this).find(".skillcircle__value").html(d + "%")
            }), this.destroy()
        }, {offset: "100%"})
    }), $("[data-accordion]").accordion({transitionSpeed: 400, singleOpen: !0})
});