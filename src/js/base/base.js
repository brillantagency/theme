function doAnimations() {
    var n = $(window).scrollTop() + $(window).height(),
        e = $(".animatable-js");
    0 == e.length && $(window).off("scroll", doAnimations),
        e.each(function (e) {
            var t = $(this);
            t.offset().top + t.height() - 20 < n && t.removeClass("animatable-js").addClass("animated-js");
    });
};

$(window).on("scroll", function () {
    doAnimations()
})