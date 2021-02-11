<?php

$term = get_queried_object();
?>

<section class="map" id="5">
    <div class="map__info">
        <div class="map__info-wrapper"><h2 class="map__info-title" data-aos="fade-up"> <?php the_field('map_go_to-store', $term); ?> </h2>
            <div class="map__info-content" data-aos="fade-up">
                <address class="map__info-content-text"> <?php the_field('map_adres', $term); ?>
                </address>
                <a class="map__info-content-text" href="tel:+<?php the_field('map_number_link', $term); ?>"><?php the_field('map_number', $term); ?></a>
                <p class="map__info-content-text"> <?php the_field('map_send_me', $term); ?> </p></div>
        </div>
    </div>
    <div id="map"></div>
</section>
</main>
<footer class="footer" id="6">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__social" data-aos="fade-up">
                <div class="footer__social-logo"><?php bloginfo('name', $term); ?></div>
                <div class="footer__social-links">
                    <a href="<?php the_field('footer_facebook_link', $term); ?>" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon facebook">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a> <a href="<?php the_field('footer_vkontakte_link', $term); ?>" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon vkontakte">
                            <use xlink:href="#vkontakte"></use>
                        </svg>
                    </a> <a href="<?php the_field('footer_instagram_link', $term); ?>" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon instagram">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a></div>
            </div>
            <nav class="footer__navigation" data-aos="fade-up">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'bot',
                    'menu_class'      => 'footer__navigation-wrapper',
                    'menu_id'         => ''
                )) ?>
                 <ul class="footer__navigation-wrapper">
                     <li class="footer__navigation-wrapper-link"><a href="#1">Фартуки</a></li>
                     <li class="footer__navigation-wrapper-link"><a href="#2">Кители</a></li>
                     <li class="footer__navigation-wrapper-link"><a href="#3">Аксессуары</a></li>
                     <li class="footer__navigation-wrapper-link"><a href="#4">Портфолио</a></li>
                     <li class="footer__navigation-wrapper-link"><a href="#5">Контакты</a></li>
                     <li class="footer__navigation-wrapper-link"><a href="#6">Информация</a></li>
                  </ul>
            </nav>
            <div class="footer__info"><p class="footer__info-copy"> <?php the_field('footer_all_rules_securety', $term); ?> </p>
                <div class="footer__info-company">
                    <ul class="company__wrapper">
                        <li class="company__wrapper-info"> <?php the_field('footer_inn', $term); ?></li>
                        <li class="company__wrapper-info"> <?php the_field('footer_orgn', $term); ?></li>
                        <li class="company__wrapper-info"><?php the_privacy_policy_link(''); ?></li>
                    </ul>
                </div>
            </div>
            <div class="footer__info">
                  <p class="footer__info-copy"> © Все права защищены </p>
                  <div class="footer__info-company">
                     <ul class="company__wrapper">
                        <li class="company__wrapper-info"> ИНН 352830954960 </li>
                        <li class="company__wrapper-info"> ОГРН 315352800003521 </li>
                        <li class="company__wrapper-info"> <a href="#" class="company__wrapper-info-link"> Политика конфиденциальности </a> </li>
                     </ul>
                  </div>
               </div>
        </div>
    </div>
