var offset = 200;
var duration = 500;
$(window).scroll(function () {
    if ($(this).scrollTop() > offset) {
        $('.scroll-to-top').fadeIn(400);
    } else {
        $('.scroll-to-top').fadeOut(400);
    }
});
$('.scroll-to-top').click(function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 600);
    return false;
});