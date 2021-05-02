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
