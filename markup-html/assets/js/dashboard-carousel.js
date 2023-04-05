var mySwiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  loop: true,
  centeredSlides: true,
  grabCursor:true,
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 0,
    stretch: 50,
    depth: 90,
    modifier: 1,
    slideShadows : false,
  },
  navigation: {
    prevEl: ".swiper-button-prev",
    nextEl: ".swiper-button-next"
  },
  pagination: {
    el: ".swiper-pagination",
    type: 'bullets',
    clickable: true
  },

});
