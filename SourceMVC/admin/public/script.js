$(document).ready(function () {
    //set image for input
    var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC/admin";
    $('input[name="photo"]').change(function () {
        var input_image = $(this).val();
        input_image = input_image.substr(12, 999);
        $(".image-upload").css({
            "background-image": "url('http://localhost/CPP_Assignment_CNPM/SourceMVC/images/" + input_image + "')",
        });
    });
    //ajax add new item
    $(".alert-add").fadeOut();
    $(".button-add").click(function () {
        var input_image = $("input[name='photo']").val();
        input_image = input_image.substr(12, 999);
        $.ajax({
            url: DOMAIN + "/Add/DoAdd",
            method: "post",
            data: {
                category: $("#input-category").val(),
                name: $(".input-name").val(),
                price: parseInt($(".input-price").val()),
                description: $(".input-description").val(),
                calories: parseInt($(".input-calories").val()),
                image: input_image,
            },
            success: function (result) {
                if (result == "failed") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Failed!! You should fill all input");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 1500);
                } else if (result == "false") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Error! Can't add into database");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 1500);
                } else {
                    $(".alert-add").fadeIn();
                    $(".alert-add").addClass("alert-success");
                    $(".alert-add-text").text("Success!!");
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add").removeClass("alert-success");
                        $(".alert-add-text").text("");
                    }, 1500);
                    //reset form and image
                    $("#form_add")[0].reset();
                    $(".image-upload").css({
                        "background-image": "none",
                    });
                }
            },
            error: function () {},
        });
    });
    $(".button-reset").click(function () {
        $(".image-upload").css({
            "background-image": "none",
        });
    });
    //end ajax add item
    //ajax edit
    $(".button-edit").click(function () {
        var input_image = $("input[name='photo']").val();
        if (input_image) {
            input_image = input_image.substr(12, 999);
        } else {
            input_image = $("input[name='photo']").attr("class").substr(10, 99999);
        }
        var item_id = $(this).attr("id");
        item_id = item_id.substr(9, 999);
        $.ajax({
            url: DOMAIN + "/Edit/DoEdit",
            method: "post",
            data: {
                item_id: item_id,
                category: $("#input-category").val(),
                name: $(".input-name").val(),
                price: parseInt($(".input-price").val()),
                description: $(".input-description").val(),
                calories: parseInt($(".input-calories").val()),
                image: input_image,
            },
            success: function (result) {
                if (result == "failed") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Failed!! You should fill all input");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 1500);
                } else if (result == "false") {
                    $(".alert-add").addClass("alert-danger");
                    $(".alert-add-text").text("Error! Can't edit");
                    $(".alert-add").fadeIn();
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add-text").text("");
                        $(".alert-add").removeClass("alert-danger");
                    }, 1500);
                } else {
                    $(".alert-add").fadeIn();
                    $(".alert-add").addClass("alert-success");
                    $(".alert-add-text").text("Success!!");
                    setTimeout(function () {
                        $(".alert-add").fadeOut();
                        $(".alert-add").removeClass("alert-success");
                        $(".alert-add-text").text("");
                    }, 1500);
                    //reset form and image
                }
            },
            error: function () {},
        });
    });
});
