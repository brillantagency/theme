function menu_open() {
    $('.burger_button-js').click(function(){

        if($('.menu_burger').hasClass('menu_burger_open')) {
            $('.menu_burger').removeClass('menu_burger_open');
            $('body').removeClass('menu_burger_open');
        } else {
            $('.menu_burger').addClass('menu_burger_open');
            $('body').addClass('menu_burger_open');
        }

        return false;
    });
};

function menu_close() {
    $('.menu_close-js').click(function(){
        $('.menu_burger').removeClass('menu_burger_open');
        $('body').removeClass('menu_burger_open');
        return false;
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.menu_burger_wrapper_nav').length) {
            $('.menu_burger').removeClass('menu_burger_open');
            $('body').removeClass('menu_burger_open');
        }
    });
};

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
};

document.addEventListener('DOMContentLoaded', () => {
    menu_open();
    menu_close();
    initSmoothScroll();
});