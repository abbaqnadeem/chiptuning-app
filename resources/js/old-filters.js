/**
 * Filters
 */
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
        url: "/get_models_by_brand_id/" + _this.val(),
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
            _this.val(),
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
            "/",
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
