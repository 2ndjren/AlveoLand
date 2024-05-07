$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    Submitted_Properties();

    $(document).on("click", ".view-image-btn", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            type: "GET",
            url: `/admin/view-image/${id}`,
            success: function (res) {
                console.log(res);
                var img = `<img height="500px" src="/submitted_properties/${res.image_name}">`;
                $("#view-image").append(img);
                $("#image-view").modal("show");
            },
        });
    });

    $(document).on("click", ".show-property-data-btn", function () {
        var id = $(this).data("id");
        $("#client-details").empty();

        $.ajax({
            type: "GET",
            url: `/admin/clients/${id}`,
            success: function (res) {
                console.log(res);
                var details = `<div class="row">
                <div class="col-12">
                    <p class="text-center fw-semibold text-primary"> Client Information</p>
                    <div class="p">Name: ${res.cfname} ${res.clname}</div>
                    <div class="p">Contact: ${res.ccontact}</div>
                    <div class="p">Email: ${res.cemail}</div>

                    <div class="row">
                        <div class="col-6">
                            <p>Front ID:</p>
                            <img src="/client/${res.cidfront}" height="200" alt="">
                        </div>
                        <div class="col-6">
                            <p>Back ID:</p>
                            <img src="/client/${res.cidback}" height="200" alt="">
                        </div>
                    </div>
                </div>
                <div class="col mt-4 ">
                    <p class="text-center fw-semibold text-primary">Property Information</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="p">Project: ${res.cproject}</div>
                            <div class="p">Unit No: ${res.cunit_no}</div>
                        </div>
                        <div class="col-6">
                            <div class="p">For: ${res.cfor}</div>
                            <div class="p">Status: ${res.cstatus}</div>
                        </div>
                    </div>
                    <p class="text-primary">Property Images</p>
                </div>
            </div>`;
                $("#client-details").append(details);
                $("#client-images").empty();
                $.each(res.images, function (index, data) {
                    var images = ` <div class="col-lg-4 col-sm-6  mb-2">
                   <img class="view-image-btn w-100" data-id="${data.id}" src="/submitted_properties/${data.image_name}" height="150" alt="">
                   <a download="${data.image_name}" href="/submitted_properties/${data.image_name}" title="${data.image_name}">Download
</a>
                   </div>
                   `;
                    $("#client-images").append(images);
                });
                $("#submitted-property-modal").modal("show");
            },
        });
    });
});
function Submitted_Properties() {
    $(".table-approved-appoinments-display tbody").empty;
    var datatable = $(".table-pending-properties-container");
    datatable.empty();
    var table =
        "<table id='table-approved-appoinments-display' class='table table-stripped border border-bordored w-100'>";
    table += " <thead>";
    table += " <tr>";
    table += `  <th class='text-start'><i class="fa-solid fa-calendar"></i></th>`;
    table += "  <th class='text-center'>Name</th>";
    table += " <th class='text-center'>Details</th>";
    table += " </tr>";
    table += "   </thead >";
    table += "   <tbody class='text-nowrap text-center'>";
    table += "</tbody > ";
    table += " </table >";
    datatable.append(table);

    let activated = new DataTable("#table-approved-appoinments-display", {
        ajax: {
            url: "/admin/clients",
            type: "GET",
            dataSrc: "properties",
        },

        columns: [
            {
                data: null,
                render: function (data, type, row) {
                    return `<p class='text-start'><i class="fa-solid fa-calendar"></i></p>`;
                },
            },
            {
                data: null,
                render: function (data, type, row) {
                    return `<p class="">${row.cfname} ${row.clname}</p>`;
                },
            },

            {
                data: null,
                render: function (data, type, row) {
                    var status = `<button data-id=${row.client_id} type="button" class="show-property-data-btn text-center btn btn-success">Show Details</button>`;
                    return status;
                },
            },
        ],
    });
}
