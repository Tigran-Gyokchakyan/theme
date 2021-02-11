<?php /*
 Template Name: Thank!
 Template Post Type: page
 */ ?>

<?php
get_header(); ?>

      <main class="main" style="padding-top: 70px;">

         <section class="review" style="background-image:url(/wp-content/themes/zapara/assets/dist/thansk.jpg);height:100vh;background-size:cover;">
            <div class="container">
               <div class="review__inner">
                  <h1 class="review__title">Спасибо!<div style="font-size:18px;padding-top:20px;font-weight:100;">В ближайшее время мы свяжемся с вами.<br>Как только наш менеджер закончит танцевать от радости.</div></h1>
               </div>
            </div>
            <a href="#5"><div class="arrow-8"></div></a>
            
         </section>

         <div class="contact_text" id="5">Контакты</div>
         <section class="map">
            <div class="map__info">
               <div class="map__info-wrapper">
                  <h2 class="map__info-title" data-aos="fade-up"> Приезжайте </h2>
                  <div class="map__info-content" data-aos="fade-up">
                     <address class="map__info-content-text"> Москва, м. Маяковская, ул. Юлиуса Фучика, 11/13 Вход со двора, 2-й подъезд слева, -1 этаж 10:00 - 19:00 в будни </address>
                     <a class="map__info-content-text" href="tel:+84951800425">8 (495) 180-04-25</a> 
                     <p class="map__info-content-text"> Пишите нам в WhatsApp <br> Или в Инстаграм </p>
                  </div>
               </div>
            </div>
            <div id="map1"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc34e1572e09373cd5f3ad3c43d57cca7d49befa284ee3f6f04a94cba6bd383b&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script></div>
         </section>
      </main>

      <?php
get_footer(); ?>