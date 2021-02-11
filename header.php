<!DOCTYPE html>
<html lang="en">
<? $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

if(!$_COOKIE['i_user']) {
   setcookie('i_user',generate_string($permitted_chars, 30), time()+3600, "/");
} ?>
   <head>
      <meta charset="utf-8">
      <title><?php echo wp_get_document_title(); ?></title>
      <link rel="stylesheet" href="../wp-content/themes/zapara/assets/dist/style.777161c5.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="<? echo get_template_directory_uri();?>/assets/dist/Zapara.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="<? echo get_template_directory_uri();?>/assets/dist/zapara.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<? echo get_template_directory_uri();?>/assets/dist/zapara.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<? echo get_template_directory_uri();?>/assets/dist/zapara.png">
      <link rel="apple-touch-startup-image" href="<? echo get_template_directory_uri();?>/assets/dist/zapara.png">
      <!-- Chrome, Firefox, Opera -->
      <meta name="theme-color" content="#d4d4d4">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#d4d4d4">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-status-bar-style" content="default">
      <?php wp_head(); ?>
   </head>
   <body>
      <header class="header" <? if($_SERVER["REQUEST_URI"]=="" || $_SERVER["REQUEST_URI"]=="/"): ?> <?else:?> style="position:fixed;background:#fff;box-shadow:0px 5px 20px 3px rgba(0,0,0,0.25);padding-top:20px;" <? endif; ?>>
         <div class="container">
         <? if($_SERVER["REQUEST_URI"]=="" || $_SERVER["REQUEST_URI"]=="/"): ?>
            <div class="header__inner">
            <? else: ?>
            <div class="header_not_burger_inner">
            <? endif; ?>
               <div class="header__burger-wrapper">  
                  <button class="header__burger">
                     <div class="header__burger-item"></div>
                     <div class="header__burger-item"></div>
                     <div class="header__burger-item"></div>
                  </button>
                  <ul class="header__menu">
                     <li class="header__menu-item header__menu-btn-wrapper"> <button class="header__menu-btn">x</button> </li>
                     <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location'  => 'top',
                        'menu_class'      => 'header__menu',
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s',
                        'walker' => new Menu_Wal_Kwork(),
                    )) ?>
                  </ul>
               </div>
               <div class="header__logo" onclick="location.href='/';"><?php bloginfo('name'); ?></div>
               <div class="header__buttons">
                  <button class="header__buttons-search"> <img src="../wp-content/themes/zapara/assets/dist/search.231cf1f0.svg" alt=""> </button> 
                  <div class="header__buttons-border"></div>
                  <button class="header__buttons-cart"> <img src="../wp-content/themes/zapara/assets/dist/shopping-cart.e90ab453.svg" alt=""> <span class="header__buttons-cart-numb"> 0 </span> </button> 
                     

               </div>
            </div>
         </div>
      </header>