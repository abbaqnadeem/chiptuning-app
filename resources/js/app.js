"use strict";

let doc = $(document);

let screen_size = 0;

var car_brands = [];
var car_models = [];
var car_generations = [];
var car_engines = [];

let offset =
    $("#contact_us_offset_elem").length > 0 ? $("#contact_us_offset_elem").offset().top + 100 : 0;

let counter_offset =
    $("#sec-5-title").length > 0 ? $("#sec-5-title").offset().top - 500 : 0;

let counter_done = false;

/**
 *
 * @param id
 * @param text
 */
function onChangeCarBrand(id, text) {
    let car_models_element = $('#car_models');
    if (text !== undefined) {
        $('#car_brands').text(text);
        $("#model_icon, #generation_icon, #engine_icon")
            .removeClass('fa-check').addClass('fa-angle-down');

        // Store next filters
        $('#car_models').html('Kies model');
        $('#car_generations').html('Kies generatie');
        $('#car_engines').html('Kies motor');
        $('#model_id', '#generation_id', '#engine_id').val('');
    }

    $('#brand_id').val(id);
    $('#brand_icon')
        .removeClass('fa-angle-down').addClass('fa-check');

    $.ajax({
        url: "/get_models_by_brand_id/" + id,
        type: "GET",
        success: function (res) {
            car_models = res;
            car_models_element
                .hide()
                .fadeIn();
        },
        error: function () {
            window.location.href = window.location;
        }
    });
}

/**
 *
 * @param id
 * @param text
 */
function onChangeCarModel(id, text) {
    if (text !== undefined) {
        $('#car_models').text(text);
        $("#generation_icon, #engine_icon")
            .removeClass('fa-check').addClass('fa-angle-down');

        // Store next filters
        $('#car_generations').html('Kies generatie');
        $('#car_engines').html('Kies motor');
        $('#generation_id', '#engine_id').val('');
    }

    $('#model_id').val(id);
    $('#model_icon')
        .removeClass('fa-angle-down').addClass('fa-check');
    $.ajax({
        url:
            "/get_generations_by_filters/" +
            $("#brand_id").val() +
            "/" +
            id,
        type: "GET",
        success: function (res) {
            car_generations = res;
            $('#car_generations')
                .hide()
                .fadeIn();
        },
        error: function () {
            window.location.href = window.location;
        }
    });
}

/**
 *
 * @param id
 * @param text
 */
function onChangeCarGeneration(id, text) {
    if (text !== undefined) {
        $('#car_generations').text(text);
        $("#engine_icon")
            .removeClass('fa-check').addClass('fa-angle-down');
        // Store next filters
        $('#car_engines').html('Kies motor');
        $('#engine_id').val('');
    }
    $('#generation_id').val(id);
    $('#generation_icon')
        .removeClass('fa-angle-down').addClass('fa-check');

    $.ajax({
        url:
            "/get_engines_by_filters/" +
            $("#brand_id").val() +
            "/" +
            $("#model_id").val() +
            "/" +
            id,
        type: "GET",
        success: function (res) {
            car_engines = res;
            $('#car_engines')
                .hide()
                .fadeIn();
        },
        error: function () {
            window.location.href = window.location;
        }
    });
}

/**
 *
 * @param id
 * @param text
 */
function onChangeCarEngine(id, text) {

    $('#engine_id').val(id);
    $('#engine_icon')
        .removeClass('fa-angle-down').addClass('fa-check');

    if (text !== undefined) {
        $('#car_engines').text(text);
        let staging_section = $('.staging_section');

        staging_section.html('');
        staging_section.html(`<div class="d-flex justify-content-center">
                <strong class="mr-3" style="
                position: relative;
                top: 5px;
            ">Loading your tuning data...</strong>
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>`);

        $("#home_page_filters").submit();
    }
}

