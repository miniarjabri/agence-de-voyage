
var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: { 
            slidesPerView: 1,},
        768: { slidesPerView: 2,},
        1024: {slidesPerView: 3,},

    },
     // And if we need scrollbar
     scrollbar: {
        el: '.swiper-scrollbar',
      },
    
  });
  