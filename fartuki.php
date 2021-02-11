<?php /*
 Template Name: Fartuki
 Template Post Type: page
 */ ?>

<?php
get_header(); ?>

      <main class="main" style="padding-top: 70px;">
         <section class="review mobile" style="background-image:url(/wp-content/uploads/2021/01/IMG_7902.jpg);">
            <div class="container">
               <div class="review__inner">
                  <h1 class="review__title">ФАРТУКИ</h1>
               </div>
            </div>
            <a href="#items1"><div class="arrow-8"></div></a>
            
         </section>
         <section class="items1" id="items1">
            <div class="container">
               <!--<div class="items1__inner">-->
               <?php 
                    echo do_shortcode('[product_category orderby="menu_order" order="asc" category="cat_fartuki"]');
                ?>
               <!--</div>-->
            </div>
         </section>
		  <section class="item_simple item_basic">
            <div class="container">
               <div class="item_simple_col item_basic_col">
               <?php 
                  echo do_shortcode('[product sku="basic"]');
               ?>
               </div>
            </div>
         </section>

         <section class="fartuk">
         <div class="fartuk__inner"> 
         <div class="fartuk__content">
                <div class="fartuk__text">
                    ZAPARA - осторожно вызывает привыкание
                </div>
            </div> 
        </div>
         </section>

         <section class="items3">
            <div class="container">
            <?php 
               echo do_shortcode('[product_category orderby="menu_order" order="asc" category="cat_fartuki_2"]');
            ?>
            </div>
         </section>

         <section class="item_simple">
            <div class="container">
               <div class="item_simple_col">
               <?php 
                  echo do_shortcode('[product sku="simple"]');
               ?>
               </div>
            </div>
         </section>
         <section class="items1">
            <div class="container">
               <!--<div class="items1__inner">-->
               <?php 
                    echo do_shortcode('[product_category orderby="menu_order" order="asc" category="cat_fartuki_3"]');
                ?>
               <!--</div>-->
            </div>
         </section>
         <section class="dev_section">
            <div class="container devider_cont">
               <svg class="devider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
               <div class="dev_text">Что делает нашу униформу особенной?<br>Дизайн? Цвет? Качество?</div>
               <svg class="devider_rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
            </div>
         </section>
         <section class="far_images">
            <div class="container">
               <img src="../wp-content/uploads/2021/01/photo-8.jpg">
               <img src="../wp-content/uploads/2021/01/photo-10.jpg">
               <img src="../wp-content/uploads/2021/01/photo-15.jpg">
            </div>
         </section>
         <section class="dev_section">
            <div class="container devider_cont">
               <svg class="devider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
               <div class="dev_text">Это все лишь технические составляющие.<br>
По-настоящему особенной ее делаете вы, когда носите на работу и<br> совершаете ежедневные открытия.</div>
               <svg class="devider_rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12"><path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"></path></svg>
            </div>
         </section>
         <section class="items1">
            <div class="container">
               <!--<div class="items1__inner">-->
               <?php 
                    echo do_shortcode('[product_category orderby="menu_order" order="asc" category="cat_fartuki_4"]');
                ?>
               <!--</div>-->
            </div>
         </section>

         <div class="contact_text" id="5">Контакты</div>
         <section class="map">
            <div class="map__info">
                <div class="map__info-wrapper">
                    <h2 class="map__info-title" data-aos="fade-up"> Приезжайте </h2>
                    <div class="map__info-content" data-aos="fade-up">
                        <address class="map__info-content-text"> Москва, м. Маяковская, ул. Юлиуса Фучика, 11/13 Вход со двора, 2-й подъезд слева, -1 этаж 10:00 - 19:00 в будни </address>
                        <a class="map__info-content-text" href="tel:+84951800425">8 (495) 180-04-25</a>
                        <p class="map__info-content-text"> Пишите нам в <a class="whatsapp-link" href="https://wa.me/79252254782?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C%20%D1%83%D0%BD%D0%B8%D1%84%D0%BE%D1%80%D0%BC%D1%83.">WhatsApp</a> <br> Или в Инстаграм <a class="instagram-link" href="https://www.instagram.com/zapara.shop"><svg class="t-sociallinks__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M16.396 3.312H8.604c-2.921 0-5.292 2.371-5.292 5.273v7.846c0 2.886 2.371 5.256 5.292 5.256h7.791c2.922 0 5.292-2.37 5.292-5.274V8.586c.001-2.903-2.37-5.274-5.291-5.274zM7.722 12.5a4.778 4.778 0 119.554 0 4.778 4.778 0 01-9.554 0zm10.034-4.318c-.615 0-1.104-.487-1.104-1.102s.488-1.103 1.104-1.103c.614 0 1.102.488 1.102 1.103s-.488 1.102-1.102 1.102z"/><path d="M12.5 9.376A3.12 3.12 0 009.376 12.5a3.12 3.12 0 003.124 3.124 3.12 3.12 0 003.124-3.124A3.133 3.133 0 0012.5 9.376z"/></svg></a></p>
                    </div>
                </div>
            </div>
            <div id="map1"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc34e1572e09373cd5f3ad3c43d57cca7d49befa284ee3f6f04a94cba6bd383b&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script></div>
         </section>
      </main>

      <?php
get_footer(); ?>