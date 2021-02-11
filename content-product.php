<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>



<?
if($product->get_sku()=='simple'):
?>

<div class="item_simple_inner open-modal" id="item_id_<? echo $product->get_id(); ?>">
	<?php

	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	$post_thumbnail_id = $product->get_image_id();
	$attachment_ids = $product->get_gallery_attachment_ids();

	echo '<div class="item_simple_wrap_img"><img src="'.wp_get_attachment_url( $post_thumbnail_id ).'" class=""></div>';
	
	/* 
//do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );

	//echo '<div class="items1__item-subtitle">' . get_the_excerpt() . '</div>';

	$attr_color = get_the_terms($product->id, 'pa_color');
	$attr_print = get_the_terms($product->id, 'pa_print');

	//print_r($attr);

	//print_r(get_object_vars($attr_color[2]));

	echo '<div class="item_simple_wrap_text">'.get_the_title( $product->id ).'<span>'.get_the_excerpt().'</span></div>';

	echo '<div class="item_simple_btn"><a class="tunic__button link-btn open-modal" id="item_id_'.$product->get_id().'">Выбрать цвет</a></div>';

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>

<?
else:
?>
				  
<div class="items1__item open-modal" id="item_id_<? echo $product->get_id(); ?>">
	<?php

	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	$post_thumbnail_id = $product->get_image_id();
	$attachment_ids = $product->get_gallery_attachment_ids();

	echo '<div style="display:none;"><img src="'.wp_get_attachment_url($attachment_ids[0]).'"></div>';
	echo '<div class="items1__item-img" id="item_id_'.$product->get_id().'" data-image="'.wp_get_attachment_url( $post_thumbnail_id ).'" data-image-2="'.wp_get_attachment_url($attachment_ids[0]).'" style="background-image:url('.wp_get_attachment_url( $post_thumbnail_id ).');"></div>';
	
	/* 
//do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	echo '<div class="items1__item-subtitle">' . get_the_excerpt() . '</div>';

	$attr_color = get_the_terms($product->id, 'pa_color');
	$attr_print = get_the_terms($product->id, 'pa_print');

	//print_r($attr);

	//print_r(get_object_vars($attr_color[2]));
	if (is_countable($attr_color)) $attr_color_1=count($attr_color); else $attr_color_1=0;
	if (is_countable($attr_print)) $attr_print_1=count($attr_print); else $attr_print_1=0;

	if($attr_color_1>1 || $attr_print_1>1)
		echo '<div class="items1__item-color">Выбор цвета</div>';

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>
<?
endif;
?>

<div class="popup" data-id="<?echo 'item_id_'.$product->get_id();?>"><form>
            <div class="popup-back">Назад</div>
            <div class="container">
                <div class="popup__inner">
                    <div class="popup__slider">
                        <button class="popup__slider-left">
                            <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>Left</desc>
                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                                <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Right</desc>
                                    <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                                </svg>
                            </svg>
                        </button>
                        <button class="popup__slider-right">
                            <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>Right</desc>
                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                            </svg>
						</button>
							<? 
							echo '<div class="popup__slide active" data-in="0"><img src="'.wp_get_attachment_url( $post_thumbnail_id ).'" alt="" /></div>';
							for($n=0;$n<=count($attachment_ids);$n++) {
								echo '<div class="popup__slide" data-in="'.($n+1).'"><img src="'.wp_get_attachment_url($attachment_ids[$n]).'" alt="" /></div>';
							}
							?>
                        <div class="popup__slider-prev">
							<? 
								echo '<div class="popup__slide-prev active" data-in="0"><img src="'.wp_get_attachment_url( $post_thumbnail_id ).'" alt="" /></div>';
								for($m=0;$m<=count($attachment_ids);$m++) {
									echo '<div class="popup__slide-prev" data-in="'.($m+1).'"><img src="'.wp_get_attachment_url($attachment_ids[$m]).'" alt="" /></div>';
								}
							?>
                        </div>
                    </div>
                    <div class="popup__text">
                        <div class="popup__title"><? echo do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
						<?php if ($product->get_sku()) { ?>
						<div class="popup__art"><?= $product->get_sku(); ?></div>
						<?php } ?>
                        <div class="popup__price"><? echo $product->get_price_html(); ?></div>
                        <? $product->list_attributes(); ?>
                        <button class="popup__btn">В корзину</button>
                        <div class="popup__decription"><? echo preg_replace("#\r?\n#", "<br />", $product->post->post_content); ?></div>
					</div>
					<div style="display:none;" class="cart_attrs">
					</div>
                </div>
            </div>
			</form></div>