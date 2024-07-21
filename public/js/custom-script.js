(function($) {
    "use strict";
    if ($('#switch-toggle-tab').length) { var toggleSwitch = $('#switch-toggle-tab label.switch'); var TabTitle = $('#switch-toggle-tab li'); var monthTabTitle = $('#switch-toggle-tab li.month'); var yearTabTitle = $('#switch-toggle-tab li.year'); var monthTabContent = $('#month'); var yearTabContent = $('#year');
        monthTabContent.show();
        yearTabContent.hide();

        function toggleHandle() { if (toggleSwitch.hasClass('on')) { yearTabContent.hide();
                monthTabContent.show();
                monthTabTitle.addClass('active');
                yearTabTitle.removeClass('active'); } else { monthTabContent.hide();
                yearTabContent.show();
                yearTabTitle.addClass('active');
                monthTabTitle.removeClass('active'); } };
        monthTabTitle.on('click', function() { toggleSwitch.addClass('on').removeClass('off');
            toggleHandle(); return false; });
        yearTabTitle.on('click', function() { toggleSwitch.addClass('off').removeClass('on');
            toggleHandle(); return false; });
        toggleSwitch.on('click', function() { toggleSwitch.toggleClass('on off');
            toggleHandle(); }); }

    function dynamicCurrentMenuClass(selector) { let FileName = window.location.href.split("/").reverse()[0];
        selector.find("li").each(function() { let anchor = $(this).find("a"); if ($(anchor).attr("href") == FileName) { $(this).addClass("current"); } });
        selector.children("li").each(function() { if ($(this).find(".current").length) { $(this).addClass("current"); } }); if ("" == FileName) { selector.find("li").eq(0).addClass("current"); } }
    if ($(".main-menu .navigation").length) { let mainNavUL = $(".main-menu .navigation");
        dynamicCurrentMenuClass(mainNavUL); }
    if ($(".checkout__payment__title").length) { $(".checkout__payment__item").find(".checkout__payment__content").hide();
        $(".checkout__payment__item--active").find(".checkout__payment__content").show();
        $(".checkout__payment__title").on("click", function(e) { e.preventDefault();
            $(this).parents(".checkout__payment").find(".checkout__payment__item").removeClass("checkout__payment__item--active");
            $(this).parents(".checkout__payment").find(".checkout__payment__content").slideUp();
            $(this).parent().addClass("checkout__payment__item--active");
            $(this).parent().find(".checkout__payment__content").slideDown(); }); }
    if ($(".range-slider-price").length) { var priceRange = document.getElementById("range-slider-price"); var priceRangeMin = $(".range-slider-price").data("range-min"); var priceRangeMax = $(".range-slider-price").data("range-max"); var priceRangeStartMin = $(".range-slider-price").data("start-min"); var priceRangeStartMax = $(".range-slider-price").data("start-max"); var priceRangeLimit = $(".range-slider-price").data("limit");
        noUiSlider.create(priceRange, { start: [priceRangeStartMin, priceRangeStartMax], limit: priceRangeLimit, behaviour: "drag", connect: true, format: wNumb({ decimals: 0 }), range: { min: priceRangeMin, max: priceRangeMax } }); var limitFieldMin = document.getElementById("min-value-rangeslider"); var limitFieldMax = document.getElementById("max-value-rangeslider");
        priceRange.noUiSlider.on("update", function(values, handle) {
            (handle ? $(limitFieldMax) : $(limitFieldMin)).text(values[handle]); }); }
    if ($(".add").length) { $(".add").on("click", function() { if ($(this).prev().val() < 999) { $(this).prev().val(+$(this).prev().val() + 1); } }); }
    if ($(".sub").length) {
        $(".sub").on("click", function() {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1)
                    $(this).next().val(+$(this).next().val() - 1);
            }
        });
    }
    if ($(".countdown-one__list").length) { let mainDate = $(".countdown-one__list").data("deadline-date"); let yearsCondition = (undefined == $(".countdown-one__list").data("enable-years")) ? false : $(".countdown-one__list").data("enable-years"); let daysCondition = (undefined == $(".countdown-one__list").data("enable-days")) ? true : $(".countdown-one__list").data("enable-days"); let leadingZeros = $(".countdown-one__list").data("leading-zeros");
        console.log(daysCondition); let deadLine = "dynamicDate" == mainDate ? new Date(Date.parse(new Date()) + 31 * 24 * 60 * 60 * 1000) : "dynamicHour" == mainDate ? new Date(Date.parse(new Date()) + 24 * 60 * 60 * 1000) : mainDate;
        $(".countdown-one__list").countdown({ date: deadLine, leadingZeros: true, render: function(date) { this.el.innerHTML = (true == yearsCondition ? "<li> <span class='years'> " + (true == leadingZeros ? this.leadingZeros(date.years) : date.years) + " <i> Years </i> </span> </li>" : " ") + (true == daysCondition ? "<li> <span class='days'> " + (true == leadingZeros ? this.leadingZeros(date.days) : date.days) + " <i> Days </i> </span> </li>" : " ") + "<li> <span class='hours'>" + (true == leadingZeros ? this.leadingZeros(date.hours) : date.hours) + " <i> Hours </i> </span> </li>" + "<li> <span class='minutes'> " + (true == leadingZeros ? this.leadingZeros(date.min) : date.min) + " <i> Minutes </i> </span> </li>" + "<li> <span class='seconds'>" + (true == leadingZeros ? this.leadingZeros(date.sec) : date.sec) + " <i> Seconds </i> </span> </li>"; } }); }
    if ($(".boxed-switcher").length) { $(".boxed-switcher").on("click", function() { $("body").toggleClass("boxed-wrapper");
            $(".page-wrapper").toggleClass("boxed-wrapper"); }); }
    if ($(".dark-switcher").length) { $(".dark-switcher").on("click", function(e) { e.preventDefault();
            $("body").toggleClass("body-dark"); }); }

    function handlePreloader() { if ($(".preloader").length) { $("body").addClass("page-loaded");
            $(".preloader").delay(300).fadeOut(0); } }

    function headerStyle() { if ($(".main-header").length) { var windowpos = $(window).scrollTop(); var siteHeader = $(".main-header"); var sticky_header = $(".main-header .sticky-header"); if (windowpos > 120) { siteHeader.addClass("fixed-header");
                sticky_header.addClass("animated slideInDown"); } else { siteHeader.removeClass("fixed-header");
                sticky_header.removeClass("animated slideInDown"); } } }
    headerStyle();
    if ($(".main-header li.dropdown ul").length) { $(".main-header .navigation li.dropdown > a").append('<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>'); }
    if ($(".side-menu__block").length) { var mobileMenuContent = $(".main-header .nav-outer .main-menu").html(); var mobileNavContainer = $(".mobile-nav__container");
        mobileNavContainer.append(mobileMenuContent);
        mobileNavContainer.find("li.dropdown .dropdown-btn").on("click", function(e) { e.preventDefault();
            $(this).toggleClass("open");
            $(this).parent("a").parent("li").children("ul").slideToggle(500); });
        $(".mobile-nav-toggler").on("click", function() { $(".side-menu__block").addClass("active"); });
        $(".side-menu__block-overlay,.side-menu__toggler, .scrollToLink").on("click", function(e) { $(".side-menu__block").removeClass("active");
            e.preventDefault(); }); }
    if ($(".search-popup").length) { $(".search-toggler").on("click", function() { $(".search-popup").addClass("active"); });
        $(".search-popup__overlay").on("click", function(e) { $(".search-popup").removeClass("active");
            e.preventDefault(); });
        $(document).keydown(function(e) { if (e.keyCode === 27) { $(".search-popup").addClass("active"); } }); }
    if ($(".custom-cursor__overlay").length) { var cursor = $(".custom-cursor__overlay .cursor"),
            follower = $(".custom-cursor__overlay .cursor-follower"); var posX = 0,
            posY = 0; var mouseX = 0,
            mouseY = 0;
        TweenMax.to({}, 0.016, { repeat: -1, onRepeat: function() { posX += (mouseX - posX) / 9;
                posY += (mouseY - posY) / 9;
                TweenMax.set(follower, { css: { left: posX - 22, top: posY - 22 } });
                TweenMax.set(cursor, { css: { left: mouseX, top: mouseY } }); } });
        $(document).on("mousemove", function(e) { var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            mouseX = e.pageX;
            mouseY = e.pageY - scrollTop; });
        $("button, a").on("mouseenter", function() { cursor.addClass("active");
            follower.addClass("active"); });
        $("button, a").on("mouseleave", function() { cursor.removeClass("active");
            follower.removeClass("active"); });
        $(".custom-cursor__overlay").on("mouseenter", function() { cursor.addClass("close-cursor");
            follower.addClass("close-cursor"); });
        $(".custom-cursor__overlay").on("mouseleave", function() { cursor.removeClass("close-cursor");
            follower.removeClass("close-cursor"); }); }
    if ($(".banner-carousel").length) { $(".banner-carousel").owlCarousel({ loop: true, animateOut: "fadeOut", animateIn: "fadeIn", margin: 0, nav: true, smartSpeed: 500, autoplay: 6000, autoplayTimeout: 7000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 992: { items: 1 } } }); }
    if ($(".portfolio-horizontal__carousel").length) { $(".portfolio-horizontal__carousel").owlCarousel({ loop: true, margin: 20, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, dots: false, navText: ['<span class="icon nav-button-left"></span>', '<span class="icon nav-button-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 2 }, 992: { items: 3 }, 1200: { items: 4 }, 1500: { items: 4 }, 1600: { items: 4 } } }); }
    if ($(".portfolio-horizontal-two__carousel").length) {
        var myCarousel = $(".portfolio-horizontal-two__carousel");
        var textCountWrap = $(".portfolio-horizontal-two__carousel__count");
        var dotsBlock = $(".portfolio-horizontal-two__carousel__progress");
        myCarousel.on("initialized.owl.carousel changed.owl.carousel", function(e) {
            var carousel = e.relatedTarget;
            console.log(carousel);
            if (!e.namespace) { return; }
            var text = '<span class="current-number">' + "0" + (carousel.relative(carousel.current()) + 1) + "</span>" + '<span class="sep">/</span>' + '<span class="counted-number">' + "0" + carousel.items().length + "</span>";
            textCountWrap.html(text);
            var dotIndex = carousel.relative(carousel.current());
            dotsBlock.find("li").removeClass("active");
            dotsBlock.find("li").eq(dotIndex).addClass("active");
        }).owlCarousel({ loop: true, margin: 30, nav: false, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, dots: false, navText: ['<span class="icon nav-button-left"></span>', '<span class="icon nav-button-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 2, margin: 30 }, 992: { items: 3, margin: 30 }, 1200: { items: 4, margin: 40 }, 1500: { items: 4, margin: 50 }, 1600: { items: 5, margin: 50 } } });
        dotsBlock.on("click", "li", function(e) { myCarousel.trigger("to.owl.carousel", [$(this).index(), 300]); });
    }
    if ($(".team-carousel").length) { $(".team-carousel").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 2 }, 992: { items: 3 }, 1200: { items: 4 }, 1500: { items: 4 }, 1600: { items: 5 } } }); }
    if ($(".team-carousel__one-page").length) { $(".team-carousel__one-page").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 2 }, 992: { items: 3 }, 1200: { items: 3 }, 1500: { items: 3 }, 1600: { items: 3 } } }); }
    if ($(".sponsors-carousel").length) { $(".sponsors-carousel").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 2 }, 768: { items: 3 }, 992: { items: 4 }, 1200: { items: 5 } } }); }
    if ($(".project-carousel").length) { $(".project-carousel").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 768: { items: 2 }, 992: { items: 3 }, 1200: { items: 3 }, 1500: { items: 4 }, 1600: { items: 4 } } }); }
    if ($(".project-carousel-two").length) { $(".project-carousel-two").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 1 }, 768: { items: 2 }, 992: { items: 3 }, 1200: { items: 3 } } }); }
    if ($(".testimonials-carousel").length) { $(".testimonials-carousel").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 1 }, 768: { items: 1 }, 992: { items: 2 }, 1200: { items: 2 } } }); }
    if ($(".testimonials-carousel-two").length) { $(".testimonials-carousel-two").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 1 }, 768: { items: 1 }, 1200: { items: 1 } } }); }
    if ($(".testimonials-four-carousel").length) { $(".testimonials-four-carousel").owlCarousel({ loop: true, margin: 30, nav: false, smartSpeed: 700, autoplay: 5000, autoplayTimeout: 5000, autoplayHoverPause: true, dots: true, responsive: { 0: { items: 1 }, 600: { items: 1 }, 768: { items: 2 }, 1200: { items: 3 } } }); }
    if ($(".single-item-carousel").length) { $(".single-item-carousel").owlCarousel({ loop: true, margin: 30, nav: true, smartSpeed: 500, autoplay: 5000, autoplayTimeout: 5000, navText: ['<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>'], responsive: { 0: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1024: { items: 1 } } }); }
    if ($(".count-bar").length) { $(".count-bar").appear(function() { var el = $(this); var percent = el.data("percent");
            $(el).css("width", percent).addClass("counted"); }, { accY: -50 }); }
    if ($(".count-box").length) { $(".count-box").appear(function() { var $t = $(this),
                n = $t.find(".count-text").attr("data-stop"),
                r = parseInt($t.find(".count-text").attr("data-speed"), 10); if (!$t.hasClass("counted")) { $t.addClass("counted");
                $({ countNum: $t.find(".count-text").text() }).animate({ countNum: n }, { duration: r, easing: "linear", step: function() { $t.find(".count-text").text(Math.floor(this.countNum)); }, complete: function() { $t.find(".count-text").text(this.countNum); } }); } }, { accY: 0 }); }
    if ($(".dial").length) { $(".dial").appear(function() { var elm = $(this); var color = elm.attr("data-fgColor"); var perc = elm.attr("value"); var thickness = elm.attr("data-thickness");
            elm.knob({ value: 0, min: 0, max: 100, skin: "tron", readOnly: true, thickness: thickness, dynamicDraw: true, displayInput: false });
            $({ value: 0 }).animate({ value: perc }, { duration: 2000, easing: "swing", progress: function() { elm.val(Math.ceil(this.value)).trigger("change"); } }); }, { accY: 0 }); }
    if ($(".tabs-box").length) { $(".tabs-box .tab-buttons .tab-btn").on("click", function(e) { e.preventDefault(); var target = $($(this).attr("data-tab")); if ($(target).is(":visible")) { return false; } else { target.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn");
                $(this).addClass("active-btn");
                target.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0);
                target.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab"); } }); }
    if ($(".project-tab").length) { $(".project-tab .product-tab-btns .p-tab-btn").on("click", function(e) { e.preventDefault(); var target = $($(this).attr("data-tab")); if ($(target).hasClass("actve-tab")) { return false; } else { $(".project-tab .product-tab-btns .p-tab-btn").removeClass("active-btn");
                $(this).addClass("active-btn");
                $(".project-tab .p-tabs-content .p-tab").removeClass("active-tab");
                $(target).addClass("active-tab"); } }); }
    if ($(".accordion-box").length) { $(".accordion-box").on("click", ".acc-btn", function() { var outerBox = $(this).parents(".accordion-box"); var target = $(this).parents(".accordion"); if ($(this).next(".acc-content").is(":visible")) { $(this).removeClass("active");
                $(this).next(".acc-content").slideUp(300);
                $(outerBox).children(".accordion").removeClass("active-block"); } else { $(outerBox).find(".accordion .acc-btn").removeClass("active");
                $(this).addClass("active");
                $(outerBox).children(".accordion").removeClass("active-block");
                $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
                target.addClass("active-block");
                $(this).next(".acc-content").slideDown(300); } }); }
    if ($(".custom-select-box").length) { $(".custom-select-box").selectmenu().selectmenu("menuWidget").addClass("overflow"); }
    if ($(".date-picker").length) { $(".date-picker").datepicker(); }
    if ($(".lightbox-image").length) { $(".lightbox-image").fancybox({ openEffect: "fade", closeEffect: "fade", helpers: { media: {} } }); }
    if ($(".filter-list").length) { $(".filter-list").mixItUp({}); }
    if ($(".scroll-to-target").length) { $(".scroll-to-target").on("click", function() { var target = $(this).attr("data-target");
            $("html, body").animate({ scrollTop: $(target).offset().top }, 1000); return false; }); }
    if ($(".wow").length) { var wow = new WOW({ boxClass: "wow", animateClass: "animated", offset: 0, mobile: false, live: true });
        wow.init(); }

    function SmoothMenuScroll() {
        var anchor = $(".scrollToLink");
        if (anchor.length) {
            anchor.children("a").bind("click", function(event) {
                if ($(window).scrollTop() > 10) { var headerH = "0"; } else { var headerH = "0"; }
                var target = $(this);
                $("html, body").stop().animate({ scrollTop: $(target.attr("href")).offset().top - headerH + "px" }, 1200, "easeInOutExpo");
                anchor.removeClass("current");
                target.parent().addClass("current");
                event.preventDefault();
            });
        }
    }
    SmoothMenuScroll();

    function OnePageMenuScroll() { var windscroll = $(window).scrollTop(); if (windscroll >= 117) { var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
            menuAnchor.each(function() { var sections = $(this).attr("href");
                $(sections).each(function() { if ($(this).offset().top <= windscroll + 100) { var Sectionid = $(sections).attr("id");
                        $(".one-page-scroll-menu").find("li").removeClass("current");
                        $(".one-page-scroll-menu").find("a[href*=\\#" + Sectionid + "]").parent().addClass("current"); } }); }); } else { $(".one-page-scroll-menu li.current").removeClass("current");
            $(".one-page-scroll-menu li:first").addClass("current"); } }
    $(window).on("scroll", function() { headerStyle();
        OnePageMenuScroll(); if ($(".scroll-to-top").length) { var strickyScrollPos = 100; if ($(window).scrollTop() > strickyScrollPos) { $(".scroll-to-top").fadeIn(500); } else if ($(this).scrollTop() <= strickyScrollPos) { $(".scroll-to-top").fadeOut(500); } } });
    $(window).on("resize", function() {});
    $(window).on("load", function() {
        const swiperElm = document.querySelectorAll(".thm-swiper__slider");
        swiperElm.forEach(function(swiperelm) { const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions); let thmSwiperSlider = new Swiper(swiperelm, swiperOptions); });
        handlePreloader();
        if ($(".masonary-layout").length) { $(".masonary-layout").isotope({ layoutMode: "masonry", itemSelector: ".masonary-item" }); }
        if ($(".post-filter").length) { var postFilterList = $(".post-filter li");
            $(".filter-layout").isotope({ filter: ".filter-item", animationOptions: { duration: 500, easing: "linear", queue: false } });
            postFilterList.on("click", function() { var Self = $(this); var selector = Self.attr("data-filter");
                postFilterList.removeClass("active");
                Self.addClass("active");
                $(".filter-layout").isotope({ filter: selector, animationOptions: { duration: 500, easing: "linear", queue: false } }); return false; }); }
        if ($("#contact-form").length) { $("#contact-form").validate({ rules: { username: { required: true }, email: { required: true, email: true }, phone: { required: true }, subject: { required: true }, message: { required: true } } }); }
        if ($(".has-dynamic-filter-counter").length) { var activeFilterItem = $(".has-dynamic-filter-counter").find("li");
            activeFilterItem.each(function() { var filterElement = $(this).data("filter"); var count = $(".dynamic-filter-count-layout").find(filterElement).length;
                $(this).append("<sup>[" + count + "]</sup>");
                console.log(count); }); }
        if ($(".portfolio-masonary__filters").length) { $(".portfolio-masonary__filters").find("li").eq(0).addClass("active"); }
    });
})(window.jQuery);