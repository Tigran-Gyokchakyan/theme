<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$term = get_queried_object();
?>

<?php $product_cat = get_queried_object();
if($product_cat->slug == 'kiteli'): ?>
    <main class="main rubashki">
    <section class="intro" style="background-image: url(<?php echo get_field('bg_intro', $term); ?>)">

        <h1 class="intro__title">
            <?php woocommerce_page_title(); ?></h1><a href="#shop" class="intro__arrow">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="intro__arrow-icon">
                <use xlink:href="#arrow"></use>
            </svg>
        </a></section>
    <section id="shop" class="shop">
        <div class="container">
            <div class="shop__wrapper">
                <?php $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 2,
                    'offset'=> 0,
                );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <?php wc_get_template_part('content', 'tables'); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="freska">
        <div class="container">
            <div class="freska__wrapper">
                <div><img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                    <img class="freska__wrapper-item" src="<?php echo get_field('gallery_img_1', $term); ?>" alt=""> <img
                            class="freska__wrapper-item" src="<?php echo get_field('gallery_img_2', $term); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="shop" class="shop">
        <div class="container">
            <div class="shop__wrapper">
                <?php $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'offset'=> 2,
                );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <?php wc_get_template_part('content', 'tables'); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php $product_cat = get_term( $id, 'product_cat' )->slug;
elseif($product_cat == 'rubashki'): ?>
    <main class="main rubashki">
    <section class="intro" style="background-image: url(<?php echo get_field('bg_intro', $term); ?>)">

        <h1 class="intro__title">
            <?php woocommerce_page_title(); ?></h1><a href="#shop" class="intro__arrow">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="intro__arrow-icon">
                <use xlink:href="#arrow"></use>
            </svg>
        </a></section>
<?php endif; ?>