function sliderBrands() {
    const swiperContainer = document.querySelector('.brands_swiper-js');

    const swiper = new Swiper(swiperContainer, {
        loop: true,
        slidesPerView: 7,
        speed: 5000,
        spaceBetween: 40,
        autoplay: {
            delay: 0,
            enabled: true,
        },
        breakpoints: {
            // écran ≤ 768px
            0: {
                slidesPerView: 2,
            },
            // écran ≥ 769px
            769: {
                slidesPerView: 7,
            }
        },
    });
}

$(function() {
    sliderBrands();
});