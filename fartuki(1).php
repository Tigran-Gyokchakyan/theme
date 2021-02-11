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
		  
         <section style="display: none;" class="fartuki-slider-section">
            <div class="fartuki-slider__inner">
               <div class="fartuki-slider-wrap">
	<div class="swiper-container fartuki-slider-container">
		<div class="swiper-wrapper fartuki-slider">
			<?php for($image=1;$image<=20;$image++) { ?>
				<div class="swiper-slide fartuki-slider-item">
					<img src="/wp-content/themes/zapara/assets/images/fartuki_slider/image-<?= $image ?>.jpg" alt="">
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="swiper-pagination fartuki-slider-pagination">
		<div class="swiper-wrapper fartuki-slider-thumbs">
							   <?php for($image=1;$image<=20;$image++) { ?>
                                <div class="swiper-slide fartuki-slider-item">
                                    <img src="/wp-content/themes/zapara/assets/images/fartuki_slider/image-<?= $image ?>.jpg" alt="">
                                </div>
							<?php } ?>
		</div>
				   </div>
	<div class="fartuki-slider-swiper-button-prev swiper-button-prev">
		<svg style="display:block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<desc>Left</desc>
			<polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
		</svg>
	</div>
	<div class="fartuki-slider-swiper-button-next swiper-button-next">
		<svg style="display:block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<desc>Left</desc>
			<polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
		</svg>
	</div>
</div>
               <div class="popup__text">
                  <div class="popup__title">Basic</div>
                  <div class="popup__art">Арт: 002</div>
                  <div class="popup__price">2300 р</div>
                  <label for="razmer" class="popup__label"> Размер </label> 
                  <div class="popup__select-wrap">
                     <select name="pol" id="pol" class="popup__select">
                        <option value="XS" class="popup__option">XS</option>
                        <option value="S" class="popup__option">S</option>
                        <option value="M" class="popup__option">M</option>
                     </select>
                  </div>
                  <label for="color" class="popup__label"> Цвет </label> 
                  <div class="popup__select-wrap">
                     <select name="color" id="color" class="popup__select">
                        <option value="XS" class="popup__option">XS</option>
                        <option value="S" class="popup__option">S</option>
                        <option value="M" class="popup__option">M</option>
                     </select>
                  </div>
                  <button class="popup__btn">Купить</button> 
                  <div class="popup__decription"> Рубашка с длинными рукавами<br> Воротник <span style="color:#147872;">классический</span><br> Нагрудный карман слева<br> Застежка: кнопки<br><br> Состав: смесовый для частых стирок (хлопок 60%, полиэстер 40%) <br><br> Полустрогая модель <br><br> Преимущества ткани: <br> • Дышащая, удобная, приятная к телу ткань; <br> • Гипоаллергенна; <br> • Можно часто стирать <br><br>Соблюдайте рекомендации по уходу! <br><br>Цена:<br>1 - 9 шт: 2300 ₽<br>10 - 49 шт: 2100 ₽<br>50 - 99 шт: 1900 ₽<br> </div>
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
               <img src="/wp-content/themes/zapara/assets/dist/photo-8.webp">
               <img src="/wp-content/themes/zapara/assets/dist/photo-10.webp">
               <img src="/wp-content/themes/zapara/assets/dist/photo-15.webp">
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
                     <p class="map__info-content-text"> Пишите нам в WhatsApp <br> Или в Инстаграм </p>
                  </div>
               </div>
            </div>
            <div id="map1"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc34e1572e09373cd5f3ad3c43d57cca7d49befa284ee3f6f04a94cba6bd383b&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script></div>
         </section>
      </main>

      <?php
wp_enqueue_script('sweiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '', true );
get_footer(); ?>