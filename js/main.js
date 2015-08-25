jQuery(function(){
    //element animation
    wow = new WOW({
        animateClass: 'animated',
        mobile: false,
        offset: 120
    });
    wow.init();

    //animated header class
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 100) {
            jQuery(".navbar-default").addClass("animated");
        } else {
            jQuery(".navbar-default").removeClass('animated');
        }
    });



    //  Timer count
    jQuery(".counter-item").appear(function () {
        jQuery(".counter-item [data-to]").each(function () {
            var e = jQuery(this).attr("data-to");
            jQuery(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });
});

jQuery(window).load(function() {

    jQuery("#preloader").fadeOut("slow");

});