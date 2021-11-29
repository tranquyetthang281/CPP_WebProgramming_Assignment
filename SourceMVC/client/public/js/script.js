//scroll
var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC/client";
$(".categories").hide();
window.onload = function () {};

// cart
//animation for message add to cart
function animationMessageCart() {
    if (!$(".message-add").is(":animated")) {
        $(".message-add").animate({
            right: "10px",
            opacity: "1",
        });
        setTimeout(function () {
            $(".message-add").animate({
                opacity: "0",
                right: "-330px",
            });
        }, 1000);
    }
}
//update count-item of cart icon
function totalItem() {
    $.ajax({
        url: DOMAIN + "/Cart/getCount",
        success: function (result) {
            if (result != 0) {
                $(".count-item").text(result);
            } else {
                $(".count-item").text("");
            }
        },
    });
}
totalItem();
//update total price
function totalPrice() {
    var total = 0;
    $(".price-item-cart").each(function (index, val) {
        total += parseInt(val.textContent);
    });
    return total;
}
$(".total").text("Total: " + totalPrice() + "$");
// handle buy now click
$(".buy-now").click(function () {
    //albert when click add to cart

    var item_id = $(this).attr("class").split(" ")[1].slice(4);
    $.ajax({
        url: DOMAIN + "/Cart/AddItem",
        method: "post",
        data: {
            item_id: item_id,
        },
        success: function (result) {
            animationMessageCart();
            $(".list-item-cart").html(result);
            totalItem();
            $(".total").text("Total: " + totalPrice() + "$");
        },
    });
});

//search event
$(".search-bar").focusin(function () {
    if ($(".search-box").hasClass("hidden")) {
        $(".search-box").removeClass("hidden");
    }
});
$(".search-bar").focusout(function () {
    setTimeout(function () {
        if (!$(".search-box").hasClass("hidden")) {
            $(".search-box").addClass("hidden");
        }
    }, 500);
});
$(".search-item").keyup(function () {
    $.ajax({
        url: DOMAIN + "/Search/searchItem",
        type: "post",
        data: {
            keyword: $(this).val(),
        },
        success: function (result) {
            $(".search-box").html(result);
        },
    });
});

// handle add-to-cart click
$(".add-to-cart").click(function () {
    var item_id = $(this).attr("class").split(" ")[3].slice(2);
    $.ajax({
        url: DOMAIN + "/Cart/AddItem",
        method: "post",
        data: {
            item_id: item_id,
        },
        success: function (result) {
            animationMessageCart;
            totalItem();
            $(".list-item-cart").html(result);
            $(".total").text("Total: " + totalPrice() + "$");
        },
    });
});
$(".login-button").click(function () {
    if ($(".username-input").val() && $(".password-input").val()) {
        $.ajax({
            url: DOMAIN + "/Login/handleLogin",
            type: "post",
            data: {
                username: $(".username-input").val(),
                password: $(".password-input").val(),
            },
            success: function (result) {
                if (result == "error") {
                    $(".err").text("Wrong Password. Please try again.");
                    setTimeout(() => {
                        $(".err").text("");
                    }, 1500);
                } else if (result == "notvalid") {
                    $(".err").text("Username does not exist");
                    setTimeout(() => {
                        $(".err").text("");
                    }, 1500);
                } else if (result == "banned") {
                    $(".err").text("Your account has been banned. Please contact administrators");
                    setTimeout(() => {
                        $(".err").text("");
                    }, 1500);
                } else {
                    if (result == "user") window.location.href = DOMAIN;
                    else window.location.href = "http://localhost/CPP_Assignment_CNPM/SourceMVC/admin";
                }
            },
        });
    }
});
$(".register-button").click(function () {
    if ($(".username-input").val() && $(".password-input").val() && $(".repassword-input").val() && $(".name-input").val()) {
        if ($(".password-input").val() != $(".repassword-input").val()) {
            $(".err").text("Password must match");
            setTimeout(() => {
                $(".err").text("");
            }, 1000);
        } else {
            $.ajax({
                url: DOMAIN + "/Register/handleRegister",
                data: {
                    username: $(".username-input").val(),
                    password: $(".password-input").val(),
                    fullName: $(".name-input").val(),
                },
                type: "post",
                success: function (result) {
                    if (result != "valid") {
                        $(".err").text(result);
                        setTimeout(() => {
                            $(".err").text("");
                        }, 1500);
                    } else {
                        $(".succ").text("Success");
                        setTimeout(() => {
                            window.location.href = DOMAIN + "/Login/loginPage";
                        }, 1500);
                    }
                },
            });
        }
    } else {
        $(".err").text("Please complete required fields");
        setTimeout(() => {
            $(".err").text("");
        }, 1500);
    }
});
$(".changePass-button").click(function () {
    if ($(".old-pass").val() && $(".new-pass").val() && $(".renew-pass").val()) {
        if ($(".new-pass").val() != $(".renew-pass").val()) {
            $(".err").text("Mat khau moi bi sai");
            setTimeout(() => {
                $(".err").text("");
            }, 1000);
        } else {
            $.ajax({
                url: DOMAIN + "/Login/changePass",
                type: "post",
                data: {
                    oldPass: $(".old-pass").val(),
                    newPass: $(".new-pass").val(),
                },
                success: function (result) {
                    if (result != "valid") {
                        $(".err").text(result);
                        setTimeout(() => {
                            $(".err").text("");
                        }, 1000);
                    } else $(".succ").text("Success");
                    setTimeout(() => {
                        window.location.href = DOMAIN + "/Login/accountPage";
                    }, 1000);
                },
            });
        }
    }
});
$(".profile-button").click(function () {
    $.ajax({
        url: DOMAIN + "/Login/changeProfile",
        data: {
            name: $(".name-input").val(),
            phoneNum: $(".phone-input").val(),
            email: $(".email-input").val(),
            address: $(".address-input").val(),
        },
        type: "post",
        success: function () {
            window.location.href = DOMAIN + "/Login/accountPage";
        },
    });
});
$(".register-direct").click(function () {
    window.location.href = DOMAIN + "/Register/registerPage";
});
