<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! $product_attributes ) {
	return;
}
?>

<!--<table class="woocommerce-product-attributes shop_attributes">-->
	<?php foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
		<!--<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php //echo esc_attr( $product_attribute_key ); ?>">
			<th class="woocommerce-product-attributes-item__label"></th>
			<td class="woocommerce-product-attributes-item__value"></td>
		</tr>-->
		<? $at_m = explode(",", $product_attribute['value']); ?>
		<label for="razmer" class="popup__label"><?php echo wp_kses_post( $product_attribute['label'] ); ?></label>
		<div class="popup__select-wrap">
			<select name="<?echo $product_attribute['label'];?>" id="razmer" class="popup__select">
					<? for($i=0;$i<count($at_m);$i++) : ?>
						<option value="<? echo $at_m[$i]; ?>" class="popup__option"><? echo $at_m[$i]; ?></option>
					<? endfor; ?>
			</select>
		</div>
	<?php endforeach; ?>
<!--</table>-->