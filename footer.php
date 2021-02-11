<?php
$term = get_queried_object();
?>

<footer class="footer" id="6">
         <div class="container">
            <div class="footer__wrapper">
               <div class="footer__social" data-aos="fade-up">
                  <div class="footer__social-logo" onclick="location.href='/';">ZAPARA</div>
                  <div class="footer__social-links">
                     <a href="https://www.facebook.com/zapara.shop" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon facebook">
                           <use xlink:href="#facebook"></use>
                        </svg>
                     </a>
                     <a href="https://vk.com/zapara.shop" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon vkontakte">
                           <use xlink:href="#vkontakte"></use>
                        </svg>
                     </a>
                     <a href="https://www.instagram.com/zapara.shop/" class="link-icon">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon instagram">
                           <use xlink:href="#instagram"></use>
                        </svg>
                     </a>
                  </div>
               </div>
               <nav class="footer__navigation" data-aos="fade-up">
                  <ul class="footer__navigation-wrapper">
                     <?php wp_nav_menu(array(
                         'container' => '',
                        'theme_location'  => 'bot',
                        'menu_class'      => 'footer__navigation-wrapper',
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s',
                        'walker' => new Menu_Wal_Kwork(),
                )) ?>
                  </ul>
               </nav>
               <div class="footer__info"><p class="footer__info-copy"> <?php the_field('footer_all_rules_securety', $term); ?> </p>
                <div class="footer__info-company">
                    <ul class="company__wrapper">
                        <li class="company__wrapper-info"> <?php the_field('field_5ff6e91ad3ea0', $term); ?></li>
                        <li class="company__wrapper-info"> <?php the_field('field_5ff6e954d3ea1', $term); ?></li>
                        <li class="company__wrapper-info"><?php the_privacy_policy_link(''); ?></li>
                    </ul>
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
               <polygon fill="#FFFFFF" points="10.776 16.32 5.184 10.728 5.688 10.2 10.776 15.288 18.792 7.272 19.296 7.8"></polygon>
            </g>
         </symbol>
         <symbol id="false" viewBox="0 0 24 24">
            <g>
               <circle fill="#F24611" cx="12" cy="12" r="12"></circle>
               <polygon fill="#FFFFFF" points="17.28 7.32 16.8 6.84 12.072 11.592 7.32 6.84 6.84 7.32 11.592 12.072 6.84 16.8 7.32 17.28 12.072 12.528 16.8 17.28 17.28 16.8 12.528 12.072"></polygon>
            </g>
         </symbol>
      </svg>
      <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b96db4ac-8c65-4022-a1ae-00f2e220b66a" type="text/javascript"></script> 
      <script src="../wp-content/themes/zapara/assets/dist/src.5dd915fc.js"></script> 
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> 
      <?php wp_footer(); ?>
   
      <div class="basket">
            <div class="basket__inner">
                <div class="basket__close">
                    <svg class="t706__cartwin-close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                            <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        </g>
                    </svg>
                </div>
                <div class="basket__modal">
						<?php echo do_shortcode( '[contact-form-7 id="1079" title="Контактная форма 1"]' ); ?>
                    <!-- <div class="basket__title">Подтверждение заказа:</div>
                    <div class="basket__modal-items">    
                         
                    </div>
                    <div class="basket__modal-all-price">Сумма: <span></span></div>
                    <div class="basket__modal-form">
                        <div class="basket__modal-form-title">Заполните форму для связи с вами.</div>
                        <label class="basket__modal-form-label"> <span class="basket__modal-label">Ваше имя</span> <input class="basket__modal-input" name="name" type="text" required /> </label>
                        <label class="basket__modal-form-label"> <span class="basket__modal-label">Ваш Email</span> <input class="basket__modal-input" name="mail" type="text" required /> </label>
                        <label class="basket__modal-form-label"> <span class="basket__modal-label">Ваш телефон</span> <input class="basket__modal-input" name="phone" type="text" required /> </label>
                        <div class="basket__modal-dostavka">
                            <div class="basket__modal-dostavka-title">Доставка</div>
                            <label class="basket__modal-dostavka-label">
                                <input type="radio" class="basket__modal-dostavka-radio" name="dostavka" value="Самовывоз" required /> <span class="castom-radio"></span> <span class="basket__modal-dostavka-text">Самовывоз (бесплатно) </span>
                            </label>
                            <label class="basket__modal-dostavka-label">
                                <input type="radio" class="basket__modal-dostavka-radio" name="dostavka" value="До адреса" required /> <span class="castom-radio"></span> <span class="basket__modal-dostavka-text">До адреса (рассчитывается отдельно)</span>
                            </label>
                        </div>
                        <textarea class="basket__modal-textarea" name="comment"></textarea>
                        <div class="basket__modal-btn">Оформить заказ</div>
                    </div>
                    <div class="form_meta" style="display:none;"><textarea name="tovars"></textarea></div> -->
                </div>
            </div>
        </div>

        <div class="basket__outcart">
            <div class="basket__outcart__inner">
                <div class="basket__outcart__close">
                    <svg class="t706__cartwin-close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                            <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        </g>
                    </svg>
                </div>
                <div class="basket__outcart__modal">
                    <div class="basket__outcart__title">Упс!..</div>
                    <div class="basket__outcart__modal-items">    
                         В вашей корзине пусто :(<br> Скорее <a href="fartuki/"><b>переходите в каталог</b></a> и выбирайте свой стиль!
                    </div>
                </div>
            </div>
        </div>

        <div class="basket__search">
            <div class="basket__search__inner">
                <div class="basket__search__close">
                    <svg class="t706__cartwin-close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                            <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                            <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                        </g>
                    </svg>
                </div>
                <div class="basket__search__modal">
                    <div class="basket__search__title">Поиск товара</div>
                    <div class="basket__search__modal-items">    
                        <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="data2"></div>
        <div class="data"></div>
<script >
    $(function() {
		
		$('.wpcf7-submit').on('click', function (e) {
			
			var title = $(".basket__modal-title").html();
			var size = $(".basket__modal-text0 p ").html();
			var cvet = $(".basket__modal-text1 p").html();
			var price = $(".basket__modal-price ").html();
			$('.price').val(price);
			$('textarea.info').append(title  + '\r\n',  size  + '\r\n', cvet  + '\r\n', price );
		});
		
        function stripslashes(str) {
            str = str.replace(/\\'/g, '\'');
            str = str.replace(/\\"/g, '"');
            str = str.replace(/\\0/g, '\0');
            str = str.replace(/\\\\/g, '\\');
            return str;
        }

        function update_cart() {
            $.ajax({
                url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=update_cart',
                method: 'post',
                dataType: 'html',
                cache: false,
                data: {
                    car: $('.basket__modal-items').html()
                },
                beforeSend: function() {},
                success: function(data) {},
                error: function() {
                    alert('Ошибка запроса');
                }
            });
        };

        function open_cart() {
            $.ajax({
                url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=open_cart',
                method: 'post',
                dataType: 'html',
                cache: false,
                data: {
                    car: $('.basket__modal-items').html()
                },
                beforeSend: function() {},
                success: function(data) {
                    $('.basket__modal-items').html(stripslashes(data));
                    $('.header__buttons-cart-numb').html($('.basket__modal-item').length);
                    var summ = 0;
                    $(".basket__modal-price").each(function() {
                        summ += parseInt($(this).text());
                    });
                    $('.basket__modal-all-price span').html(summ + ' р.');
                },
                error: function() {
                    alert('Ошибка запроса');
                }
            });
        };
        open_cart();
        $(".items1__item-img").hover(function() {
            if ($(this).attr('data-image-2') != "") {
                $(this).attr('style', 'background-image:url(' + $(this).attr('data-image-2') + ');');
            } else {
                return false;
            }
        }, function() {
            if ($(this).attr('data-image-2') != "") {
                $(this).attr('style', 'background-image:url(' + $(this).attr('data-image') + ');');
            } else {
                return false;
            }
        });
        $(".open-modal").click(function() {
            $("body").css({
                'overflow': 'hidden'
            });
            $('[data-id=' + $(this).attr('id') + '].popup').addClass("active");
        });
        $('.open-modal').on('click', '.aws_result_link', function() {
            var id = $(this).attr('data-b_id');
            add_col_pos(id, 1);
            update_cart();
            return false;
        });
        $(".popup-back").click(function() {
            $("body").css({
                'overflow': "auto"
            });
            $('.popup.active').removeClass("active");
        });
        $('.popup__slider-right').click(function() {
            var lemma = $('.popup.active').find('.popup__slide').length;
            var lemma_now = $(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
            if (lemma_now < (lemma - 2)) {
                $('.popup.active').find('[data-in="' + parseInt(lemma_now) + '"]').removeClass('active');
                $('.popup.active').find('[data-in="' + (parseInt(lemma_now) + parseInt(1)) + '"]').addClass('active');
                lemma_now++;
            }
            return false;
        });
        $('.popup__slider-left').click(function() {
            var lemma = $('.popup.active').find('.popup__slide').length;
            var lemma_now = $(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
            if (lemma_now > 0) {
                $('.popup.active').find('[data-in="' + parseInt(lemma_now) + '"]').removeClass('active');
                $('.popup.active').find('[data-in="' + (parseInt(lemma_now) - parseInt(1)) + '"]').addClass('active');
                lemma_now - 1;
            }
            return false;
        });
        $('.popup__slide-prev').click(function() {
            $('.popup.active').find('[data-in]').removeClass('active');
            $('.popup.active').find('[data-in="' + parseInt($(this).attr('data-in')) + '"]').addClass('active');
        });

        function add_to_cart() {
            $.ajax({
                url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=addcart',
                method: 'post',
                dataType: 'html',
                cache: false,
                data: $(".popup.active form").serialize(),
                success: function(data) {
                    $('.basket__modal-items').append(stripslashes(data));
                },
                error: function() {
                    alert('Ошибка запроса');
                }
            });
        }

        function calc_summ_cart(star_summ) {
            var summ = star_summ;
            $(".basket__inner .basket__modal-price").each(function() {
                summ += Number.parseInt($(this).text());
            });
            $('.basket__modal-all-price span').html(summ + ' р.');
        }
        $('.basket__modal-colvo-plus').on('click', 'p', function() {
            alert($(this).parent('.basket__modal-colvo').find('.basket__modal-colvo-num').val());
        });
        $(".basket__close").click(function() {
            $("body").css({
                'overflow': 'auto'
            });
            update_cart();
            $(".basket").hide(300);
        });
        $('.header__buttons-search').click(function() {
            $(".basket__search").show(300);
            $("body").css({
                'overflow': 'hidden'
            });
        });
        $(".basket__search__close").click(function() {
            $("body").css({
                'overflow': 'auto'
            });
            $(".basket__search").hide(300);
        });
        $(".basket__outcart__close").click(function() {
            $("body").css({
                'overflow': 'auto'
            });
            $(".basket__outcart").hide(300);
        });
        $('.header__buttons-cart').click(function() {
            if ($(".basket .basket__modal-item").length != 0) {
                $(".basket").show(300);
                $("body").css({
                    'overflow': 'hidden'
                });
            } else {
                $(".basket__outcart").show(300);
                $("body").css({
                    'overflow': 'hidden'
                });
            }
        });
        $(".popup__btn").click(function() {
            var title = $('.popup.active').find('.items1__item-title').html();
            var img = $('.popup.active').find('.popup__slide.active img').attr('src');
            var price = $('.popup.active').find('.popup__price').html();
            var id_c = $('.popup.active').attr('data-id');
            $(".popup.active").find('.cart_attrs').append('<input type="hidden" name="id" value="' + id_c + '"><input type="hidden" name="price" value="' + price + '"><input type="hidden" name="title" value="' + title + '"><input type="hidden" name="img" value="' + img + '">');
            $(".basket").show(300);
            $("body").css({
                'overflow': 'hidden'
            });
            if ($(".basket__modal").find('[data-cart="' + id_c + '"]').length) {} else {
                add_to_cart();
            }
            $('.popup.active').toggleClass('active');
            calc_summ_cart(parseInt(price));
            update_cart();
            return false;
        });
        $('select.popup__select').change(function() {
            if ($('.popup.active .cart_attrs [data-c="' + $(this).attr('name') + '"]').length) {
                $('.popup.active .cart_attrs [data-c="' + $(this).attr('name') + '"]').val($(this).attr('name') + '-' + $(this).val());
            } else {
                $('.popup.active .cart_attrs').append('<input type="checkbox" name="attrs[]" data-c="' + $(this).attr('name') + '" value="' + $(this).attr('name') + '|' + $(this).val() + '">');
            }
        });
       /* $('.basket__modal-btn').click(function() {
            $('.form_meta textarea').val($('.basket__modal-items').html());
            $.ajax({
                url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=accept',
                  method: 'post',
                  dataType: 'html',
                  cache: false,
                  data: $(".basket__inner form").html(),
                success: function(data) {
                    document.location.href = '<?echo get_home_url(null, 'thanks / ');?>';
                },
                error: function() {
                    alert('Ошибка запроса');
                }
            });
        });*/

        function add_col_pos(id, num) {
            var ele = $('.basket').find('[data-cart="' + id + '"]');
            var now_col = Number.parseInt(ele.find('.basket__modal-colvo-num').val());
            var inprice = Number.parseInt(ele.attr('data-price'));
            var innowprice = Number.parseInt(ele.find('.basket__modal-price').text());
            var price = Number.parseInt($('.basket__modal-all-price').find('span').html());
            ele.find('.basket__modal-colvo-num').val(parseInt(now_col + num));
            ele.find('.basket__modal-price').html(parseInt(innowprice + inprice * num) + ' р.');
            calc_summ_cart(0);
            update_cart();
        }

        function del_col_pos(id, num) {
            var ele = $('.basket').find('[data-cart="' + id + '"]');
            var now_col = Number.parseInt(ele.find('.basket__modal-colvo-num').val());
            var inprice = Number.parseInt(ele.attr('data-price'));
            var innowprice = Number.parseInt(ele.find('.basket__modal-price').text());
            var price = Number.parseInt($('.basket__modal-all-price').find('span').html());
            if (now_col <= 1) {
                return false;
            } else {
                ele.find('.basket__modal-colvo-num').val(parseInt(now_col - num));
                ele.find('.basket__modal-price').html(parseInt(innowprice - inprice * num) + ' р.');
            }
            calc_summ_cart(0);
            update_cart();
        }

        function del_position(id) {
            $('.basket [data-cart="' + id + '"]').remove();
            calc_summ_cart(0);
            update_cart();
        }
        $('.basket').on('click', '.basket__modal-colvo-plus', function() {
            var id = $(this).attr('data-b_id');
            add_col_pos(id, 1);
            update_cart();
            return false;
        });
        $('.basket').on('click', '.basket__modal-colvo-minus', function() {
            var id = $(this).attr('data-b_id');
            del_col_pos(id, 1);
            update_cart();
            return false;
        });
        $('.basket').on('click', '.basket__modal-close', function() {
            var id = $(this).attr('data-b_id');
            del_position(id);
            update_cart();
            if ($('.basket__modal-item').length == 0) {
                $("body").css({
                    'overflow': 'auto'
                });
                $(".basket").hide(300);
            }
            return false;
        });
        $('.accordion__item').click(function() {
            $(this).toggleClass('active');
        });
        $(window).scroll(function() {
            if ($(window).scrollTop() > 5) {
                $('.header').addClass('ground');
            } else {
                $('.header').removeClass('ground');
            }
        });
        if ($(window).width() <= 1024) {
            $('.header').addClass('mobile');
        } else {}
        $('.gallery__open_dop').click(function() {
            $(this).remove();
            $('.gallery__dop').addClass('active');
        });
    }); 
	</script>


        
    </body>
</html>