</footer>
<svg xmlns:xlink="http://www.w3.org/1999/xlink" display="none">
    <symbol id="facebook" viewBox="0 0 11 17">
        <g>
            <path d="M9.74916 0.00353713L7.54467 0C5.06799 0 3.46745 1.64211 3.46745 4.18372V6.1127H1.25093C1.0594 6.1127 0.904297 6.26798 0.904297 6.45951V9.25438C0.904297 9.44592 1.05958 9.60102 1.25093 9.60102H3.46745V16.6534C3.46745 16.8449 3.62256 17 3.81409 17H6.70602C6.89755 17 7.05266 16.8447 7.05266 16.6534V9.60102H9.64429C9.83582 9.60102 9.99092 9.44592 9.99092 9.25438L9.99198 6.45951C9.99198 6.36755 9.95538 6.27948 9.89047 6.21439C9.82556 6.14931 9.73714 6.1127 9.64517 6.1127H7.05266V4.47748C7.05266 3.69153 7.23995 3.29254 8.26376 3.29254L9.74881 3.29201C9.94017 3.29201 10.0953 3.13673 10.0953 2.94537V0.350176C10.0953 0.158994 9.94034 0.00389085 9.74916 0.00353713Z"></path>
        </g>
    </symbol>
    <symbol id="vkontakte" viewBox="0 0 16 9">
        <g>
            <path d="M13.2771 5.16086C13.0185 4.84586 13.0925 4.70571 13.2771 4.42414C13.2805 4.42093 15.4159 1.57564 15.6359 0.610714L15.6372 0.610071C15.7465 0.258428 15.6372 0 15.1085 0H13.3591C12.9138 0 12.7084 0.221786 12.5984 0.469929C12.5984 0.469929 11.7077 2.52579 10.4477 3.85843C10.041 4.2435 9.85301 4.36693 9.631 4.36693C9.52166 4.36693 9.35166 4.2435 9.35166 3.89186V0.610071C9.35166 0.188357 9.22699 0 8.85831 0H6.10754C5.8282 0 5.6622 0.196714 5.6622 0.379929C5.6622 0.779786 6.29222 0.871714 6.35755 1.99671V4.43764C6.35755 4.9725 6.25688 5.07086 6.03354 5.07086C5.43886 5.07086 3.99547 3.00664 3.14011 0.644143C2.96744 0.185786 2.79876 0.000642811 2.35008 0.000642811H0.600021C0.10067 0.000642811 0 0.222428 0 0.470571C0 0.909 0.594687 3.08893 2.76543 5.96893C4.21215 7.93479 6.24955 9 8.10295 9C9.21699 9 9.35299 8.76343 9.35299 8.3565C9.35299 6.47807 9.25232 6.30064 9.81034 6.30064C10.069 6.30064 10.5144 6.42407 11.5544 7.37229C12.7431 8.49664 12.9384 9 13.6038 9H15.3532C15.8519 9 16.1046 8.76343 15.9592 8.29671C15.6265 7.31507 13.3785 5.29586 13.2771 5.16086Z"></path>
        </g>
    </symbol>
    <symbol id="instagram" viewBox="0 0 14 14">
        <g>
            <path d="M10.2103 0H3.78967C1.70001 0 0 1.70001 0 3.78967V10.2104C0 12.3 1.70001 14 3.78967 14H10.2104C12.3 14 14 12.3 14 10.2104V3.78967C14 1.70001 12.3 0 10.2103 0V0ZM6.99999 10.828C4.88918 10.828 3.17198 9.11079 3.17198 6.99999C3.17198 4.88918 4.88918 3.17198 6.99999 3.17198C9.11079 3.17198 10.828 4.88918 10.828 6.99999C10.828 9.11079 9.11079 10.828 6.99999 10.828ZM10.9195 4.07475C10.2958 4.07475 9.7884 3.56739 9.7884 2.94361C9.7884 2.31983 10.2958 1.81237 10.9195 1.81237C11.5433 1.81237 12.0508 2.31983 12.0508 2.94361C12.0508 3.56739 11.5433 4.07475 10.9195 4.07475Z"></path>
            <path d="M7 4.375C5.55264 4.375 4.375 5.55254 4.375 7C4.375 8.44736 5.55264 9.625 7 9.625C8.44746 9.625 9.625 8.44736 9.625 7C9.625 5.55254 8.44746 4.375 7 4.375Z"></path>
            <path d="M10.9198 2.63379C10.7487 2.63379 10.6094 2.77307 10.6094 2.94418C10.6094 3.11529 10.7487 3.25458 10.9198 3.25458C11.091 3.25458 11.2303 3.1154 11.2303 2.94418C11.2303 2.77296 11.091 2.63379 10.9198 2.63379Z"></path>
        </g>
    </symbol>
    <symbol id="arrow" viewBox="0 0 60 60">
        <g>
            <path d="M14.7381 2.24513L42.5117 30.0161L14.7381 57.7872C14.2376 58.3052 14.252 59.131 14.7701 59.6315C15.2756 60.1196 16.0769 60.1196 16.5823 59.6315L45.2767 30.937C45.7859 30.4277 45.7859 29.6021 45.2767 29.0927L16.5823 0.398254C16.0818 -0.119835 15.2562 -0.13414 14.738 0.366219C14.2199 0.866699 14.2056 1.69232 14.7059 2.21053C14.7165 2.22141 14.7271 2.23205 14.738 2.24257L14.7381 2.24513Z"></path>
            <path d="M43.2187 30.0161L42.8651 30.3696L15.0975 58.1398C14.7992 58.4515 14.8001 58.9436 15.1002 59.2544L43.2187 30.0161ZM43.2187 30.0161L42.8651 29.6625M43.2187 30.0161L42.8651 29.6625M42.8651 29.6625L15.0915 1.89151L15.0916 1.89146M42.8651 29.6625L15.0916 1.89146M15.0916 1.89146L15.0854 1.88547M15.0916 1.89146L15.0854 1.88547M15.0854 1.88547C14.7659 1.57687 14.757 1.06779 15.0656 0.748161C15.3742 0.428684 15.8833 0.419819 16.2029 0.728432C16.2097 0.734921 16.2162 0.741493 16.2228 0.748268L16.2227 0.748318M15.0854 1.88547L16.2227 0.748318M16.2227 0.748318L16.2287 0.754326M16.2227 0.748318L16.2287 0.754326M16.2287 0.754326L44.9232 29.4487L44.9237 29.4492M16.2287 0.754326L44.9237 29.4492M44.9237 29.4492C45.0745 29.5996 45.1596 29.8037 45.1602 30.0169C45.1606 30.2304 45.0761 30.4352 44.9254 30.5862M44.9237 29.4492L44.9254 30.5862M44.9254 30.5862L16.2347 59.2769C15.9152 59.5827 15.408 59.5731 15.1002 59.2545L44.9254 30.5862Z"></path>
        </g>
    </symbol>
    <symbol id="star" viewBox="0 0 23 21">
        <g>
            <path d="M11.5129 0L14.0977 7.95523H22.4623L15.6952 12.8718L18.28 20.8271L11.5129 15.9105L4.74579 20.8271L7.3306 12.8718L0.563482 7.95523H8.9281L11.5129 0Z"></path>
        </g>
    </symbol>
    <symbol id="true" viewBox="0 0 24 24">
        <g>
            <circle fill="#25B309" cx="12" cy="12" r="12"></circle>
            <polygon fill="#FFFFFF"
                     points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
        </g>
    </symbol>
    <symbol id="false" viewBox="0 0 24 24">
        <g>
            <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
            <polygon fill="#FFFFFF"
                     points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
        </g>
    </symbol>
