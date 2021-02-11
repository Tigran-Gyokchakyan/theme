<?php /*
 Template Name: Infopage
 Template Post Type: page
 */ ?>

<?php
get_header(); ?>

    <main class="main info" style="padding-top: 70px;">
        <section class="intro"><h1 class="intro__title">ИНФОРМАЦИЯ</h1> <a href="#pay" class="intro__arrow">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="intro__arrow-icon">
                    <use xlink:href="#arrow"></use>
                </svg>
            </a></section>
        <section class="pay" id="pay">
            <div class="container" style="font-size: 28px; line-height: 42px;font-weight:300;">
				
               <div class="pay__wrapper"><h2 class="pay__wrapper-title"> ОПЛАТА </h2>
                    <div style="width:100%;position:relative;overflow:auto;">
                        <table class="pay__wrapper-table">
                            <thead>
                            <tr>
                                <th>Вариант платежа</th>
                                <th>Физ. лица</th>
                                <th>Юр. лица</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Наличными в шоуруме</td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td>Картой</td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td>Онлайн платеж</td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td>Расчетный счет</td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#false"></use>
                                    </svg>
                                </td>
                                <td>
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                        <use xlink:href="#true"></use>
                                    </svg>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
      <section class="delivery">
            <div class="container">
                <div class="delivery__wrapper"><h2 class="delivery__wrapper-title"> Доставка </h2>
                    <h3 class="delivery__wrapper-text"> Чтобы получить более точную информацию, спрашивайте у наших
                        менеджеров </h3>
                    <div class="delivery__wrapper-info">
                        <div class="delivery__wrapper-info-item">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart orange">
                                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <path class="circle" stroke-dasharray="25, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <text x="18" y="20.35" class="percentage">от 300р</text>
                                </svg>
                            </div>
                            <h4>МОСКВА</h4>
                            <p>от 1 часа</p></div>
                        <div class="delivery__wrapper-info-item">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart orange">
                                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <path class="circle" stroke-dasharray="65, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <text x="18" y="20.35" class="percentage">от 350р</text>
                                </svg>
                            </div>
                            <h4>РОССИЯ</h4>
                            <p>от 2 дней</p></div>
                        <div class="delivery__wrapper-info-item">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart orange">
                                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    <text x="18" y="20.35" class="percentage">от 800р</text>
                                </svg>
                            </div>
                            <h4>ПО МИРУ</h4>
                            <p>от 5 дней</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="question"><h2 class="question-title"> Часто задаваемые вопросы </h2>
            <div class="question__wrapper">
                <div class="accordion">
                    <ul class="accordion__items">
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Как сделать заказ?</h3> <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content"><p> Добавьте понравившиеся изделия в корзину и после оформите заказ.<br>Далее наши менеджеры свяжутся с вами для уточнения деталей и подтверждения заказа.<br>Также можно сделать заказ по телефону +7 (495) 180-04-25 или написать на почту shop.zapara@gmail.com. </p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Вы работаете с юр. лицами?</h3> <span
                                        class="accordion__icon"></span></div>
                            <div class="accordion__content"><p>Да, мы работаем как с физ. лицами, так и с юр. лицами.</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Какие сроки изготовления?</h3> <span
                                        class="accordion__icon"></span></div>
                            <div class="accordion__content"><p>Обычно все изделия есть на складе, но если разберут, нужно будет подождать 7 рабочих дней.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Можно сделать вышивку? Сколько стоит? Какие сроки?</h3> <span
                                        class="accordion__icon"></span></div>
                            <div class="accordion__content"><p>Да, в среднем выходит 350 руб, 7 рабочих дней.<br>Стоимость вышивки индивидуальна, зависит от размера лого, количества цветов в нем, общего количества изделий.<br>Вы можете скинуть нам на почту лого или ваши инициалы.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Можно оплатить картой?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p> Да, мы принимаем оплату картой (как физ. лицо) и через р/с (как юр. лицо).</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Можете сшить по моему дизайну?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>От 5 шт - можно взять наши модели, но скорректировать детали: изменить карманы, сделать фартуки длиннее или короче.<br>От 50 шт - можем рассмотреть пошив в индивидуальном дизайне по вашему запросу.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Что за ткань?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Для фартуков и кителей мы используем специальную проф. ткань, качественную и выносливую, предназначенную для частых стирок, которая за счет своего состава и обработки не садится, не теряет цвет, форму, не покрывается катышками долгое время, быстрее сохнет, ее можно стирать и гладить на высоких температурах, что позволяет отстирывать загрязнения.<br>Причем плетение ткани сформировано так, что хлопковые волокна выведены на внутреннюю сторону, прилегающую к телу, а синтетические - снаружи.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Можно где-то посмотреть вживую?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Да, вы можете приехать к нам по адресу г. Москва, м. Маяковская, ул. Юлиуса Фучика, 11/13<br>Вход со двора, 2-й подъезд слева, -1 этаж<br>10:00 - 19:00 в будни</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Вы шьете по индивидуальным меркам?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p> Нет, мы не работаем в формате креативного ателье.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>У меня нестандартный рост, что делать?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p> Сообщите о ваших параметрах нашим менеджерам и они подберут вам подходящий размер.</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Вы доставляете в ...?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p> Да, доставка возможна в любые регионы, отправляем службой СДЭК (оптимальный вариант по стоимости и срокам).</p></div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>У вас есть срочная доставка?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Да, по Москве в пределах МКАД 500 р., в регионы рассчитывается индивидуально.</p></div>
                        </li> 
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Если не подошло, можно вернуть/обменять?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Да, если изделие было без вышивки и сохранено в товарном виде. По закону на возврат дается 14 дней, мы даем 30 дней.</p></div>
                        </li> 
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>У вас есть скидки?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Да, при разном объеме разная скидка, для вашего удобства в каждой карточке товара указан свой размер скидки.</p></div>
                        </li> 
                        <li class="accordion__item">
                            <div class="accordion__title"><h3>Вы можете приехать к нам в заведение?</h3> <span
                                        class="accordion__icon"> </span></div>
                            <div class="accordion__content"><p>Нет, такой опции у нас нет.</p></div>
                        </li> 
                    </ul>
                </div>
            </div>
        </section>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			$(".accordion__item").click(function(){
				$(this).toggleClass("activefaq");
			});
		</script>
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
<?php
get_footer(); ?>