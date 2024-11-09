<?php 
/*
Template Name: контакти
*/
get_header(); ?>


<section class="contacts-location">
    <div class="container">
        <div class="main-location__wrap">
            <h1 class="contacts__contact-title">Контакти</h1>
            <h5 class="main-location__title">А6 Satellite Героїв Космосу</h5>
            <div class="contacts__map-wrap contacts__map-first">
                <div class="contacts__map-info">
                    <a href="#" class="contacts__map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/map.png" alt="map">
                    </a>
                    <a href="#" class="contacts__link">
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
                        <p>Київ, вул. Героїв Космосу, 4</p>
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
            <h5 class="main-location__title">А6 Satellite Святошинська</h5>
            <div class="contacts__map-wrap contacts__map-second">
                <div class="contacts__map-info">
                    <a href="#" class="contacts__map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/general/map1.png" alt="map">
                    </a>
                    <a href="#" class="contacts__link contacts__link-second main__contacts-link">
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

<?php get_footer(); ?>