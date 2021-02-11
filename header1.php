<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
<?php ?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__burger-wrapper">
                <button class="header__burger">
                    <div class="header__burger-item"></div>
                    <div class="header__burger-item"></div>
                    <div class="header__burger-item"></div>
                </button>
                <ul class="header__menu">
                    <li class="header__menu-item header__menu-btn-wrapper">
                        <button class="header__menu-btn">x</button>
                    </li>
                    <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location'  => 'top',
                        'menu_class'      => 'header__menu',
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s',
                    )) ?>
                </ul>

            </div>
            <div class="header__logo"><?php bloginfo('name'); ?></div>
            <div class="header__buttons">
                <button class="header__buttons-search"><img src="search.231cf1f0.svg" alt=""></button>
                <div class="header__buttons-border"></div>
                <button class="header__buttons-cart"><img src="shopping-cart.e90ab453.svg" alt=""> <span
                            class="header__buttons-cart-numb"> 1 </span></button>
            </div>
        </div>
    </div>
</header>

