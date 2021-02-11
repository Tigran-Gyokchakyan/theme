<?php /*
 Template Name: Home
 Template Post Type: page
 */ ?>

<?php
get_header(); ?>

    <main class="main">
    <section class="preview">
        <div class="preview__inner"><img src="<?php echo get_field('intro_animate_text'); ?>" id="cog" alt="" class="preview__bg">
            <div class="swiper-container preview__slider">
                <?php if( have_rows('intro_slider') ): ?>
                <div class="swiper-wrapper">
                	<?php while( have_rows('intro_slider') ): the_row();
                        $image = get_sub_field('preview__slider-item-img');
                        $toptext = get_sub_field('preview__slider-item-text-top');
                        $title = get_sub_field('preview__slider-item-text-middle');
                        $link = get_sub_field('preview__slider-item-link');
                        $linktext = get_sub_field('preview__slider-item-text-bottom');
                    ?>
                    <div class="swiper-slide preview__slider-item">
                        <div class="container">
                            <div class="preview__slider-item-inner">
                                <div class="preview__slider-item-text" data-aos="fade-up">
                                    <div class="preview__slider-item-text-top"> <?php echo $toptext; ?>
                                    </div>
                                    <div class="preview__slider-item-text-middle"> <?php echo $title; ?></div>
                                    <a href="<?php echo $link; ?>" class="preview__slider-item-text-bottom"> <?php echo $linktext; ?></a></div>
                                <img class="preview__slider-item-img" src="<?php echo $image; ?>" alt=""></div>
                        </div>
                    </div>
                    	<?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="apron" style="background-image:url(../wp-content/themes/zapara/assets/dist/bg2.bc954878.jpg);" id="1">
        <div class="container">
            <div class="apron__inner">
                <div class="apron__text-block" data-aos="fade-up">
                    <div class="apron__subtitle">Стильные, офигенные, разные.</div>
                    <h2 class="apron__title">Фартуки</h2> <a href="#" class="apron__button link-btn">перейти</a></div>
            </div>
        </div>
    </section>
    <section class="tunic" style="background-image:url(../wp-content/themes/zapara/assets/dist/bg3.26d5d37c.jpg);" id="2">
        <div class="container">
            <div class="tunic__inner" data-aos="fade-up"><h2 class="tunic__title">Кители</h2>
                <div class="tunic__text">Не такие как все</div>
                <a href="" class="tunic__button link-btn">перейти</a></div>
        </div>
    </section>
    <section class="pants" style="background-image:url(../wp-content/themes/zapara/assets/dist/bg3.26d5d37c.jpg);">
        <div class="container">
            <div class="pants__inner" data-aos="fade-up">
                <div class="pants__subtitle">Новая коллекция</div>
                <h2 class="pants__title">Брюки & Юбки</h2>
                <a href="" class="pants__button link-btn">перейти</a></div>
            </div>
        </div>
    </section>
    <section class="shirts" style="background-image:url(../wp-content/themes/zapara/assets/dist/bg4.35567f94.jpg);">
        <div class="container">
            <div class="shirts__inner" data-aos="fade-up">
                <div class="shirts__subtitle"> То, что вы так долго искали</div>
                <h2 class="shirts__title">Рубашки & Топы</h2> <a href="#" class="shirts__button link-btn">перейти</a>
            </div>
        </div>
    </section>
    <section class="accessories" style="background-image:url(../wp-content/themes/zapara/assets/dist/bg5.dde3f46a.jpg);" id="3">
        <div class="container">
            <div class="accessories__inner" data-aos="fade-up">
                <div class="accessories__subtitle"> Дополняй, улучшай, обновляй</div>
                <h2 class="accessories__title">аксессуары</h2> <a href="#"
                                                                  class="accessories__button link-btn">перейти</a></div>
        </div>
    </section>
    <section class="uniform">
        <div class="container">
            <div class="uniform__inner"><img class="uniform__img" src="../wp-content/themes/zapara/assets/dist/bg6.c39fabb8.png" alt="">
                <div class="uniform__text" data-aos="fade-up">
                    <div class="uniform__subtitle">Униформа которую хочется...</div>
                    <h2 class="uniform__title">носить</h2> <a href="#" class="uniform__link">в каталог</a></div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <div class="clients__wrapper"><h2 class="clients__wrapper-title" data-aos="fade-up">Наши клиенты</h2>
                <div class="clients__slider">
                    <div class="swiper-wrapper clients__slider-wrapper">
                        <div class="swiper-slide clients__slider-wrapper-slide"><a href="#"> <img src="../wp-content/themes/zapara/assets/dist/15a.ac6e7332.jpg"
                                                                                                  alt="15a"> </a> <a
                                href="#"> <img src="../wp-content/themes/zapara/assets/dist/bar_klava.6c336d24.jpg" alt="bar_klava"> </a></div>
                        <div class="swiper-slide clients__slider-wrapper-slide"><a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/45_parallel.2dcba3c8.jpg" alt="15a"> </a> <a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/easy_brix_1.dadcf04b.jpg" alt="bar_klava"> </a></div>
                        <div class="swiper-slide clients__slider-wrapper-slide"><a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/174260logo.e5d673a8.jpg" alt="15a"> </a> <a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/dyhless.08658041.jpg" alt="bar_klava"> </a></div>
                        <div class="swiper-slide clients__slider-wrapper-slide"><a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/244330.d87b83b2.jpg" alt="15a"> </a> <a href="#"> <img src="../wp-content/themes/zapara/assets/dist/ginza.041636c8.jpg"
                                                                                                alt="bar_klava"> </a></div>
                        <div class="swiper-slide clients__slider-wrapper-slide"><a href="#"> <img
                                    src="../wp-content/themes/zapara/assets/dist/bakardi.4e928c26.jpg" alt="15a"> </a>
                            <p class="clients__slider-text"> и другие... </p></div>
                    </div>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon clients-button-next">
                        <use xlink:href="#arrow"></use>
                    </svg>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon clients-button-prev">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="container">
            <div class="review__wrapper">
                <div class="review__wrapper-header"><h2 class="review__wrapper-header-title" data-aos="fade-up"> <?php the_field('review_title'); ?> </h2>
                    <p class="review__wrapper-header-text" data-aos="fade-up"> <?php the_field('review_subtitle'); ?> </p></div>
                <div class="review__wrapper-clients">
                    <div class="review__slider">
                        <div class="swiper-wrapper review__slider-wrapper">
                            <div class="review__slider-wrapper-slide swiper-slide">
                                <div class="review__slide-header">
                                    <img src="../wp-content/themes/zapara/assets/dist/review-img.fbecea9c.jpg" alt=""
                                                                       class="review__slide-header-image">
                                    <div class="review__slide-header-info"><h3>Ольга Маримон</h3>
                                        <p>Aviator, Кемерово</p>
                                        <div class="review__slide-stars">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="review__slide-content"> Спасибо большое вашей команде! Определенно, показали
                                    высокий профессионализм! Мы остались довольны! Работать с вами было комфортно -
                                    вопросы решались оперативно, цвет фартука "в точку"! Все быстро и качественно!
                                    Несомненно, для последующих заказов, обращусь именно к вам!!! <br><br> Спасибо!!!
                                </p> <a href="#" class="review__link">Facebook</a></div>
                            <div class="review__slider-wrapper-slide swiper-slide">
                                <div class="review__slide-header"><img src="../wp-content/themes/zapara/assets/dist/review-img.fbecea9c.jpg" alt=""
                                                                       class="review__slide-header-image">
                                    <div class="review__slide-header-info"><h3>Алена Сафьянова</h3>
                                        <p>Aviator, Кемерово</p>
                                        <div class="review__slide-stars">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 class="review__slide-stars-star">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="review__slide-content"> Спасибо большое вашей команде! Определенно, показали
                                    высокий профессионализм! Мы остались довольны! Работать с вами было комфортно -
                                    вопросы решались оперативно, цвет фартука "в точку"! Все быстро и качественно!
                                    Несомненно, для последующих заказов, обращусь именно к вам!!! <br><br> Спасибо!!!
                                </p> <a href="#" class="review__link">Facebook</a></div>
							
							
							
                        </div>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon review-button-next">
                            <use xlink:href="#arrow"></use>
                        </svg>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon review-button-prev">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" id="4">
        <div class="container">
            <div class="gallery__wrapper"><h2 class="gallery__wrapper-title" data-aos="fade-up"> Галерея выполненных
                    работ </h2>
                <div class="gallery__wrapper-content"><img src="../wp-content/themes/zapara/assets/dist/image1.a5afb937.jpg" alt="image"
                                                           class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image2.17d71673.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image3.80c2688e.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image4.74e074fb.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image5.2a57aad3.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image6.a7b0d843.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image7.d54ef8a7.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image8.5acad224.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image9.8677e4ea.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image10.2584f2a7.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image11.16bf8b99.jpg" alt="image" class="gallery__wrapper-content-image"> <img
                        src="../wp-content/themes/zapara/assets/dist/image12.29e586c8.jpg" alt="image" class="gallery__wrapper-content-image"></div>
                <button class="link-btn"> еще...12341654621</button>
            </div>
        </div>
    </section>


<?php
get_footer(); ?>