$(window).on("load", function () {

    function blogImages() {
        $('.home-blog-img, .chiptuning-sec-img').each(function (i, elem) {
            const _elem = $(elem);
            const imgSrc = $(_elem).attr('src');
            if(imgSrc !== undefined) {
                _elem.attr('src', imgSrc.replace('public', ''));
            }
        });
    }

    function galleryImages() {
        $('[data-gallery] img').each(function (i, elem) {
            const _elem = $(elem);
            const imgSrc = $(_elem).attr('src');
            if(imgSrc !== undefined) {
                _elem.attr('src', imgSrc.replace('public', ''));
            }
        });
    }

    setInterval(blogImages, 3000);

    if (window.location.pathname.indexOf('cars-gallery') !== -1) {
        setInterval(galleryImages, 3000);
    }

    /**
     * Car Brand On Click Trigger for Mobile
     */
    $(document).on("click", '#car_brands', function (e) {
        let mobileSelectElement = $('.mobileSelect');
        if (mobileSelectElement.length > 0) {
            mobileSelectElement.remove();
        }
        let brand_id = $('#brand_id').val();
        let position = brand_id > 0 ? brand_id - 1 : 0;
        var carBrandsSelect = new MobileSelect({
            trigger: '#car_brands',
            title: 'Kies merk',
            cancelBtnText: 'Cancel',
            ensureBtnText: 'Confirm',
            wheels: [{data: car_brands}],
            position: [position],
            callback: function (indexArr, data) {
                let {id, value} = data.pop();
                onChangeCarBrand(id, value);
            },
            onHide: function (e) {
                mobileSelectElement.remove();
            }
        });
        carBrandsSelect.show();
    });

    /**
     * Car Model On Click Trigger for Mobile
     */
    $(document).on("click", '#car_models', function () {
        let mobileSelectElement = $('.mobileSelect');
        if (mobileSelectElement.length > 0) {
            mobileSelectElement.remove();
        }
        var carModelsSelect = new MobileSelect({
            trigger: '#car_models',
            title: 'Kies model',
            cancelBtnText: 'Cancel',
            ensureBtnText: 'Confirm',
            wheels: [{data: car_models}],
            position: [0],
            callback: function (indexArr, data) {
                let {id, value} = data.pop();
                onChangeCarModel(id, value);
            }, onHide: function (e) {
                mobileSelectElement.remove();
            }
        });
        carModelsSelect.show();
    });


    /**
     * Car Generation On Click Trigger for Mobile
     */
    $(document).on("click", '#car_generations', function () {
        let mobileSelectElement = $('.mobileSelect');
        console.log(mobileSelectElement.length);
        if (mobileSelectElement.length > 0) {
            mobileSelectElement.remove();
        }
        var carGenerationsSelect = new MobileSelect({
            trigger: '#car_generations',
            title: 'Kies generatie',
            cancelBtnText: 'Cancel',
            ensureBtnText: 'Confirm',
            wheels: [{data: car_generations}],
            position: [0],
            callback: function (indexArr, data) {
                let {id, value} = data.pop();
                onChangeCarGeneration(id, value);
            }, onHide: function (e) {
                mobileSelectElement.remove();
            }
        });

        carGenerationsSelect.show();

    });

    /**
     * Car Engine On Click Trigger for Mobile
     */
    $(document).on("click", '#car_engines', function () {
        let mobileSelectElement = $('.mobileSelect');
        console.log(mobileSelectElement.length);
        if (mobileSelectElement.length > 0) {
            mobileSelectElement.remove();
        }
        var carEngineSelect = new MobileSelect({
            trigger: '#car_engines',
            title: 'Kies motor',
            cancelBtnText: 'Cancel',
            ensureBtnText: 'Confirm',
            wheels: [{data: car_engines}],
            position: [0],
            callback: function (indexArr, data) {
                let {id, value} = data.pop();
                onChangeCarEngine(id, value);
            }, onHide: function (e) {
                mobileSelectElement.remove();
            }
        });

        carEngineSelect.show();

    });

    setTimeout(function () {
        $('#tuning_table').hide().fadeIn('slow');
    }, 200);

    $(".dropdown-icon").removeClass("d-none");
    $("#filter_arrow").removeClass("d-none");

    $("body").on("scroll", function () {
        if ($("body").scrollTop() >= counter_offset) {
            if (!counter_done) {
                $(".counter").each(function (i) {
                    $(this)
                        .prop("Counter", 0)
                        .animate(
                            {
                                Counter: $(this).text()
                            },
                            {
                                duration: 4000,
                                easing: "swing",
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            }
                        );
                    counter_done = true;
                });
            }
        }
    });
    /*
    $('body').on("scroll", function () {
        var home_page_filters_elem = $('#home_page_filters');
        var shrink_elem = $('.shrink');
        var home_page_filters_elem_len = home_page_filters_elem.length;

        if (home_page_filters_elem_len > 0) {
            if (home_page_filters_elem.offset().top <= 0) {
                if (!shrink_elem.hasClass('filters-added')) {
                    var home_page_filters = home_page_filters_elem.clone();
                    home_page_filters_elem.remove();
                    $('#clonned_filters').append(home_page_filters);
                    $('.selectpicker').selectpicker('refresh');
                    $('.bootstrap-select .bootstrap-select').next().remove();
                    $('#home_page_filters').addClass('pt-3 mx-auto');

                }
            }
        }

        shrink_elem.addClass('filters-added').css('flex-flow', 'column nowrap');

        if ($('body').scrollTop() > 1) {
            $("#navbar").addClass("shrink");
        } else {
            $("#navbar").removeClass("shrink");
            if (home_page_filters_elem_len > 0) {
                var home_page_filters = home_page_filters_elem.clone();
                home_page_filters_elem.remove();
                $('#home_page_filters_original_position').html(home_page_filters);
                home_page_filters_elem.removeClass('pt-3 mx-auto');
                shrink_elem.removeClass('filters-added').removeAttr('style');
            }
        }
    });
*/
    /**
     * Gallery
     */
    $(document).on("click", '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
});

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $(".selectpicker").selectpicker({
        dropupAuto: false,
        virtualScroll: true,
        size: 10,
        showTick: true
    });

    /**
     * Filters
     */
    let isMobile = $(this).width() < 1077;

    if($(this).width() <= 468) {
        $('#desktop-tuning-table').remove();
    }

    if (isMobile) {
        $.ajax({
            url: "/get_brands",
            type: "GET",
            success: function (res) {
                car_brands = res;
                $('#car_brands')
                    .hide()
                    .fadeIn();
            }
        });

        let car_brand_id = $('#brand_id').val();
        let car_model_id = $('#model_id').val();
        let car_generation_id = $('#generation_id').val();
        let car_engine_id = $('#engine_id').val();

        if (car_brand_id > 0 && car_model_id > 0 && car_generation_id > 0 && car_engine_id) {
            onChangeCarBrand(car_brand_id);
            onChangeCarModel(car_model_id);
            onChangeCarGeneration(car_generation_id);
            onChangeCarEngine(car_engine_id);
        }

    } else {
        $(document).on("change", "#brand_id", function (e) {
            $("#model_id, #generation_id, #engine_id").html("");
            $(".selectpicker").selectpicker("refresh");
            var _this = $(this);
            _this
                .closest(".form-group")
                .find(".fa-angle-down")
                .toggleClass("fa-angle-down fa-check");
            $("#model_id, #generation_id, #engine_id")
                .closest(".form-group")
                .find(".fa-angle-down")
                .toggleClass("fa-angle-down fa-angle-down");
            $("#model_id, #generation_id, #engine_id")
                .closest(".form-group")
                .find(".fa-check")
                .toggleClass("fa-check fa-angle-down");
            $.ajax({
                url: "/get_models_by_brand_id/" + _this.val() + "/?view=desktop",
                type: "GET",
                success: function (res) {
                    $("#model_id").html(res);
                    $(".selectpicker").selectpicker("refresh");
                    $(".bootstrap-select, .fa-angle-down")
                        .eq(1)
                        .hide()
                        .fadeIn();
                }
            });
        });

        $(document).on("change", "#model_id", function (e) {
            $("#generation_id, #engine_id").html("");
            $(".selectpicker").selectpicker("refresh");
            var _this = $(this);
            var model_name = _this.find("option:selected").text();
            $("#model_name").val(model_name);
            _this
                .closest(".form-group")
                .find(".fa-angle-down")
                .toggleClass("fa-angle-down fa-check");
            $.ajax({
                url:
                    "/get_generations_by_filters/" +
                    $("#brand_id").val() +
                    "/" +
                    _this.val() +
                    '/?view=desktop',
                type: "GET",
                success: function (res) {
                    $("#generation_id").html(res);
                    $(".selectpicker").selectpicker("refresh");
                    $(".bootstrap-select, .fa-angle-down")
                        .eq(2)
                        .hide()
                        .fadeIn();
                }
            });
        });

        $(document).on("change", "#generation_id", function (e) {
            $("#engine_id").html("");
            $(".selectpicker").selectpicker("refresh");
            var _this = $(this);
            _this
                .closest(".form-group")
                .find(".fa-angle-down")
                .toggleClass("fa-angle-down fa-check");
            $.ajax({
                url:
                    "/get_engines_by_filters/" +
                    $("#brand_id").val() +
                    "/" +
                    $("#model_id").val() +
                    "/" +
                    _this.val() +
                    "/?view=desktop",
                type: "GET",
                success: function (res) {
                    $("#engine_id").html(res);
                    $(".selectpicker").selectpicker("refresh");
                    $(".bootstrap-select, .fa-angle-down")
                        .eq(3)
                        .hide()
                        .fadeIn();
                }
            });
        });

        $(document).on("change", "#engine_id", function (e) {
            $(".selectpicker").selectpicker("refresh");
            var _this = $(this);
            let staging_section = $('.staging_section');
            _this
                .closest(".form-group")
                .find(".fa-angle-down")
                .toggleClass("fa-angle-down fa-check");

            staging_section.html('');
            staging_section.html(`<div class="d-flex justify-content-center">
                <strong class="mr-3" style="
                position: relative;
                top: 5px;
            ">Loading your tuning data...</strong>
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>`);

            $(".selectpicker").selectpicker("refresh");
            $("#home_page_filters").submit();
        });
    }

    /**
     * Contact Us Form
     */
    $("#contact_us_form").on("submit", function (e) {
        e.preventDefault();
        let contact_us_btn = $("#contact_us_btn");
        contact_us_btn
            .attr("disabled", true)
            .html(
                '<span class="spinner-border spinner-border-sm mb-1" role="status" aria-hidden="true"></span>\n' +
                "Sending..."
            );
        let _this = $(this);
        $("[id*=_error]").html("");
        $.ajax({
            url: _this.attr("action"),
            type: _this.attr("method"),
            data: $("#contact_us_form").serialize(),
            success: function (res) {
                contact_us_btn.html("Verzenden").removeAttr("disabled");
                if (!res.success) {
                    $.each(res.errors, function (id, error) {
                        $(`#${id}_error`).html(error);
                    });
                } else {
                    $("#contact_us_form")[0].reset();
                    $("#contact_us_msg")
                        .html(res.message)
                        .parent()
                        .removeClass("d-none");
                    $(".alert")
                        .fadeTo(10000, 500)
                        .slideUp(500, function () {
                            $(".alert")
                                .slideUp(500)
                                .removeClass("d-block");
                        });
                }
            }
        });
    });

    /**
     * Scroll to contact us form section if clicked.
     * This is done via jquery to avoid #id in the url
     * and if user refresh the page, it brings to form
     * again.
     */

    $("#quote_btn").on("click", function (e) {
        e.preventDefault();
        if (window.location.pathname == '/chiptuning') {
            if (screen_size >= 992 && screen_size <= 1400) {
                offset += 0;
            } else if (screen_size > 767 && screen_size <= 992) {
                offset += 925;
            } else if (screen_size >= 439 && screen_size <= 767) {
                offset += 1010;
            } else if (screen_size >= 401 && screen_size <= 438) {
                offset += 1055;
            } else if (screen_size <= 400) {
                offset += 955;
            } else {
                offset -= 170;
            }
        } else {
            if (screen_size >= 992 && screen_size <= 1400) {
                offset += 810;
            } else if (screen_size > 767 && screen_size <= 992) {
                offset += 2900;
            } else if (screen_size >= 439 && screen_size <= 767) {
                offset += 2500;
            } else if (screen_size >= 401 && screen_size <= 438) {
                offset += 2280;
            } else if (screen_size <= 400) {
                offset += 2180;
            } else {
                offset += 690;
            }
        }

        $("html, body").animate({
            scrollTop: offset
        });
    });

    /**
     * Reviews
     */

    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        autoplay: true
    });

    $(".owl-dots").remove();

    /**
     * Force ellipsis after a certain number of lines
     */
    $(".review_description").ellipsis({
        lines: 9,
        ellipClass: "ellip",
        responsive: true
    });

    $(".blog_description").ellipsis({
        lines: 5,
        ellipClass: "ellip",
        responsive: true
    });

    $(".read_more").on("click", function (e) {
        e.preventDefault();
        var data = $(this).data();
        $("#readMoreModalLabel").text(data.title + "'s review");
        $("#readMoreModalBody").text(data.description);
        $("#readMoreModal").modal();
    });

    /**
     * Updated review time
     */
    $(".duration").each(function (i, elem) {
        $(elem).text(moment($(elem).text()).fromNow());
    });

    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");

    if (!cookieAlert) {
        return;
    }

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    // Show the alert if we cant find the "acceptCookies" cookie
    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 365);
        cookieAlert.classList.remove("show");
    });

    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(";");
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === " ") {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $("#mce-error-response:contains(captcha)").remove();

    // Toggle Stage 1 and Stage 2 Price
    $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        var target = $(e.target).attr("href");
        console.log(target);
        let stage_1_price_elem = $("#stage_1_price");
        let stage_2_price_elem = $("#stage_2_price");
        if (target == "#stage-1") {
            let stage_1_price = stage_1_price_elem.data("price");
            $("#stage-3-tab").removeClass("d-none");
            if (stage_1_price != 0) {
                stage_1_price_elem.removeClass("d-none");
                stage_2_price_elem.addClass("d-none");
            }
        } else if (target == "#stage-2") {
            let stage_2_price = stage_2_price_elem.data("price");
            if (stage_2_price != 0) {
                stage_1_price_elem.addClass("d-none");
                stage_2_price_elem.removeClass("d-none");
            } else {
                $("#stage-3-tab").addClass("d-none");
            }
        }
    });
});

