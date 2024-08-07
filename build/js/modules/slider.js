const swiper = new Swiper(".swiper", {
  slidesPerView: "auto",
  centeredSlides: false,
  spaceBetween: 20, // Отступ между слайдами
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      spaceBetween: 16,
    },
    834: {
      spaceBetween: 20,
    },
    1103: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 24,
    },
  },
});

const swiper2 = new Swiper(".swiper2", {
  slidesPerView: 1,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination2",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      spaceBetween: 0,
    },
    834: {
      spaceBetween: 20,
    },
    1103: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 24,
    },
  },
});

// $('.swiper-button-prev').remove();
// $('.swiper-button-next').remove();

// const swiper = new Swiper('.swiper', {
// 	slidesPerView: 1,
// 	watchOverflow: true,
// 	pagination: {
// 		el: '.swiper-pagination',
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	},
// 	spaceBetween: 20,
// 	autoHeight: true
// });