</svg>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b96db4ac-8c65-4022-a1ae-00f2e220b66a"
        type="text/javascript"></script>
<?php wp_footer(); ?>
<script>var e=document.querySelectorAll(".popup__slide"),t=document.querySelectorAll(".popup__slide-prev"),c=document.querySelector(".popup__slider-left"),o=document.querySelector(".popup__slider-right"),i=0;document.querySelectorAll(".open-modal").forEach(function(e){e.addEventListener("click",function(){document.querySelector("body").style.overflow="hidden",document.querySelector(".popup").classList.add("active")})}),document.querySelector(".popup-back").addEventListener("click",function(){document.querySelector("body").style.overflow="auto",document.querySelector(".popup").classList.remove("active")}),o.addEventListener("click",function(){i<e.length-1&&i++,e.forEach(function(e){e.classList.remove("active"),e.getAttribute("data-in")==i&&e.classList.add("active")})}),c.addEventListener("click",function(){i>0&&i--,e.forEach(function(e){e.classList.remove("active"),e.getAttribute("data-in")==i&&e.classList.add("active")})}),t.forEach(function(c){c.addEventListener("click",function(){t.forEach(function(e){e.classList.remove("active")}),i=c.getAttribute("data-in"),c.getAttribute("data-in")==i&&c.classList.add("active"),e.forEach(function(e){e.classList.remove("active"),e.getAttribute("data-in")==i&&e.classList.add("active")})})});</script>
</body>
</html>