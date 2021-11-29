var DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC/client";
//handle increase decrease
$(".quantity-change").click(function () {
    //get id item
    var item_id = $(this).parent().parent().attr("id").slice(9);
    var val = parseInt($(this).parent().children(".number").text());
    if ($(this).hasClass("increase")) {
        val++;
    } else {
        val = val == 0 ? 0 : val - 1;
    }
    $(this).parent().children(".number").text(val);
    $.ajax({
        url: DOMAIN + "/Cart/updatePrice",
        method: "post",
        data: {
            item_id: item_id,
            val: val,
        },
        success: function (result) {
            // console.log(result);
            $("#cart-item" + item_id)
                .children(".price-item-cart")
                .text(result + "$");
            $(".total").text("Total: " + totalPrice() + "$");
            totalItem();
        },
    });
});
$(".remove-item").click(function () {
    item_id = parseInt($(this).parent().attr("id").slice(9));
    if (confirm("Do you want to remove this item?")) {
        $.ajax({
            url: DOMAIN + "/Cart/Remove",
            type: "post",
            data: {
                item_id: item_id,
            },
            success: function (result) {
                $(".list-item-cart").html(result);
                $(".total").text("Total: " + totalPrice() + "$");
                totalItem();
            },
        });
    }
});
function removeAll() {
    if (confirm("Do you want to remove all items")) {
        $.ajax({
            url: DOMAIN + "/Cart/RemoveAll",
            type: "post",
            success: function () {
                $(".list-item-cart").html("");
                $(".total").text("Total: " + totalPrice() + "$");
                totalItem();
            },
        });
    }
}
