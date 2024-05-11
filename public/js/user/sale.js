$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    Display_Project_Sale_Units();
    UnitsEvents();

    $(".reset-form-btn").click(function (e) {
        e.preventDefault();
        $("#sale-search-filter")[0].reset();
        Display_Project_Sale_Units();
    });
    $(document).on("change", "#sale-search-filter", function (e) {
        e.preventDefault();
        $("#display-project-sale-units").empty();
        $.ajax({
            url: `/search-sale`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.projects > 0) {
                    $.each(res.projects, function (indexPro, proVal) {
                        $.each(res.units, function (indexUnit, unitVal) {
                            if (proVal.id == unitVal.project_properties_id) {
                                $(".property-count").text(res.units.length);
                                let money = new Intl.NumberFormat("fil-PH", {
                                    style: "currency",
                                    currency: "PHP",
                                });

                                var unitprice =
                                    unitVal.project_unit_category_type == "Sale"
                                        ? money.format(
                                              unitVal.project_unit_price
                                          ) + "/ month"
                                        : money.format(
                                              unitVal.project_unit_price
                                          );
                                var sqm = unitVal.project_unit_price;
                                var unit_size = sqm.toLocaleString();
                                var color =
                                    unitVal.project_unit_status == "Available"
                                        ? (color = "success")
                                        : "danger";

                                var icon = "";
                                var card = ` <div class="col-lg-3 col-sm-12 p-2">
                                                <div class="card p-0">
                                                    <div class="card-body p-0 border-0"
                                                        style='cursor:pointer;background: linear-gradient(to top, rgba(7, 148, 236, 0.9), rgba(255, 255, 255, 0.001)), url("/project/units/snapshots/${proVal.project_unit_banner}");
                                                                                                height:25rem; background-size:cover;'>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="clearfix">
                                                            <h6 class="float-end"> <span class="bg-warning rounded-start  fw-semibold  px-3 py-2"><span
                                                                        class="me-3"></span>${unitVal.project_unit_category_type}</span>
                                                            </h6>
                                                        </div>
                                                        <br>
                                                        <div class="clearfix">
                                                            <h3 class="float-start"> <span class="bg-light rounded-end  fw-semibold  px-3 py-2"><span
                                                                        class="me-3"><i class="fa-solid fa-location-dot"></i></span>${proVal.city}</span>
                                                            </h3>
                                                        </div>
                                                        <br>
                                                        <div class="clearfix">
                                                            <h6 class="float-start"><span
                                                                    class="bg-${color} text-light rounded-end     px-3 py-2">${unitVal.project_unit_status}</span>
                                                            </h6>
                                                        </div><br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class=" text-center">
                                                            <h6 class="text-light my-3  "><span class="bg-primary fw-semibold p-2"> ${unitVal.project_unit_category_description}</span></h6>
                                                            <h6 class="text-light "> <span class="fw-semibold ">
                                                                    ${unitVal.project_unit_type} | ${unitVal.project_unit_size} sqm. | ${unitprice}</span></h6>
                                                            <br>
                                                            <div data-id="${unitVal.id}" class="visit-unit-btn  btn btn-light fw-semibold px-5">Visit</div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>`;
                                $("#display-project-sale-units").append(card);
                            }
                        });
                    });
                } else {
                    $(".property-count").text(res.units.length);
                }
            },
            error: function (res) {
                console.log(res);
                var errors = res.responseJSON.errors;

                var inputs = $(
                    "#addForm input, #addForm select, #addForm textarea"
                );
                for (input of inputs) {
                    var name = $(input).attr("name");

                    if (name in errors) {
                        for (error of errors[name]) {
                            var error_msg = $(
                                `<span class='text-danger'>${error}</span>`
                            );
                            error_msg.insertAfter($(input));
                        }
                    }
                }
            },
        });
    });
});

function format_date(date) {
    if (date != null) {
        date = new Date(date);
        date = date.toLocaleString("default", {
            month: "long",
            day: "numeric",
            year: "numeric",
        });
    }

    return date;
}

function UnitsEvents() {
    $(document).on("click", ".visit-unit-btn", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        localStorage.removeItem("project_unit_id");
        localStorage.setItem("project_unit_id", id);
        window.location.href = "/view-units";
    });
}

function Display_Project_Sale_Units() {
    $("#display-project-sale-units").empty();
    $.ajax({
        type: "GET",
        url: "/project/sale-units",
        success: function (res) {
            console.log(res);
            if (res.units > 0) {
                $.each(res.projects, function (indexPro, proVal) {
                    $.each(res.units, function (indexUnit, unitVal) {
                        if (proVal.id == unitVal.project_properties_id) {
                            $(".property-count").text(res.units.length);

                            var unitprice =
                                unitVal.project_unit_category_type == "Sale"
                                    ? money.format(unitVal.project_unit_price) +
                                      "/ month"
                                    : money.format(unitVal.project_unit_price);
                            var sqm = unitVal.project_unit_price;
                            var unit_size = sqm.toLocaleString();
                            var color =
                                unitVal.project_unit_status == "Available"
                                    ? (color = "success")
                                    : "danger";
                            var card = ` <div class="col-lg-3 col-sm-12 p-2">
                                            <div class="card p-0">
                                                <div class="card-body p-0 border-0"
                                                    style='cursor:pointer;background: linear-gradient(to top, rgba(7, 148, 236, 0.9), rgba(255, 255, 255, 0.001)), url("/project/units/snapshots/${proVal.project_unit_banner}");
                                                                                            height:25rem; background-size:cover;'>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="clearfix">
                                                        <h6 class="float-end"> <span class="bg-warning rounded-start  fw-semibold  px-3 py-2"><span
                                                                    class="me-3"></span>${unitVal.project_unit_category_type}</span>
                                                        </h6>
                                                    </div>
                                                    <br>
                                                    <div class="clearfix">
                                                        <h3 class="float-start"> <span class="bg-light rounded-end  fw-semibold  px-3 py-2"><span
                                                                    class="me-3"><i class="fa-solid fa-location-dot"></i></span>${proVal.city}</span>
                                                        </h3>
                                                    </div>
                                                    <br>
                                                    <div class="clearfix">
                                                        <h6 class="float-start"><span
                                                                class="bg-${color} text-light rounded-end     px-3 py-2">${unitVal.project_unit_status}</span>
                                                        </h6>
                                                    </div><br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class=" text-center">
                                                        <h6 class="text-light my-3  "><span class="bg-primary fw-semibold p-2"> ${unitVal.project_unit_category_description}</span></h6>
                                                        <h6 class="text-light "> <span class="fw-semibold ">
                                                                ${unitVal.project_unit_type} | ${unit_size} sqm. | ${unitprice}</span></h6>
                                                        <br>
                                                        <div data-id="${unitVal.id}" class="visit-unit-btn  btn btn-light fw-semibold px-5">Visit</div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>`;
                            $("#display-project-sale-units").append(card);
                        }
                    });
                });
            } else {
                $(".property-count").text(res.units.length);
            }
        },
    });
}
