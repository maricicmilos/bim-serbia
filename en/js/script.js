$(document).ready(function () {

    // sticky navigation

var navOffSet = $("#menu").offset().top + 175;
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();

        if (scrollPos >= navOffSet) {
            $("#menu").addClass("stick");
            $("#menu img").css({
                "display": "block"
            });
        } else {
            $("#menu").removeClass("stick");
            $("#menu img").css({
                "display": "none"
            });
        }
    });

});
