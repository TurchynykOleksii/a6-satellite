const swiper = new Swiper(".styles__swiper", {
  slidesPerView: 1.2,
  centeredSlides: false,
  spaceBetween: 20, // Отступ между слайдами
  loop: true,
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
    768: {
        spaceBetween: 20,
        slidesPerView: 2,
      },
    834: {
      slidesPerView: 3,
    },
    1280: {
        slidesPerView: 4,
      },

  },
});

const swiper2 = new Swiper(".reviews__swiper", {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
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
      spaceBetween: 20,
    },
    834: {
      centeredSlides: false,
      spaceBetween: 92,
      slidesPerView: "auto",
    },
  },
});
const swiper3 = new Swiper(".category__swiper", {
    slidesPerView: 1.23,
    centeredSlides: true,
    spaceBetween: 20,
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
        spaceBetween: 20,
      },
      767: {
        spaceBetween: 20,
        slidesPerView: 3,
      },
      834: {
        centeredSlides: false,
        spaceBetween: 92,
        slidesPerView: "auto",
      },
    },
  });

$('.swiper-button-prev').remove();
$('.swiper-button-next').remove();

const swiper4 = new Swiper('.team__swiper', {
	slidesPerView: 1,
	watchOverflow: true,
	pagination: {
		el: '.swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true
});
