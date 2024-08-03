$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".nav-item").removeClass("active");
    $(".nav-link").removeClass("active");
    // check admin password is correct or not
    $("#old_password").keyup(function () {
        var old_password = $("#old_password").val();
        // alert(old_password);
        //ajax call
        $.ajax({
            type: "get",
            url: "/admin/check-admin-password",
            data: {
                old_password: old_password,
            },
            success: function (response) {
                if (response == "false") {
                    $("#check_password_message").html(
                        "<font color='red'>Old password is incorrect</font></font>"
                    );
                } else if (response == "true") {
                    $("#check_password_message").html(
                        "<font color='green'>Old password is correct</font></font>"
                    );
                }
            },
            error: function (error) {
                alert(error);
            },
        });
    });

    $("#confirm_password").keyup(function () {
        var newPassword = $("#new_password").val();
        var confirmPassword = $("#confirm_password").val();
        if (newPassword != confirmPassword) {
            $("#check_confirm_password_message").html(
                "<font color='red'>Password does not match</font></font>"
            );
        } else {
            $("#check_confirm_password_message").html(
                "<font color='green'>Password match</font></font>"
            );
        }
    });

    //vendor Approval

    $(".updateVendorStatus").click(function (e) {
        console.log(location.href);
        var status = $(this).children("i").attr("status");
        var adminId = $(this).attr("admin-id");
        // alert(vendorId);
        e.preventDefault();

        $.ajax({
            type: "post",
            url: "/admin/update-vendor-status",
            data: {
                status: status,
                adminId: adminId,
            },
            success: function (res) {
                if (res["status"] == 1) {
                    $("#admin-" + res["adminId"]).html(
                        '<i style="font-size: 30px;" class="mdi mdi-bookmark-check" status="Active"></i>'
                    );
                    // location.reload();
                    // $("#my-vendors").load(location.href + " #my-vendors");
                } else {
                    $("#admin-" + res["adminId"]).html(
                        '<i style="font-size: 30px; " class="mdi mdi-bookmark-outline" status="Inactive"></i>'
                    );
                    // $("#my-vendors").load(location.href + " #my-vendors");
                    // location.reload();
                }
            },
            error: function (error) {
                console.log(error);
            },
        });
    });

    $(".updateadminStatus").click(function () {
        var adminId = $(this).attr("admin-id");
        var status = $(this).children("i").attr("status");

        $.ajax({
            type: "post",
            url: "/admin/update-admin-status",
            data: { adminId: adminId, status: status },
            success: function (res) {
                if (res["status"] == 1) {
                    $("#admin-" + res["adminId"]).html(
                        '<i style="font-size: 30px;" class="mdi mdi-bookmark-check" status="Active"></i>'
                    );
                } else {
                    $("#admin-" + res["adminId"]).html(
                        '<i style="font-size: 30px;" class="mdi mdi-bookmark-outline" status="Inactive"></i>'
                    );
                }
            },
            error: function (error) {
                alert(error);
            },
        });
    });
});
