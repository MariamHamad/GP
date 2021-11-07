var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters

  loop: true,
  speed: 3000,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

autoplay: {
    delay: 3000,

  },
   fadeEffect: {
    crossFade: true
  },
  
breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 1,
      spaceBetween: 40
    }
  }
  
});