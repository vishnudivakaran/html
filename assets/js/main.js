AOS.init();
$(document).ready(function () {

    var Swipes = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay:
        {
            delay: 2000,
        },
        speed: 2000,
    });
});


