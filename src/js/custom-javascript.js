// Add your custom JS here.


var swiper = new Swiper(".logo-carousel", {
    spaceBetween: 30,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slidesPerView: 4,
    centeredSlides: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    }
});
var swiper = new Swiper(".logo-container", {
    spaceBetween: 30,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slidesPerView: 5,
    centeredSlides: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    }
});
var swiper1 = new Swiper(".carousel-box", {
    spaceBetween: 30,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3.4,
    centeredSlides: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    }
});
var swiper2 = new Swiper(".testimonial-list", {

    speed: 500,
    centeredSlides: true,
    loop: true,
    slidesPerView: 1,
    centeredSlides: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    }
});

var swiper3 = new Swiper(".testimonal-carousel", {
    speed: 500,
    centeredSlides: true,
    loop: true,
    slidesPerView: 1,
    centeredSlides: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    }
});