var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC";
var cardDrop = document.getElementById("card-dropdown");
var activeDropdown;
cardDrop.addEventListener("click", function () {
    var node;
    for (var i = 0; i < this.childNodes.length - 1; i++) node = this.childNodes[i];
    if (node.className === "dropdown-select") {
        node.classList.add("visible");
        activeDropdown = node;
    }
});

window.onclick = function (e) {
    var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC";

    if (e.target.tagName === "LI" && activeDropdown) {
        if (e.target.innerHTML === "Zalo Pay") {
            document.getElementById("credit-card-image").src = DOMAIN + "/images/zalo.png";
            activeDropdown.classList.remove("visible");
            activeDropdown = null;
            e.target.innerHTML = document.getElementById("current-card").innerHTML;
            document.getElementById("current-card").innerHTML = "Zalo Pay";
            document.getElementById("frame-1").innerText = "Phone Number";
            document.getElementById("frame-2").innerText = "Phone Number";
            document.getElementById("frame-3").innerText = "Email";
            document.getElementById("frame-4").innerText = "Pin";
        } else if (e.target.innerHTML === "Momo") {
            document.getElementById("credit-card-image").src = DOMAIN + "/images/momo.jpg";
            activeDropdown.classList.remove("visible");
            activeDropdown = null;
            e.target.innerHTML = document.getElementById("current-card").innerHTML;
            document.getElementById("current-card").innerHTML = "Momo";
            document.getElementById("frame-1").innerText = "Phone Number";
            document.getElementById("frame-2").innerText = "Phone Number";
            document.getElementById("frame-3").innerText = "Email";
            document.getElementById("frame-4").innerText = "Pin";
        } else if (e.target.innerHTML === "Visa") {
            document.getElementById("credit-card-image").src = DOMAIN + "/images/visa.png";
            activeDropdown.classList.remove("visible");
            activeDropdown = null;
            e.target.innerHTML = document.getElementById("current-card").innerHTML;
            document.getElementById("current-card").innerHTML = "Visa";
            document.getElementById("frame-1").innerText = "Card Number";
            document.getElementById("frame-2").innerText = "Card Holder";
            document.getElementById("frame-3").innerText = "Expires";
            document.getElementById("frame-4").innerText = "CVC";
        }
    } else if (e.target.className !== "dropdown-btn" && activeDropdown) {
        activeDropdown.classList.remove("visible");
        activeDropdown = null;
    }
};
$(".pay-btn").click(function () {
    let flag = false;
    $(".input-field").each(function () {
        if (!$(this).val()) {
            flag = true;
        }
    });
    if (flag == true) {
        $(".err").text("Please complete required fields");
        setTimeout(function () {
            $(".err").text("");
        }, 1500);
    } else {
        $.ajax({
            url: DOMAIN + "/Checkout/doCheckout",
            type: "post",
            data: {
                tableNumber: $("#tableNum").val(),
            },
            success: function (result) {
                console.log(result);
                $(".succ").text("Success!");
                setTimeout(function () {
                    $(".succ").text("");
                    window.location.href = DOMAIN + "/client";
                }, 1000);
            },
        });
    }
});
