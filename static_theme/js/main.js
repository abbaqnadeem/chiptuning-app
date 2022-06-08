$(window).load(function() {
    $(".selectpicker")
        .next()
        .css({
            padding: "10px 20px",
            "font-size": "13px"
        });

    $("body").on("scroll", function() {
        var home_page_filters_elem = $("#home_page_filters");
        var shrink_elem = $(".shrink");
        var home_page_filters_elem_len = home_page_filters_elem.length;
        if (home_page_filters_elem_len > 0) {
            if (home_page_filters_elem.offset().top <= 0) {
                if (!shrink_elem.hasClass("filters-added")) {
                    var home_page_filters = home_page_filters_elem.clone();
                    home_page_filters_elem.remove();
                    shrink_elem.append(home_page_filters);
                    $("#home_page_filters").addClass("pt-3 mx-auto");
                    shrink_elem
                        .addClass("filters-added")
                        .css("flex-flow", "column nowrap");
                }
            }
        }

        if ($("body").scrollTop() > 1) {
            $("#navbar").addClass("shrink");
        } else {
            $("#navbar").removeClass("shrink");
            if (home_page_filters_elem_len > 0) {
                var home_page_filters = home_page_filters_elem.clone();
                home_page_filters_elem.remove();
                $("#home_page_filters_original_position").html(
                    home_page_filters
                );
                home_page_filters_elem.removeClass("pt-3 mx-auto");
                shrink_elem.removeClass("filters-added").removeAttr("style");
            }
        }
    });

    /**
     * Gallery
     */
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    /**
     * Contact Us
     */

    $("#phone_number").usPhoneFormat({ format: "xxx xxx xx xx" });
});
