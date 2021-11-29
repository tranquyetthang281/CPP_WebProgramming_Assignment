//scroll
$(".categories").hide();

window.addEventListener("scroll", function () {
    if (window.scrollY >= 100) {
        $(".categories").fadeIn();
    } else {
        $(".categories").fadeOut();
    }
});
$(".scroll-menu").click(function () {
    var id = $(this).index() + 1;
    document.getElementById("menu" + id).scrollIntoView({ block: "center" });
});

// slide
var count = 0;
setInterval(function () {
    count = count > 3 ? 0 : count;
    doSlide(count);
    setCheck();
    count++;
}, 3000);
$(".bar").click(function () {
    count = $(this).index();
    doSlide(count);
    setCheck();
});

function doSlide(index) {
    var pixel = index * -695;
    $(".slides").css("margin-left", pixel + "px");
}
function setCheck() {
    var checked = document.getElementsByClassName("checked");
    $(".checked")[0].className = $(".checked")[0].className.replace(" checked", "");
    $(".bar")[count].className += " checked";
}
