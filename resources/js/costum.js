function aos_init() {
    AOS.init({
        duration: 1000,
        once: true,
    });
}
aos_init();

$(window).on("load", function () {
    if ($("#preloader").length) {
        $("#preloader")
            .delay(80)
            .fadeOut("slow", function () {
                $(this).remove();
            });
    }
});

// FORM
$(document).ready(function () {
    let jQuery221 = $.noConflict(true);
    const secondColor = "#7ed957";
    const primaryColor = "#4aa835";
    const grayColor = "#666666";
    const bgBrand = "#386b22";
    const bgFormItem = "#d9f3e6";

    // FORM
    $("input, textarea").each(function () {
        let elem = $(this);

        // Save current value of element
        elem.data("oldVal", elem.val());

        // Look for changes in the value
        elem.bind(
            "propertychange change click keyup input paste",
            function (event) {
                // If value has changed...
                if (elem.data("oldVal") != elem.val()) {
                    if (elem.val() != "") {
                        elem.css("background-color", secondColor);
                    } else {
                        elem.css("background-color", bgFormItem);
                    }
                    // Updated stored value
                    elem.data("oldVal", elem.val());
                }
            }
        );
    });
    // END FORM

    // CAMPUSGIRI
    $(".read-more").on("click", function () {
        $("#description").toggleClass("active");
        if ($("#description").hasClass("active")) {
            $(".read-more span").html("Hide");
            $(".symbol-read").attr(
                "class",
                "fas fa-long-arrow-alt-up fa-fw symbol-read"
            );
        } else {
            $(".read-more span").html("Read More ...");
            $(".symbol-read").attr(
                "class",
                "fas fa-long-arrow-alt-down fa-fw symbol-read"
            );
        }
    });

    // END CAMPUSGIRI
});
// PORTFOLIO

// Porfolio isotope and filter
$(window).on("load", function () {
    var portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
    });

    $("#portfolio-flters li").on("click", function () {
        $("#portfolio-flters li").removeClass("filter-active");
        $(this).addClass("filter-active");

        portfolioIsotope.isotope({
            filter: $(this).data("filter"),
        });
        aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function () {
        $(".venobox").venobox({
            share: false,
        });
    });
});
// END PORTFOLIO

// Smooth scroll for the navigation menu and links with .scrollto classes
var scrolltoOffset = $("#header").outerHeight() - 2;
$(document).on("click", ".nav-menu a, .mobile-nav a, .scrollto", function (e) {
    if (
        location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
    ) {
        var target = $(this.hash);
        if (target.length) {
            e.preventDefault();

            var scrollto = target.offset().top - scrolltoOffset;
            if ($(this).attr("href") == "#header") {
                scrollto = 0;
            }

            $("html, body").animate(
                {
                    scrollTop: scrollto,
                },
                1500,
                "easeInOutExpo"
            );

            if ($(this).parents(".nav-menu, .mobile-nav").length) {
                $(".nav-menu .active, .mobile-nav .active").removeClass(
                    "active"
                );
                $(this).closest("li").addClass("active");
            }

            if ($("body").hasClass("mobile-nav-active")) {
                $("body").removeClass("mobile-nav-active");
                $(".mobile-nav-toggle i").toggleClass(
                    "icofont-navigation-menu icofont-close"
                );
                $(".mobile-nav-overly").fadeOut();
            }
            return false;
        }
    }
});

// Activate smooth scroll on page load with hash links
$(document).ready(function () {
    if (window.location.hash) {
        var initial_nav = window.location.hash;
        if ($(initial_nav).length) {
            var scrollto = $(initial_nav).offset().top - scrolltoOffset;
            $("html, body").animate(
                {
                    scrollTop: scrollto,
                },
                1500,
                "easeInOutExpo"
            );
        }
    }
});

// Mobile Navigation
if ($(".nav-menu").length) {
    var $mobile_nav = $(".nav-menu").clone().prop({
        class: "mobile-nav d-lg-none",
    });
    $("body").append($mobile_nav);
    $("body").prepend(
        '<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>'
    );
    $("body").append('<div class="mobile-nav-overly"></div>');

    $(document).on("click", ".mobile-nav-toggle", function (e) {
        $("body").toggleClass("mobile-nav-active");
        $(".mobile-nav-toggle i").toggleClass(
            "icofont-navigation-menu icofont-close"
        );
        $(".mobile-nav-overly").toggle();
    });

    $(document).on("click", ".mobile-nav .drop-down > a", function (e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass("active");
    });

    $(document).click(function (e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($("body").hasClass("mobile-nav-active")) {
                $("body").removeClass("mobile-nav-active");
                $(".mobile-nav-toggle i").toggleClass(
                    "icofont-navigation-menu icofont-close"
                );
                $(".mobile-nav-overly").fadeOut();
            }
        }
    });
} else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
}

// Navigation active state on scroll
var nav_sections = $("section");
var main_nav = $(".nav-menu, #mobile-nav");

$(window).on("scroll", function () {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function () {
        var top = $(this).offset().top,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            if (cur_pos <= bottom) {
                main_nav.find("li").removeClass("active");
            }
            main_nav
                .find('a[href="#' + $(this).attr("id") + '"]')
                .parent("li")
                .addClass("active");
        }
        if (cur_pos < 300) {
            $(".nav-menu ul:first li:first").addClass("active");
        }
    });
});

// Toggle .header-scrolled class to #header when page is scrolled
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $(".bg-brand").addClass("bg-brand-scrolled");
        $("#header").addClass("header-scrolled");
    } else {
        $("#header").removeClass("header-scrolled");
        $(".bg-brand").removeClass("bg-brand-scrolled");
    }
});

if ($(window).scrollTop() > 100) {
    $("#header").addClass("header-scrolled");
}