$(window).on("load", function () {

    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
    if (mobile) {
        let whatsapp_btn = $('#whatsapp_btn');
        let floating_whatsapp_btn = $('.floating-whatsapp-btn');
        if (whatsapp_btn.length > 0) {
            whatsapp_btn.attr('href').replace("web", "api");
            let mobile_url = $('#whatsapp_btn').attr('href').replace("web", "api");
            whatsapp_btn.attr('href', mobile_url);
        }
        if (floating_whatsapp_btn.length > 0) {
            let mobile_url = $('.floating_whatsapp_btn').attr('href');
            floating_whatsapp_btn.attr('href', mobile_url);
        }
    }

    let isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
    let win = $(this);

    screen_size = win.width();

    if (isMac) {
        if ($('.chiptuning-benefits-tab').length > 0) {
            if (win.width() >= 1280 && win.width() <= 1400) {
                $('.chiptuning-benefits-tab').css('margin-bottom', '-31px');
            }
        }
    }

    if (win.width() < 992) {
        $('.chiptuning-benefits-tab').removeClass('nav-justified');
    }

    if (win.width() < 1077) {
        $("#navbar_filters").remove();
    } else {
        $("#banner_filters").remove();
    }

    $(document).on('click', '.fa-angle-down', function (e) {
        e.stopPropagation();
        $('.selectpicker').eq($(this).data('id')).selectpicker('toggle');
    });

    $(document).on('mousewheel', '.bootstrap-select', function (e) {
        let offset = $(this).find('[id^="bs-select-"]').scrollTop();
        $('.dropdown-menu').find('[id^="bs-select-"]').scrollTop(offset - e.originalEvent.wheelDelta);
    });

    // Remove whitespace issue when scroll moves to bottom
    $('[id^="bs-select-"].inner.show').scroll(function (e) {
        let _this = $(this);
        if (_this.scrollTop() + _this.innerHeight() >= _this[0].scrollHeight) {
            // Uncomment to recreate issue on Jakub Screen for testing
            // $(this).find('.inner').css({ 'margin-top': '0', 'margin-bottom': '1426px' });
            _this.parent().removeAttr('style');
        }
    });

    $(document).on('mousewheel', '.fa-angle-down', function (e) {
        let offset = $(this).prev().find('[id^="bs-select-"]').scrollTop();
        $('.dropdown-menu').find('[id^="bs-select-"]').scrollTop(offset - e.originalEvent.wheelDelta);
    });
});
