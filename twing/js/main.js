$(function(){
    //element animation
    wow = new WOW({
        animateClass: 'animated',
        mobile: false,
        offset: 120
    });
    wow.init();

    // get window height
    var fullscreen = $(window).height();

    $(".fullscreen").css("height", fullscreen);

    $(window).resize(function() {
        $("#hero-area").css("height", fullscreen);
    });

    //animated header class
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $(".navbar-default").addClass("animated");
        } else {
            $(".navbar-default").removeClass('animated');
        }
    });


    $(".navbar-nav").onePageNav({
        currentClass: 'current',
        changeHash: false,
        filter: ':not(.signin)'
    });

    //  Timer count
    $(".counter-item").appear(function () {
        $(".counter-item [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });
});

$(window).load(function() {

    $("#preloader").fadeOut("slow");

});