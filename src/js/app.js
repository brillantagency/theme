(function($){
    function menu_open() {
        $('.burger_button-js').click(function(){
            $('.menu_burger').removeClass('menu_burger_closing').addClass('menu_burger_open');
            $('body').toggleClass('bg_blur');
            return false;
        });
    }

    function menu_close() {
        $('.menu_close-js').click(function(){
            $('.menu_burger').removeClass('menu_burger_open').addClass('menu_burger_closing');
            $('body').removeClass('bg_blur');
            return false;
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('.menu_burger_wrapper_nav').length) {
                $('.menu_burger').removeClass('menu_burger_open').addClass('menu_burger_closing');
                $('body').removeClass('bg_blur');
            }
        });
    }

    function initSmoothScroll() {
        const header = document.querySelector('header');

        function checkScroll() {
            const scrollPosition = window.scrollY;
            if (scrollPosition > 50) {
                header.classList.add('scrolled-js');
            } else {
                header.classList.remove('scrolled-js');
            }
        }

        // Vérifie au chargement
        checkScroll();

        // Vérifie à chaque scroll
        window.addEventListener('scroll', checkScroll);
    }

    function showMore() {
        const buttons = document.querySelectorAll('.values_item_button-js');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                const parentLink = button.closest('.values_item');
                if (parentLink) {
                    parentLink.classList.add('active');
                }
            });
        });
    };

    function initCircleSlider(swiperSelector, paginationSelector) {
        new Swiper(swiperSelector, {
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            centeredSlidesBounds: true,
            pagination: { 
                el: paginationSelector,
                clickable: true,
            },
            // navigation: {
            //     nextEl: ".circle_slider__control--next",
            //     prevEl: ".circle_slider__control--prev"
            // },
            slidesPerView: 3,
            effect: "creative",
            creativeEffect: {
                perspective: true,
                limitProgress: 3,
                prev: {
                    translate: ["-90%", "20%", -100],
                    rotate: [0, 0, -20],
                    origin: "bottom"
                },
                next: {
                    translate: ["90%", "20%", -100],
                    rotate: [0, 0, 20],
                    origin: "bottom"
                }
            }
        });
    }

    doAnimations = function () {
        var n = $(window).scrollTop() + $(window).height(),
            e = $(".animatable-js");
        0 == e.length && $(window).off("scroll", doAnimations),
            e.each(function (e) {
                var t = $(this);
                t.offset().top + t.height() - 20 < n && t.removeClass("animatable-js").addClass("animated-js");
        });
    },

    $(function() {
        menu_open();
        menu_close();
        initSmoothScroll();
        showMore();
        
        // Initialisation des deux sliders
        initCircleSlider(".team_circle_slider__swiper-js", ".team_circle_slider__pagination-js");
        initCircleSlider(".testimonials_circle_slider__swiper-js", ".testimonials_circle_slider__pagination-js");
    });
    $(window).on("scroll", function () {
        doAnimations()
    })
})(jQuery); 