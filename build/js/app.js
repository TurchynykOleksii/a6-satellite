// JS fragment import example

// import Bound from './libs/bounds.js'

// const boundary = Bound({
// 	margins: {bottom: 100}
// })

// const image = document.querySelectorAll('img[data-src]')

// const whenImageEnters = (image) => {
// 	return () => {
// 		image.src = image.dataset.src
// 	}
// }

// image.forEach(img => {
// 	boundary.watch(img, whenImageEnters(img))
// })

// Динамический адаптив
// Документация: https://github.com/FreelancerLifeStyle/dynamic_adapt#readme
//import './libs/dynamicAdapt.js';

let isDesk = $("body").hasClass("desktop"),
  menuOpen = false;

let scrollTop = $(window).scrollTop(),
  lastScrollTop = scrollTop;

var mobile = window.matchMedia("(min-width: 0px) and (max-width: 768px)");
var tablet = window.matchMedia("(min-width: 769px) and (max-width: 1023px)");
var desktop = window.matchMedia("(min-width: 1023px) and (max-width: 1279px)"); // Enable (for mobile)
var desktop_pc = window.matchMedia("(min-width: 1280px)");

if ($("header").hasClass("autoHide")) {
  if (mobile.matches && scrollTop > 200) {
    $("header").addClass("header--scrolled");
  } else if (scrollTop > 800) {
    $("header").addClass("header--scrolled");
  }
}

function throttle(fn, wait) {
  var time = Date.now();
  return function () {
    if (time + wait - Date.now() < 0) {
      fn();
      time = Date.now();
    }
  };
}

window.addEventListener("scroll", throttle(DocumentScroll, 100));

function DocumentScroll() {
  scrollTop = $(window).scrollTop();

  if ($("header").hasClass("autoHide")) {
    if (scrollTop < lastScrollTop || scrollTop < 200) {
      // scroll UP
      $("header").removeClass("header--hide");
    } else if (scrollTop > 200) {
      // scroll DOWN
      $("header").addClass("header--hide");
    }
  }

  if (mobile.matches) {
    scrollTop > 200
      ? $("header").addClass("header--scrolled")
      : $("header").removeClass("header--scrolled");
  } else {
    scrollTop > 800
      ? $("header").addClass("header--scrolled")
      : $("header").removeClass("header--scrolled");
  }

  lastScrollTop = scrollTop;
}

$(document).ready(function () {
  // -------------------------- > dev_stage

  $(".menu-item__submenu").on("click", function (event) {
    event.preventDefault();

    const submenu = $(this).siblings(".sub-menu");

    if (submenu.hasClass("submenu--open")) {
      submenu.removeClass("submenu--open");
      $(this).removeClass("open"); // Удаляем класс .open при повторном клике
    } else {
      $(".sub-menu").removeClass("submenu--open");
      $(".menu-item__submenu").removeClass("open"); // Удаляем класс .open со всех элементов

      submenu.addClass("submenu--open");
      $(this).addClass("open"); // Добавляем класс .open к текущему элементу
    }
  });

  // < -------------------------- dev_stage

  const urlParams = window.location.search
    .replace("?", "")
    .split("&")
    .reduce(function (p, e) {
      var a = e.split("=");
      p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
      return p;
    }, {});

  if (urlParams["thank-you"]) {
    const url = new URL(document.location);
    const searchParams = url.searchParams;
    searchParams.delete("thank-you");
    window.history.pushState({}, "", url.toString());
  }

  $(".header__burger").on("click", function () {
    if (!$("body").hasClass("menu-open")) {
      $("body").addClass("menu-open");
    } else {
      $("body").removeClass("menu-open");
    }
  });

  $(".header__menu-liscrollTop a").on("click", function () {
    $(".header__burger").removeClass("active");
    $("body").removeClass("menu-open");
  });

  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      event.preventDefault();
      const formID = event.detail.contactFormId;
      const $popupThanks = $(".popup--thanks");

      if ($popupThanks) {
        $(".popup").hide();
        $("body").addClass("scroll-disable");
        $popupThanks.parent().addClass("show").hide().fadeIn(200);
        $popupThanks.hide().fadeIn(200);
      }

      if ($('input[value="' + formID + '"]')) {
        const formName = $('input[value="' + formID + '"]').val();
        window.history.pushState("1", "Thank-you", "?thank-you=" + formName);
      } else {
        window.history.pushState("1", "Thank-you", "?thank-you=" + formID);
      }
    },
    false
  );
});
const swiper = new Swiper('.styles__swiper', {
	slidesPerView: 'auto',
	centeredSlides: false,
	spaceBetween: 20,
	loop: true,
	pagination: {
		el: '.styles__swiper .swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		768: {
			slidesPerView: 1.4,
            spaceBetween: 40,
		},
	},
});

const swiper2 = new Swiper('.reviews__swiper', {
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true,
	pagination: {
		el: '.reviews__swiper .swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		320: {
			spaceBetween: 20,
		},
		834: {
			centeredSlides: false,
			spaceBetween: 92,
			slidesPerView: 'auto',
		},
	},
});
const swiper3 = new Swiper('.category__swiper', {
	slidesPerView: 1.2,
	centeredSlides: true,
	spaceBetween: 20,
	pagination: {
		el: '.category__swiper .swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		768: {
			loop: true,
			slidesPerView: 3,
		},
	},
});

// $('.swiper-button-prev').remove();
// $('.swiper-button-next').remove();

const swiper4 = new Swiper('.team__swiper', {
	slidesPerView: 1,
	watchOverflow: true,
	pagination: {
		el: '.team__swiper .swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true,
});

const swiper5 = new Swiper('.video__swiper', {
	slidesPerView: 1,
	watchOverflow: true,
	pagination: {
		el: '.video__swiper .swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true,
    breakpoints: {
		768: {
			loop: true,
		},
	},
});

$('.video-frame').on('click', function () {
	let $this = $(this);
    $(this).addClass('hide')
	if (!$this.hasClass('video-play')) {
		$this.addClass('video-play');

		setTimeout(function () {
			$this.find('img').fadeOut();
		}, 500);

		let src = $this.data('video-id');
		let iframe = $('<iframe src="https://www.youtube.com/embed/' + src + '?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

		$this.find('.iframe').append(iframe);
	}
});

$('.add_arrow>a').addClass('menu-item__submenu');
$('.menu-item__submenu').append(`<svg width="24" height="24" id="arrow-down" viewBox="0 0 24 24" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M19.4448 8.48145L12.4817 15.4446L5.51848 8.48144" stroke-width="2"
    stroke-linecap="round" stroke-linejoin="round" />
</svg>`);