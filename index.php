<?php 
/*
Template Name: Головна
*/
get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="banner__content">
            <svg class="banner__logo-pc" width="197" height="158" viewBox="0 0 96 77" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M34.4218 0L0 73.6504H5.87951L15.4319 52.9231H47.4721C47.9827 56.0128 48.7635 58.8503 49.8143 61.4354C51.8585 66.4641 54.8609 70.3152 58.8215 72.9886C62.846 75.6621 67.7968 76.9989 73.6738 76.9989C77.9538 76.9989 81.7548 76.1714 85.0766 74.5163C88.4622 72.8613 91.1133 70.5379 93.0297 67.5462C95.01 64.4908 96.0002 60.9262 96.0002 56.8523C96.0002 52.8421 95.042 49.3411 93.1255 46.3493C91.273 43.3576 88.6539 41.066 85.2682 39.4746C81.9464 37.8196 78.0497 36.9921 73.578 36.9921C69.7452 36.9921 66.2317 37.6923 63.0377 39.0927C61.6283 39.6826 60.3308 40.3964 59.1453 41.2341L53.5553 29.2735C54.6847 25.9292 56.3124 23.1233 58.4382 20.8558C62.9738 15.9544 69.0105 13.5037 76.5485 13.5037C79.1037 13.5037 81.4992 13.7583 83.7351 14.2676C86.0348 14.7131 88.047 15.477 89.7718 16.5591L91.7841 12.6444C89.7399 11.3713 87.4082 10.4801 84.7891 9.97088C82.17 9.46165 79.4231 9.20703 76.5485 9.20703C70.6075 9.20703 65.4013 10.5119 60.9296 13.1218C56.7248 15.516 53.3955 19.0359 50.9417 23.6814L39.8738 0H34.4218ZM48.3484 30.2495L37.0963 5.91422L17.5169 48.3988H46.931C46.809 46.8178 46.748 45.1798 46.748 43.4849C46.748 38.5279 47.2815 34.1161 48.3484 30.2495ZM54.8768 52.9231C54.5042 54.2587 54.3179 55.6639 54.3179 57.1387C54.3179 59.7485 55.0526 62.2629 56.5218 64.6818C57.9911 67.037 60.1311 68.9784 62.9418 70.5061C64.3864 71.2738 65.9924 71.8487 67.7596 72.2306L58.8322 52.9231H54.8768ZM60.7865 44.7457L73.8957 72.7947C77.2367 72.7465 80.1652 72.1109 82.681 70.888C85.3001 69.5513 87.3443 67.7053 88.8136 65.3501C90.3467 62.9313 91.1133 60.1305 91.1133 56.9478C91.1133 52.1737 89.4843 48.3544 86.2264 45.49C83.0324 42.6255 78.5927 41.1933 72.9073 41.1933C69.2661 41.1933 66.0401 41.8935 63.2293 43.2939C62.3565 43.7288 61.5422 44.2127 60.7865 44.7457ZM55.1767 45.0172L51.8452 37.812C51.705 39.3726 51.6349 41.009 51.6349 42.721C51.6349 44.1851 51.7308 46.0629 51.9224 48.3544C51.9237 48.3692 51.925 48.384 51.9262 48.3988H53.113C53.6739 47.1856 54.3618 46.0583 55.1767 45.0172Z"
                    fill="#191C22" />
            </svg>
            <svg class="banner__logo-mob" width="96" height="77" viewBox="0 0 96 77" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M34.4218 0L0 73.6504H5.87951L15.4319 52.9231H47.4721C47.9827 56.0128 48.7635 58.8503 49.8143 61.4354C51.8585 66.4641 54.8609 70.3152 58.8215 72.9886C62.846 75.6621 67.7968 76.9989 73.6738 76.9989C77.9538 76.9989 81.7548 76.1714 85.0766 74.5163C88.4622 72.8613 91.1133 70.5379 93.0297 67.5462C95.01 64.4908 96.0002 60.9262 96.0002 56.8523C96.0002 52.8421 95.042 49.3411 93.1255 46.3493C91.273 43.3576 88.6539 41.066 85.2682 39.4746C81.9464 37.8196 78.0497 36.9921 73.578 36.9921C69.7452 36.9921 66.2317 37.6923 63.0377 39.0927C61.6283 39.6826 60.3308 40.3964 59.1453 41.2341L53.5553 29.2735C54.6847 25.9292 56.3124 23.1233 58.4382 20.8558C62.9738 15.9544 69.0105 13.5037 76.5485 13.5037C79.1037 13.5037 81.4992 13.7583 83.7351 14.2676C86.0348 14.7131 88.047 15.477 89.7718 16.5591L91.7841 12.6444C89.7399 11.3713 87.4082 10.4801 84.7891 9.97088C82.17 9.46165 79.4231 9.20703 76.5485 9.20703C70.6075 9.20703 65.4013 10.5119 60.9296 13.1218C56.7248 15.516 53.3955 19.0359 50.9417 23.6814L39.8738 0H34.4218ZM48.3484 30.2495L37.0963 5.91422L17.5169 48.3988H46.931C46.809 46.8178 46.748 45.1798 46.748 43.4849C46.748 38.5279 47.2815 34.1161 48.3484 30.2495ZM54.8768 52.9231C54.5042 54.2587 54.3179 55.6639 54.3179 57.1387C54.3179 59.7485 55.0526 62.2629 56.5218 64.6818C57.9911 67.037 60.1311 68.9784 62.9418 70.5061C64.3864 71.2738 65.9924 71.8487 67.7596 72.2306L58.8322 52.9231H54.8768ZM60.7865 44.7457L73.8957 72.7947C77.2367 72.7465 80.1652 72.1109 82.681 70.888C85.3001 69.5513 87.3443 67.7053 88.8136 65.3501C90.3467 62.9313 91.1133 60.1305 91.1133 56.9478C91.1133 52.1737 89.4843 48.3544 86.2264 45.49C83.0324 42.6255 78.5927 41.1933 72.9073 41.1933C69.2661 41.1933 66.0401 41.8935 63.2293 43.2939C62.3565 43.7288 61.5422 44.2127 60.7865 44.7457ZM55.1767 45.0172L51.8452 37.812C51.705 39.3726 51.6349 41.009 51.6349 42.721C51.6349 44.1851 51.7308 46.0629 51.9224 48.3544C51.9237 48.3692 51.925 48.384 51.9262 48.3988H53.113C53.6739 47.1856 54.3618 46.0583 55.1767 45.0172Z"
                    fill="#191C22" />
            </svg>
            <h1 class="banner__title">Satellite</h1>
            <div class="study__wrap">
                <h2 class="study__title">Дитяча студія танцю</h2>
                <p class="study__subtitle">Запрошуємо дітей від 2 років</p>
                <button class="study__btn">Записатися</button>
            </div>
        </div>
        <div class="banner__image">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/hero.png" class="banner__mob-img"
                alt="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/banner__pc.png"
                class="banner__pc-img" alt="main about">
        </div>
    </div>
