// Init on load
$(document).ready(function() {
    if ($(this).scrollTop() > 0) {
        $('#scrollTopBtn').addClass("showScrollAnim1");
    }
    else {
        $('#scrollTopBtn').removeClass("showScrollAnim1");
    }
});

// On Scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('#scrollTopBtn').addClass("showScrollAnim1");
    }
    else {
        $('#scrollTopBtn').removeClass("showScrollAnim1");
    }
    if ($(this).scrollTop() > 50) {
        $('#scrollTopBtn').addClass("showScrollAnim2");
    }
    else {
        $('#scrollTopBtn').removeClass("showScrollAnim2");
    }
});
// © AIMA DEVELOPPEMENT 2024