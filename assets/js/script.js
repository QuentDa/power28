Carousel.init({
    target: $('.carousel')
});

$(document).ready(function() {
    var stickyNavTop = $('#header').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('#header').addClass('sticky');
            $('#header').addClass('newbgwhite');
        } else {
            $('#header').removeClass('sticky');
            $('#header').removeClass('newbgwhite');
        }
    };

    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});