</section>
<section class="study">
    <div class="container">
        <div class="study__wrap">
            <h2 class="study__title">Дитяча студія танцю</h2>
            <p class="study__subtitle">Запрошуємо дітей від 2 років</p>
            <button class="study__btn">Записатися</button>
        </div>
    </div>
</section>
<section class="about__main">
    <div class="container">
        <div class="about__main-wrap">
            <div class="about__main-img">
                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/main-about.png"
                    alt="main about">

            </div>
            <div class="about__main-wrp">
                <h3 class="about__main-title">Дитяча танцювальна студія А6 Satellite</h3>
                <div class="about__main-content">
                    <div class="about__main-text">
                        <p>Вітаємо у дитячій студії сучасного танцю А6 Satellite!</p>
                        <p>Тут діти переконуються, що магія існує: майстерність викладачів у поєднанні з наполегливістю
                            учнів перетворює перші нерішучі рухи на гармонійну композицію. Докладаючи зусилля, малеча
                            розкриває природний потенціал.</p>
                        <p class="about__hide-pl">
                            Здобуваючи багато навичок, підопічні стають ближчими до мрії танцювати граційно й вправно та
                            отримувати відзнаки за свої успіхи.
                        </p>
                    </div>
                    <a href="#" class="about__main-link">Дізнатись більше <svg width="24" height="25"
                            viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.2829 5.5L20.9999 12.5L14.2829 19.5M20.0002 12.5317H4" stroke="#FBCD4D"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose">
    <div class="container">
        <h3 class="why-choose__title">Чому обирають нас:</h3>
        <div class="swiper category__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="why-choose__content">
                        <div class="why-choose__img"><img
                                src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/1.png" alt="logo" />
                        </div>
                        <p>Танцювальні групи дітей від 2 років</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="why-choose__content">
                        <div class="why-choose__img"><img
                                src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/2.png" alt="logo" />
                        </div>
                        <p>Кваліфіковані викладачі</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="why-choose__content">
                        <div class="why-choose__img"><img
                                src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/3.png" alt="logo" />
                        </div>
                        <p>Різноманітні танцювальні стилі</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="why-choose__content">
                        <div class="why-choose__img"><img
                                src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/4.png" alt="logo" />
                        </div>
                        <p>Постійна участь в фестивалях</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <ul class="why-choose__list">
            <li class="why-choose__item">
                <div class="why-choose__content">
                    <div class="why-choose__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/1.png" alt="logo" /></div>
                    <p>Танцювальні групи дітей від 2 років</p>
                </div>
            </li>
            <li class="why-choose__item">
                <div class="why-choose__content">
                    <div class="why-choose__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/2.png" alt="logo" /></div>
                    <p>Кваліфіковані викладачі</p>
                </div>
            </li>
            <li class="why-choose__item">
                <div class="why-choose__content">
                    <div class="why-choose__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/3.png" alt="logo" /></div>
                    <p>Різноманітні танцювальні стилі</p>
                </div>
            </li>
            <li class="why-choose__item">
                <div class="why-choose__content">
                    <div class="why-choose__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/build/img/why-us/4.png" alt="logo" /></div>
                    <p>Постійна участь в фестивалях</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="styles">
    <div class="container">
        <div class="styles__wrap">
            <h4 class="styles__title">styles</h4>
            <div class="swiper styles__swiper style__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-content styles__slide-content">
                            <div class="styles__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/styles.png"
                                    alt="styles">
                            </div>
                            <a href="#" class="styles__content-title">jazz-funk</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content styles__slide-content">
                            <div class="styles__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/hip-hop.png"
                                    alt="styles">
                            </div>
                            <a href="#" class="styles__content-title">hip-hop</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content styles__slide-content">
                            <div class="styles__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/contemporary.png"
                                    alt="styles">
                            </div>
                            <a href="#" class="styles__content-title">contemporary</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content styles__slide-content">
                            <div class="styles__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/Choreography.png"
                                    alt="styles">
                            </div>
                            <a href="#" class="styles__content-title">Choreography</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content styles__slide-content">
                            <div class="styles__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/modern-juzz.png"
                                    alt="styles">
                            </div>
                            <a href="#" class="styles__content-title">Modern Jazz</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="styles__list">
                <div class="styles__item">
                    <div class="slide-content styles__slide-content">
                        <div class="styles__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/styles.png"
                                alt="styles">
                        </div>
                        <a href="#" class="styles__content-title">jazz-funk</a>
                    </div>
                </div>
                <div class="styles__item">
                    <div class="slide-content styles__slide-content">
                        <div class="styles__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/hip-hop.png"
                                alt="styles">
                        </div>
                        <a href="#" class="styles__content-title">hip-hop</a>
                    </div>
                </div>
                <div class="styles__item">
                    <div class="slide-content styles__slide-content">
                        <div class="styles__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/contemporary.png"
                                alt="styles">
                        </div>
                        <a href="#" class="styles__content-title">contemporary</a>
                    </div>
                </div>
                <div class="styles__item">
                    <div class="slide-content styles__slide-content">
                        <div class="styles__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/Choreography.png"
                                alt="styles">
                        </div>
                        <a href="#" class="styles__content-title">Choreography</a>
                    </div>
                </div>
                <div class="styles__item">
                    <div class="slide-content styles__slide-content">
                        <div class="styles__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/modern-juzz.png"
                                alt="styles">
                        </div>
                        <a href="#" class="styles__content-title">Modern Jazz</a>
                    </div>
                </div>
            </div>
            <div class="styles__prices">
                <p>Вартість абонементу від 1050 грн./міс.</p>
                <a href="#">Дізнатись більше <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2829 5.5L20.9999 12.5L14.2829 19.5M20.0002 12.5317H4" stroke="black"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></a>
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="team__wrap">
            <h4 class="team__title">Наша команда</h4>
            <div class="swiper team__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="team__img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/build/img/general/main-anastasia.png"
                                    alt="logo" /></div>
                            <a href="#" class="team__content">
                                <div class="team__content-pc-wrap">
                                    <span class="team__name">Анастасія Панченко</span>
                                    <p>Витончена, ніжна, та енергійна викладачка напрямку Contemporary.</p>
                                    <p>
                                        Для Анастасії робота з дітьми - не просто виховання підростаючого покоління. Це
                                        можливість передати любов до танцю та бути причетною до іх особистого розвитку
                                    </p>
                                </div>
                                <div class="team__content-wrap">
                                    <span class="team__name">Анастасія Панченко</span>
                                    <span class="team__about-style">Contemporary</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="team__img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/build/img/general/ivan-solo.jpg"
                                    alt="logo" /></div>
                            <a href="#" class="team__content">
                                <div class="team__content-pc-wrap">
                                    <span class="team__name">Іван Пирхало</span>
                                    <p>Іван Пирхало — харизматичний, веселий та активний викладач напрямку Хіп-Хоп.</p>
                                    <p>
                                        Іван добре знаходить спільну мову з дітками та підлітками, а також чудово вміє
                                        передавати відчуття ритму та експресії. Завжди створює запальну атмосферу
                                        на заняттях та виступах.
                                    </p>
                                </div>
                                <div class="team__content-wrap">
                                    <span class="team__name">Іван Пирхало</span>
                                    <span class="team__about-style">hip hop</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<section class="main-gallary">
    <div class="container">
        <div class="main-gallary__Wrap">
            <h5 class="main-gallary__title">Галерея</h5>
            <ul class="main-gallary__list">
                <li class="main-gallary__item">
                    <div class="main-gallary__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/gallary1.png"
                            alt="gallary">
                    </div>
                </li>
                <li class="main-gallary__item">
                    <div class="main-gallary__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/gallary2.png"
                            alt="gallary">
                    </div>
                </li>
                <li class="main-gallary__item">
                    <div class="main-gallary__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/gallary3.png"
                            alt="gallary">
                    </div>
                </li>
                <li class="main-gallary__item">
                    <div class="main-gallary__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/gallary4.png"
                            alt="gallary">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="main-location">
    <div class="container">
        <div class="main-location__wrap">
            <h5 class="main-location__title">Локації студій</h5>
            <div class="contacts__map-wrap contacts__map-first">
                <div class="contacts__map-info">
                    <a href="https://maps.app.goo.gl/SkDmT8aufXgNPfPd9" class="contacts__map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/map.png" alt="map">
                    </a>
                    <a href="https://maps.app.goo.gl/SkDmT8aufXgNPfPd9" class="contacts__link">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.7782 23.7782C24.361 25.1953 21.2422 28.3142 19.4135 30.1429C18.6324 30.9239 17.3682 30.9246 16.5872 30.1435C14.789 28.3454 11.7351 25.2914 10.2218 23.7782C5.92606 19.4824 5.92606 12.5176 10.2218 8.22183C14.5176 3.92606 21.4824 3.92606 25.7782 8.22183C30.0739 12.5176 30.0739 19.4824 25.7782 23.7782Z"
                                stroke="#191C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M22.125 16C22.125 18.2782 20.2782 20.125 18 20.125C15.7218 20.125 13.875 18.2782 13.875 16C13.875 13.7218 15.7218 11.875 18 11.875C20.2782 11.875 22.125 13.7218 22.125 16Z"
                                stroke="#191C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>вул. Героїв Космосу, 4 </p>
                    </a>
                </div>
                <div class="contacts__map-text">
                    <div class="contacts__map-adress">
                        <p>Київ, вул. Героїв Космосу 4, 02000</p>
                    </div>
                    <div class="contacts__map-schedule">
                        <span>Графік роботи:</span>
                        <span>Пн - Пт: 14:00 - 19:00</span>
                        <span>Сб - Нд: 10:00 - 14:00</span>
                    </div>
                    <div class="contacts__mail-phone">
                        <span>Номер телефону:</span>
                        <a href="tel:+380678537696" class="contacts__phone">+38 067 853 76 96</a>
                        <span>Email:</span>
                        <a href="mailto:mail@email.com" class="contacts__email">a6_satellite@gmail.com</a>
                    </div>

                </div>
            </div>
            <div class="contacts__map-wrap contacts__map-second">
                <div class="contacts__map-info">
                    <a href="https://maps.app.goo.gl/UAPHcgGdEVeVKPnc8" class="contacts__map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/map2.png" alt="map">
                    </a>
                    <a href="https://maps.app.goo.gl/UAPHcgGdEVeVKPnc8" class="contacts__link contacts__link-second main__contacts-link">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.7782 23.7782C24.361 25.1953 21.2422 28.3142 19.4135 30.1429C18.6324 30.9239 17.3682 30.9246 16.5872 30.1435C14.789 28.3454 11.7351 25.2914 10.2218 23.7782C5.92606 19.4824 5.92606 12.5176 10.2218 8.22183C14.5176 3.92606 21.4824 3.92606 25.7782 8.22183C30.0739 12.5176 30.0739 19.4824 25.7782 23.7782Z"
                                stroke="#191C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M22.125 16C22.125 18.2782 20.2782 20.125 18 20.125C15.7218 20.125 13.875 18.2782 13.875 16C13.875 13.7218 15.7218 11.875 18 11.875C20.2782 11.875 22.125 13.7218 22.125 16Z"
                                stroke="#191C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>вул. Святошинська, 16/1 </p>
                    </a>
                </div>
                <div class="contacts__map-text">
                    <div class="contacts__map-adress">
                        <p>Київ, вул. Святошинська, 16/1</p>
                    </div>
                    <div class="contacts__map-schedule">
                        <span>Графік роботи:</span>
                        <span>Сб - Нд: 10:00 - 14:00</span>
                        <span>Пн - Пт: 14:00 - 19:00</span>
                    </div>
                    <div class="contacts__mail-phone">
                        <span>Номер телефону:</span>
                        <a href="tel:+380678537696">+38 067 853 76 96</a>
                        <span>Email:</span>
                        <a href="mailto:mail@email.com">a6_satellite@gmail.com</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="reviews__wrap">
            <h6 class="reviews__title">
                Відгуки батьків
            </h6>
            <div class="swiper reviews__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="reviews__text">
                            А6 просто супер. Викладачі приємні, добрі та професіонали своєї справи. А головне те, що моя
                            доця взахваті від студії з першого заняття і займається з задоволенням, навіть, якщо дуже
                            втомлена після школи. Дякую А6, що робите мою дитину щасливою!
                        </p>
                        <div class="reviews__content">
                            <div class="reviews__content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/reviews-photo.png"
                                    alt="photo">
                            </div>
                            <div class="reviews__content-rating">
                                <span class="reviews__content-name">Наталія Бойко</span>
                                <svg width="166" height="22" viewBox="0 0 166 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.84799 4.84569C9.75993 2.61523 10.2159 1.5 11 1.5C11.7841 1.5 12.2401 2.61523 13.152 4.84569L13.1945 4.94955C13.7097 6.20965 13.9673 6.8397 14.4923 7.22265C15.0173 7.6056 15.7065 7.66616 17.0848 7.78726L17.334 7.80916C19.5899 8.00737 20.7178 8.10647 20.9592 8.81051C21.2005 9.51455 20.3629 10.2622 18.6876 11.7576L18.1284 12.2566C17.2804 13.0136 16.8563 13.3921 16.6587 13.8881C16.6218 13.9807 16.5912 14.0755 16.567 14.1719C16.437 14.6891 16.5612 15.2381 16.8096 16.3363L16.8869 16.6781C17.3433 18.6962 17.5715 19.7053 17.173 20.1405C17.0241 20.3032 16.8306 20.4203 16.6157 20.4778C16.0404 20.6318 15.2237 19.9789 13.5902 18.673C12.5176 17.8156 11.9813 17.3868 11.3656 17.2904C11.1234 17.2524 10.8766 17.2524 10.6344 17.2904C10.0187 17.3868 9.48238 17.8156 8.40979 18.673C6.77633 19.9789 5.95961 20.6318 5.38434 20.4778C5.16938 20.4203 4.97587 20.3032 4.82698 20.1405C4.42854 19.7053 4.65674 18.6962 5.11314 16.6781L5.19045 16.3363C5.43879 15.2381 5.56296 14.6891 5.43305 14.1719C5.40881 14.0755 5.37817 13.9807 5.3413 13.8881C5.14366 13.3921 4.71963 13.0136 3.87156 12.2566L3.31243 11.7576C1.63713 10.2622 0.799483 9.51455 1.04083 8.81051C1.28218 8.10647 2.41011 8.00737 4.66598 7.80916L4.91516 7.78726C6.29352 7.66616 6.9827 7.6056 7.50771 7.22265C8.03272 6.8397 8.29032 6.20965 8.80553 4.94955L8.84799 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M44.848 4.84569C45.7599 2.61523 46.2159 1.5 47 1.5C47.7841 1.5 48.2401 2.61523 49.152 4.84569L49.1945 4.94955C49.7097 6.20965 49.9673 6.8397 50.4923 7.22265C51.0173 7.6056 51.7065 7.66616 53.0848 7.78726L53.334 7.80916C55.5899 8.00737 56.7178 8.10647 56.9592 8.81051C57.2005 9.51455 56.3629 10.2622 54.6876 11.7576L54.1284 12.2566C53.2804 13.0136 52.8563 13.3921 52.6587 13.8881C52.6218 13.9807 52.5912 14.0755 52.567 14.1719C52.437 14.6891 52.5612 15.2381 52.8096 16.3363L52.8869 16.6781C53.3433 18.6962 53.5715 19.7053 53.173 20.1405C53.0241 20.3032 52.8306 20.4203 52.6157 20.4778C52.0404 20.6318 51.2237 19.9789 49.5902 18.673C48.5176 17.8156 47.9813 17.3868 47.3656 17.2904C47.1234 17.2524 46.8766 17.2524 46.6344 17.2904C46.0187 17.3868 45.4824 17.8156 44.4098 18.673C42.7763 19.9789 41.9596 20.6318 41.3843 20.4778C41.1694 20.4203 40.9759 20.3032 40.827 20.1405C40.4285 19.7053 40.6567 18.6962 41.1131 16.6781L41.1904 16.3363C41.4388 15.2381 41.563 14.6891 41.433 14.1719C41.4088 14.0755 41.3782 13.9807 41.3413 13.8881C41.1437 13.3921 40.7196 13.0136 39.8716 12.2566L39.3124 11.7576C37.6371 10.2622 36.7995 9.51455 37.0408 8.81051C37.2822 8.10647 38.4101 8.00737 40.666 7.80916L40.9152 7.78726C42.2935 7.66616 42.9827 7.6056 43.5077 7.22265C44.0327 6.8397 44.2903 6.20965 44.8055 4.94955L44.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M80.848 4.84569C81.7599 2.61523 82.2159 1.5 83 1.5C83.7841 1.5 84.2401 2.61523 85.152 4.84569L85.1945 4.94955C85.7097 6.20965 85.9673 6.8397 86.4923 7.22265C87.0173 7.6056 87.7065 7.66616 89.0848 7.78726L89.334 7.80916C91.5899 8.00737 92.7178 8.10647 92.9592 8.81051C93.2005 9.51455 92.3629 10.2622 90.6876 11.7576L90.1284 12.2566C89.2804 13.0136 88.8563 13.3921 88.6587 13.8881C88.6218 13.9807 88.5912 14.0755 88.567 14.1719C88.437 14.6891 88.5612 15.2381 88.8096 16.3363L88.8869 16.6781C89.3433 18.6962 89.5715 19.7053 89.173 20.1405C89.0241 20.3032 88.8306 20.4203 88.6157 20.4778C88.0404 20.6318 87.2237 19.9789 85.5902 18.673C84.5176 17.8156 83.9813 17.3868 83.3656 17.2904C83.1234 17.2524 82.8766 17.2524 82.6344 17.2904C82.0187 17.3868 81.4824 17.8156 80.4098 18.673C78.7763 19.9789 77.9596 20.6318 77.3843 20.4778C77.1694 20.4203 76.9759 20.3032 76.827 20.1405C76.4285 19.7053 76.6567 18.6962 77.1131 16.6781L77.1904 16.3363C77.4388 15.2381 77.563 14.6891 77.433 14.1719C77.4088 14.0755 77.3782 13.9807 77.3413 13.8881C77.1437 13.3921 76.7196 13.0136 75.8716 12.2566L75.3124 11.7576C73.6371 10.2622 72.7995 9.51455 73.0408 8.81051C73.2822 8.10647 74.4101 8.00737 76.666 7.80916L76.9152 7.78726C78.2935 7.66616 78.9827 7.6056 79.5077 7.22265C80.0327 6.8397 80.2903 6.20965 80.8055 4.94955L80.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M116.848 4.84569C117.76 2.61523 118.216 1.5 119 1.5C119.784 1.5 120.24 2.61523 121.152 4.84569L121.194 4.94955C121.71 6.20965 121.967 6.8397 122.492 7.22265C123.017 7.6056 123.706 7.66616 125.085 7.78726L125.334 7.80916C127.59 8.00737 128.718 8.10647 128.959 8.81051C129.201 9.51455 128.363 10.2622 126.688 11.7576L126.128 12.2566C125.28 13.0136 124.856 13.3921 124.659 13.8881C124.622 13.9807 124.591 14.0755 124.567 14.1719C124.437 14.6891 124.561 15.2381 124.81 16.3363L124.887 16.6781C125.343 18.6962 125.571 19.7053 125.173 20.1405C125.024 20.3032 124.831 20.4203 124.616 20.4778C124.04 20.6318 123.224 19.9789 121.59 18.673C120.518 17.8156 119.981 17.3868 119.366 17.2904C119.123 17.2524 118.877 17.2524 118.634 17.2904C118.019 17.3868 117.482 17.8156 116.41 18.673C114.776 19.9789 113.96 20.6318 113.384 20.4778C113.169 20.4203 112.976 20.3032 112.827 20.1405C112.429 19.7053 112.657 18.6962 113.113 16.6781L113.19 16.3363C113.439 15.2381 113.563 14.6891 113.433 14.1719C113.409 14.0755 113.378 13.9807 113.341 13.8881C113.144 13.3921 112.72 13.0136 111.872 12.2566L111.312 11.7576C109.637 10.2622 108.799 9.51455 109.041 8.81051C109.282 8.10647 110.41 8.00737 112.666 7.80916L112.915 7.78726C114.294 7.66616 114.983 7.6056 115.508 7.22265C116.033 6.8397 116.29 6.20965 116.806 4.94955L116.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M152.848 4.84569C153.76 2.61523 154.216 1.5 155 1.5C155.784 1.5 156.24 2.61523 157.152 4.84569L157.194 4.94955C157.71 6.20965 157.967 6.8397 158.492 7.22265C159.017 7.6056 159.706 7.66616 161.085 7.78726L161.334 7.80916C163.59 8.00737 164.718 8.10647 164.959 8.81051C165.201 9.51455 164.363 10.2622 162.688 11.7576L162.128 12.2566C161.28 13.0136 160.856 13.3921 160.659 13.8881C160.622 13.9807 160.591 14.0755 160.567 14.1719C160.437 14.6891 160.561 15.2381 160.81 16.3363L160.887 16.6781C161.343 18.6962 161.571 19.7053 161.173 20.1405C161.024 20.3032 160.831 20.4203 160.616 20.4778C160.04 20.6318 159.224 19.9789 157.59 18.673C156.518 17.8156 155.981 17.3868 155.366 17.2904C155.123 17.2524 154.877 17.2524 154.634 17.2904C154.019 17.3868 153.482 17.8156 152.41 18.673C150.776 19.9789 149.96 20.6318 149.384 20.4778C149.169 20.4203 148.976 20.3032 148.827 20.1405C148.429 19.7053 148.657 18.6962 149.113 16.6781L149.19 16.3363C149.439 15.2381 149.563 14.6891 149.433 14.1719C149.409 14.0755 149.378 13.9807 149.341 13.8881C149.144 13.3921 148.72 13.0136 147.872 12.2566L147.312 11.7576C145.637 10.2622 144.799 9.51455 145.041 8.81051C145.282 8.10647 146.41 8.00737 148.666 7.80916L148.915 7.78726C150.294 7.66616 150.983 7.6056 151.508 7.22265C152.033 6.8397 152.29 6.20965 152.806 4.94955L152.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="reviews__text">
                            А6 просто супер. Викладачі приємні, добрі та професіонали своєї справи. А головне те, що моя
                            доця взахваті від студії з першого заняття і займається з задоволенням, навіть, якщо дуже
                            втомлена після школи. Дякую А6, що робите мою дитину щасливою!
                        </p>
                        <div class="reviews__content">
                            <div class="reviews__content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/reviews-photo.png"
                                    alt="photo">
                            </div>
                            <div class="reviews__content-rating">
                                <span class="reviews__content-name">Наталія Бойко</span>
                                <svg width="166" height="22" viewBox="0 0 166 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.84799 4.84569C9.75993 2.61523 10.2159 1.5 11 1.5C11.7841 1.5 12.2401 2.61523 13.152 4.84569L13.1945 4.94955C13.7097 6.20965 13.9673 6.8397 14.4923 7.22265C15.0173 7.6056 15.7065 7.66616 17.0848 7.78726L17.334 7.80916C19.5899 8.00737 20.7178 8.10647 20.9592 8.81051C21.2005 9.51455 20.3629 10.2622 18.6876 11.7576L18.1284 12.2566C17.2804 13.0136 16.8563 13.3921 16.6587 13.8881C16.6218 13.9807 16.5912 14.0755 16.567 14.1719C16.437 14.6891 16.5612 15.2381 16.8096 16.3363L16.8869 16.6781C17.3433 18.6962 17.5715 19.7053 17.173 20.1405C17.0241 20.3032 16.8306 20.4203 16.6157 20.4778C16.0404 20.6318 15.2237 19.9789 13.5902 18.673C12.5176 17.8156 11.9813 17.3868 11.3656 17.2904C11.1234 17.2524 10.8766 17.2524 10.6344 17.2904C10.0187 17.3868 9.48238 17.8156 8.40979 18.673C6.77633 19.9789 5.95961 20.6318 5.38434 20.4778C5.16938 20.4203 4.97587 20.3032 4.82698 20.1405C4.42854 19.7053 4.65674 18.6962 5.11314 16.6781L5.19045 16.3363C5.43879 15.2381 5.56296 14.6891 5.43305 14.1719C5.40881 14.0755 5.37817 13.9807 5.3413 13.8881C5.14366 13.3921 4.71963 13.0136 3.87156 12.2566L3.31243 11.7576C1.63713 10.2622 0.799483 9.51455 1.04083 8.81051C1.28218 8.10647 2.41011 8.00737 4.66598 7.80916L4.91516 7.78726C6.29352 7.66616 6.9827 7.6056 7.50771 7.22265C8.03272 6.8397 8.29032 6.20965 8.80553 4.94955L8.84799 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M44.848 4.84569C45.7599 2.61523 46.2159 1.5 47 1.5C47.7841 1.5 48.2401 2.61523 49.152 4.84569L49.1945 4.94955C49.7097 6.20965 49.9673 6.8397 50.4923 7.22265C51.0173 7.6056 51.7065 7.66616 53.0848 7.78726L53.334 7.80916C55.5899 8.00737 56.7178 8.10647 56.9592 8.81051C57.2005 9.51455 56.3629 10.2622 54.6876 11.7576L54.1284 12.2566C53.2804 13.0136 52.8563 13.3921 52.6587 13.8881C52.6218 13.9807 52.5912 14.0755 52.567 14.1719C52.437 14.6891 52.5612 15.2381 52.8096 16.3363L52.8869 16.6781C53.3433 18.6962 53.5715 19.7053 53.173 20.1405C53.0241 20.3032 52.8306 20.4203 52.6157 20.4778C52.0404 20.6318 51.2237 19.9789 49.5902 18.673C48.5176 17.8156 47.9813 17.3868 47.3656 17.2904C47.1234 17.2524 46.8766 17.2524 46.6344 17.2904C46.0187 17.3868 45.4824 17.8156 44.4098 18.673C42.7763 19.9789 41.9596 20.6318 41.3843 20.4778C41.1694 20.4203 40.9759 20.3032 40.827 20.1405C40.4285 19.7053 40.6567 18.6962 41.1131 16.6781L41.1904 16.3363C41.4388 15.2381 41.563 14.6891 41.433 14.1719C41.4088 14.0755 41.3782 13.9807 41.3413 13.8881C41.1437 13.3921 40.7196 13.0136 39.8716 12.2566L39.3124 11.7576C37.6371 10.2622 36.7995 9.51455 37.0408 8.81051C37.2822 8.10647 38.4101 8.00737 40.666 7.80916L40.9152 7.78726C42.2935 7.66616 42.9827 7.6056 43.5077 7.22265C44.0327 6.8397 44.2903 6.20965 44.8055 4.94955L44.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M80.848 4.84569C81.7599 2.61523 82.2159 1.5 83 1.5C83.7841 1.5 84.2401 2.61523 85.152 4.84569L85.1945 4.94955C85.7097 6.20965 85.9673 6.8397 86.4923 7.22265C87.0173 7.6056 87.7065 7.66616 89.0848 7.78726L89.334 7.80916C91.5899 8.00737 92.7178 8.10647 92.9592 8.81051C93.2005 9.51455 92.3629 10.2622 90.6876 11.7576L90.1284 12.2566C89.2804 13.0136 88.8563 13.3921 88.6587 13.8881C88.6218 13.9807 88.5912 14.0755 88.567 14.1719C88.437 14.6891 88.5612 15.2381 88.8096 16.3363L88.8869 16.6781C89.3433 18.6962 89.5715 19.7053 89.173 20.1405C89.0241 20.3032 88.8306 20.4203 88.6157 20.4778C88.0404 20.6318 87.2237 19.9789 85.5902 18.673C84.5176 17.8156 83.9813 17.3868 83.3656 17.2904C83.1234 17.2524 82.8766 17.2524 82.6344 17.2904C82.0187 17.3868 81.4824 17.8156 80.4098 18.673C78.7763 19.9789 77.9596 20.6318 77.3843 20.4778C77.1694 20.4203 76.9759 20.3032 76.827 20.1405C76.4285 19.7053 76.6567 18.6962 77.1131 16.6781L77.1904 16.3363C77.4388 15.2381 77.563 14.6891 77.433 14.1719C77.4088 14.0755 77.3782 13.9807 77.3413 13.8881C77.1437 13.3921 76.7196 13.0136 75.8716 12.2566L75.3124 11.7576C73.6371 10.2622 72.7995 9.51455 73.0408 8.81051C73.2822 8.10647 74.4101 8.00737 76.666 7.80916L76.9152 7.78726C78.2935 7.66616 78.9827 7.6056 79.5077 7.22265C80.0327 6.8397 80.2903 6.20965 80.8055 4.94955L80.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M116.848 4.84569C117.76 2.61523 118.216 1.5 119 1.5C119.784 1.5 120.24 2.61523 121.152 4.84569L121.194 4.94955C121.71 6.20965 121.967 6.8397 122.492 7.22265C123.017 7.6056 123.706 7.66616 125.085 7.78726L125.334 7.80916C127.59 8.00737 128.718 8.10647 128.959 8.81051C129.201 9.51455 128.363 10.2622 126.688 11.7576L126.128 12.2566C125.28 13.0136 124.856 13.3921 124.659 13.8881C124.622 13.9807 124.591 14.0755 124.567 14.1719C124.437 14.6891 124.561 15.2381 124.81 16.3363L124.887 16.6781C125.343 18.6962 125.571 19.7053 125.173 20.1405C125.024 20.3032 124.831 20.4203 124.616 20.4778C124.04 20.6318 123.224 19.9789 121.59 18.673C120.518 17.8156 119.981 17.3868 119.366 17.2904C119.123 17.2524 118.877 17.2524 118.634 17.2904C118.019 17.3868 117.482 17.8156 116.41 18.673C114.776 19.9789 113.96 20.6318 113.384 20.4778C113.169 20.4203 112.976 20.3032 112.827 20.1405C112.429 19.7053 112.657 18.6962 113.113 16.6781L113.19 16.3363C113.439 15.2381 113.563 14.6891 113.433 14.1719C113.409 14.0755 113.378 13.9807 113.341 13.8881C113.144 13.3921 112.72 13.0136 111.872 12.2566L111.312 11.7576C109.637 10.2622 108.799 9.51455 109.041 8.81051C109.282 8.10647 110.41 8.00737 112.666 7.80916L112.915 7.78726C114.294 7.66616 114.983 7.6056 115.508 7.22265C116.033 6.8397 116.29 6.20965 116.806 4.94955L116.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M152.848 4.84569C153.76 2.61523 154.216 1.5 155 1.5C155.784 1.5 156.24 2.61523 157.152 4.84569L157.194 4.94955C157.71 6.20965 157.967 6.8397 158.492 7.22265C159.017 7.6056 159.706 7.66616 161.085 7.78726L161.334 7.80916C163.59 8.00737 164.718 8.10647 164.959 8.81051C165.201 9.51455 164.363 10.2622 162.688 11.7576L162.128 12.2566C161.28 13.0136 160.856 13.3921 160.659 13.8881C160.622 13.9807 160.591 14.0755 160.567 14.1719C160.437 14.6891 160.561 15.2381 160.81 16.3363L160.887 16.6781C161.343 18.6962 161.571 19.7053 161.173 20.1405C161.024 20.3032 160.831 20.4203 160.616 20.4778C160.04 20.6318 159.224 19.9789 157.59 18.673C156.518 17.8156 155.981 17.3868 155.366 17.2904C155.123 17.2524 154.877 17.2524 154.634 17.2904C154.019 17.3868 153.482 17.8156 152.41 18.673C150.776 19.9789 149.96 20.6318 149.384 20.4778C149.169 20.4203 148.976 20.3032 148.827 20.1405C148.429 19.7053 148.657 18.6962 149.113 16.6781L149.19 16.3363C149.439 15.2381 149.563 14.6891 149.433 14.1719C149.409 14.0755 149.378 13.9807 149.341 13.8881C149.144 13.3921 148.72 13.0136 147.872 12.2566L147.312 11.7576C145.637 10.2622 144.799 9.51455 145.041 8.81051C145.282 8.10647 146.41 8.00737 148.666 7.80916L148.915 7.78726C150.294 7.66616 150.983 7.6056 151.508 7.22265C152.033 6.8397 152.29 6.20965 152.806 4.94955L152.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="reviews__text">
                            А6 просто супер. Викладачі приємні, добрі та професіонали своєї справи. А головне те, що моя
                            доця взахваті від студії з першого заняття і займається з задоволенням, навіть, якщо дуже
                            втомлена після школи. Дякую А6, що робите мою дитину щасливою!
                        </p>
                        <div class="reviews__content">
                            <div class="reviews__content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/reviews-photo.png"
                                    alt="photo">
                            </div>
                            <div class="reviews__content-rating">
                                <span class="reviews__content-name">Наталія Бойко</span>
                                <svg width="166" height="22" viewBox="0 0 166 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.84799 4.84569C9.75993 2.61523 10.2159 1.5 11 1.5C11.7841 1.5 12.2401 2.61523 13.152 4.84569L13.1945 4.94955C13.7097 6.20965 13.9673 6.8397 14.4923 7.22265C15.0173 7.6056 15.7065 7.66616 17.0848 7.78726L17.334 7.80916C19.5899 8.00737 20.7178 8.10647 20.9592 8.81051C21.2005 9.51455 20.3629 10.2622 18.6876 11.7576L18.1284 12.2566C17.2804 13.0136 16.8563 13.3921 16.6587 13.8881C16.6218 13.9807 16.5912 14.0755 16.567 14.1719C16.437 14.6891 16.5612 15.2381 16.8096 16.3363L16.8869 16.6781C17.3433 18.6962 17.5715 19.7053 17.173 20.1405C17.0241 20.3032 16.8306 20.4203 16.6157 20.4778C16.0404 20.6318 15.2237 19.9789 13.5902 18.673C12.5176 17.8156 11.9813 17.3868 11.3656 17.2904C11.1234 17.2524 10.8766 17.2524 10.6344 17.2904C10.0187 17.3868 9.48238 17.8156 8.40979 18.673C6.77633 19.9789 5.95961 20.6318 5.38434 20.4778C5.16938 20.4203 4.97587 20.3032 4.82698 20.1405C4.42854 19.7053 4.65674 18.6962 5.11314 16.6781L5.19045 16.3363C5.43879 15.2381 5.56296 14.6891 5.43305 14.1719C5.40881 14.0755 5.37817 13.9807 5.3413 13.8881C5.14366 13.3921 4.71963 13.0136 3.87156 12.2566L3.31243 11.7576C1.63713 10.2622 0.799483 9.51455 1.04083 8.81051C1.28218 8.10647 2.41011 8.00737 4.66598 7.80916L4.91516 7.78726C6.29352 7.66616 6.9827 7.6056 7.50771 7.22265C8.03272 6.8397 8.29032 6.20965 8.80553 4.94955L8.84799 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M44.848 4.84569C45.7599 2.61523 46.2159 1.5 47 1.5C47.7841 1.5 48.2401 2.61523 49.152 4.84569L49.1945 4.94955C49.7097 6.20965 49.9673 6.8397 50.4923 7.22265C51.0173 7.6056 51.7065 7.66616 53.0848 7.78726L53.334 7.80916C55.5899 8.00737 56.7178 8.10647 56.9592 8.81051C57.2005 9.51455 56.3629 10.2622 54.6876 11.7576L54.1284 12.2566C53.2804 13.0136 52.8563 13.3921 52.6587 13.8881C52.6218 13.9807 52.5912 14.0755 52.567 14.1719C52.437 14.6891 52.5612 15.2381 52.8096 16.3363L52.8869 16.6781C53.3433 18.6962 53.5715 19.7053 53.173 20.1405C53.0241 20.3032 52.8306 20.4203 52.6157 20.4778C52.0404 20.6318 51.2237 19.9789 49.5902 18.673C48.5176 17.8156 47.9813 17.3868 47.3656 17.2904C47.1234 17.2524 46.8766 17.2524 46.6344 17.2904C46.0187 17.3868 45.4824 17.8156 44.4098 18.673C42.7763 19.9789 41.9596 20.6318 41.3843 20.4778C41.1694 20.4203 40.9759 20.3032 40.827 20.1405C40.4285 19.7053 40.6567 18.6962 41.1131 16.6781L41.1904 16.3363C41.4388 15.2381 41.563 14.6891 41.433 14.1719C41.4088 14.0755 41.3782 13.9807 41.3413 13.8881C41.1437 13.3921 40.7196 13.0136 39.8716 12.2566L39.3124 11.7576C37.6371 10.2622 36.7995 9.51455 37.0408 8.81051C37.2822 8.10647 38.4101 8.00737 40.666 7.80916L40.9152 7.78726C42.2935 7.66616 42.9827 7.6056 43.5077 7.22265C44.0327 6.8397 44.2903 6.20965 44.8055 4.94955L44.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M80.848 4.84569C81.7599 2.61523 82.2159 1.5 83 1.5C83.7841 1.5 84.2401 2.61523 85.152 4.84569L85.1945 4.94955C85.7097 6.20965 85.9673 6.8397 86.4923 7.22265C87.0173 7.6056 87.7065 7.66616 89.0848 7.78726L89.334 7.80916C91.5899 8.00737 92.7178 8.10647 92.9592 8.81051C93.2005 9.51455 92.3629 10.2622 90.6876 11.7576L90.1284 12.2566C89.2804 13.0136 88.8563 13.3921 88.6587 13.8881C88.6218 13.9807 88.5912 14.0755 88.567 14.1719C88.437 14.6891 88.5612 15.2381 88.8096 16.3363L88.8869 16.6781C89.3433 18.6962 89.5715 19.7053 89.173 20.1405C89.0241 20.3032 88.8306 20.4203 88.6157 20.4778C88.0404 20.6318 87.2237 19.9789 85.5902 18.673C84.5176 17.8156 83.9813 17.3868 83.3656 17.2904C83.1234 17.2524 82.8766 17.2524 82.6344 17.2904C82.0187 17.3868 81.4824 17.8156 80.4098 18.673C78.7763 19.9789 77.9596 20.6318 77.3843 20.4778C77.1694 20.4203 76.9759 20.3032 76.827 20.1405C76.4285 19.7053 76.6567 18.6962 77.1131 16.6781L77.1904 16.3363C77.4388 15.2381 77.563 14.6891 77.433 14.1719C77.4088 14.0755 77.3782 13.9807 77.3413 13.8881C77.1437 13.3921 76.7196 13.0136 75.8716 12.2566L75.3124 11.7576C73.6371 10.2622 72.7995 9.51455 73.0408 8.81051C73.2822 8.10647 74.4101 8.00737 76.666 7.80916L76.9152 7.78726C78.2935 7.66616 78.9827 7.6056 79.5077 7.22265C80.0327 6.8397 80.2903 6.20965 80.8055 4.94955L80.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M116.848 4.84569C117.76 2.61523 118.216 1.5 119 1.5C119.784 1.5 120.24 2.61523 121.152 4.84569L121.194 4.94955C121.71 6.20965 121.967 6.8397 122.492 7.22265C123.017 7.6056 123.706 7.66616 125.085 7.78726L125.334 7.80916C127.59 8.00737 128.718 8.10647 128.959 8.81051C129.201 9.51455 128.363 10.2622 126.688 11.7576L126.128 12.2566C125.28 13.0136 124.856 13.3921 124.659 13.8881C124.622 13.9807 124.591 14.0755 124.567 14.1719C124.437 14.6891 124.561 15.2381 124.81 16.3363L124.887 16.6781C125.343 18.6962 125.571 19.7053 125.173 20.1405C125.024 20.3032 124.831 20.4203 124.616 20.4778C124.04 20.6318 123.224 19.9789 121.59 18.673C120.518 17.8156 119.981 17.3868 119.366 17.2904C119.123 17.2524 118.877 17.2524 118.634 17.2904C118.019 17.3868 117.482 17.8156 116.41 18.673C114.776 19.9789 113.96 20.6318 113.384 20.4778C113.169 20.4203 112.976 20.3032 112.827 20.1405C112.429 19.7053 112.657 18.6962 113.113 16.6781L113.19 16.3363C113.439 15.2381 113.563 14.6891 113.433 14.1719C113.409 14.0755 113.378 13.9807 113.341 13.8881C113.144 13.3921 112.72 13.0136 111.872 12.2566L111.312 11.7576C109.637 10.2622 108.799 9.51455 109.041 8.81051C109.282 8.10647 110.41 8.00737 112.666 7.80916L112.915 7.78726C114.294 7.66616 114.983 7.6056 115.508 7.22265C116.033 6.8397 116.29 6.20965 116.806 4.94955L116.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                    <path
                                        d="M152.848 4.84569C153.76 2.61523 154.216 1.5 155 1.5C155.784 1.5 156.24 2.61523 157.152 4.84569L157.194 4.94955C157.71 6.20965 157.967 6.8397 158.492 7.22265C159.017 7.6056 159.706 7.66616 161.085 7.78726L161.334 7.80916C163.59 8.00737 164.718 8.10647 164.959 8.81051C165.201 9.51455 164.363 10.2622 162.688 11.7576L162.128 12.2566C161.28 13.0136 160.856 13.3921 160.659 13.8881C160.622 13.9807 160.591 14.0755 160.567 14.1719C160.437 14.6891 160.561 15.2381 160.81 16.3363L160.887 16.6781C161.343 18.6962 161.571 19.7053 161.173 20.1405C161.024 20.3032 160.831 20.4203 160.616 20.4778C160.04 20.6318 159.224 19.9789 157.59 18.673C156.518 17.8156 155.981 17.3868 155.366 17.2904C155.123 17.2524 154.877 17.2524 154.634 17.2904C154.019 17.3868 153.482 17.8156 152.41 18.673C150.776 19.9789 149.96 20.6318 149.384 20.4778C149.169 20.4203 148.976 20.3032 148.827 20.1405C148.429 19.7053 148.657 18.6962 149.113 16.6781L149.19 16.3363C149.439 15.2381 149.563 14.6891 149.433 14.1719C149.409 14.0755 149.378 13.9807 149.341 13.8881C149.144 13.3921 148.72 13.0136 147.872 12.2566L147.312 11.7576C145.637 10.2622 144.799 9.51455 145.041 8.81051C145.282 8.10647 146.41 8.00737 148.666 7.80916L148.915 7.78726C150.294 7.66616 150.983 7.6056 151.508 7.22265C152.033 6.8397 152.29 6.20965 152.806 4.94955L152.848 4.84569Z"
                                        stroke="#FDD76E" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>