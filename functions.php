<?php
/**
 * zapara functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zapara
 */


add_action( 'after_setup_theme', 'mainMenu' );
/* navigation */

function mainMenu() {

    register_nav_menu( 'top', 'Главное меню');
    register_nav_menu( 'bot', 'Меню подвала');
    register_nav_menu( 'top_pages', 'Меню на страницах');
    add_theme_support( 'title-tag', array('blog') );
    add_theme_support( 'post-thumbnails', array('post', 'work', 'blog'));
    add_theme_support('post-formats', array('aside', 'gallery'));

}

function style_theme() {
    /* CSS Styles */
    wp_enqueue_style('style-css', get_stylesheet_uri() );
    wp_enqueue_style('libs-min-css', get_template_directory_uri() . '/assets/css/src.css' );
    wp_enqueue_style('index-css', get_template_directory_uri() . '/assets/css/style.css' );
}

function scripts_theme() {
    //wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/src.5dd915fc.js', array(), '', true );
    wp_enqueue_script('cookie-js', get_template_directory_uri() . '/assets/dist/cookie.js', array(), '', true );
	
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

remove_action ( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action ( 'woocommerce_before_shop_loop', 'woocommerce_show_page_title', 20 );

add_filter( 'request', 'change_requerst_vars_for_product_cat' );
add_filter( 'term_link', 'term_link_filter', 10, 3 );

function change_requerst_vars_for_product_cat($vars) {

    global $wpdb;
    if ( ! empty( $vars[ 'pagename' ] ) || ! empty( $vars[ 'category_name' ] ) || ! empty( $vars[ 'name' ] ) || ! empty( $vars[ 'attachment' ] ) ) {
        $slug   = ! empty( $vars[ 'pagename' ] ) ? $vars[ 'pagename' ] : ( ! empty( $vars[ 'name' ] ) ? $vars[ 'name' ] : ( ! empty( $vars[ 'category_name' ] ) ? $vars[ 'category_name' ] : $vars[ 'attachment' ] ) );
        $exists = $wpdb->get_var( $wpdb->prepare( "SELECT t.term_id FROM $wpdb->terms t LEFT JOIN $wpdb->term_taxonomy tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'product_cat' AND t.slug = %s", array( $slug ) ) );
        if ( $exists ) {
            $old_vars = $vars;
            $vars     = array( 'product_cat' => $slug );
            if ( ! empty( $old_vars[ 'paged' ] ) || ! empty( $old_vars[ 'page' ] ) ) {
                $vars[ 'paged' ] = ! empty( $old_vars[ 'paged' ] ) ? $old_vars[ 'paged' ] : $old_vars[ 'page' ];
            }
            if ( ! empty( $old_vars[ 'orderby' ] ) ) {
                $vars[ 'orderby' ] = $old_vars[ 'orderby' ];
            }
            if ( ! empty( $old_vars[ 'order' ] ) ) {
                $vars[ 'order' ] = $old_vars[ 'order' ];
            }
        }
    }

    return $vars;

}
function term_link_filter( $url, $term, $taxonomy ) {

    $url = str_replace( "/product-category/", "/", $url );
    return $url;

}

function wpp_remove_slug( $post_link, $post, $name ) {

    if ( 'product' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;

}

function wpp_change_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query[ 'page' ] ) ) {
        return;
    }
    if ( ! empty( $query->query[ 'name' ] ) ) {
        $query->set( 'post_type', array( 'post', 'product', 'page' ) );
    }

}

function start_lvl(&$output, $depth=0, $args=null) {
    $output .= '<div class="pod-menu">';
}
function end_lvl(&$output, $depth=0, $args=null) {
    $output .= '</div>';
}
function start_el(&$output, $item, $depth=0, $args=null, $id=0) {
}
function end_el(&$output, $item, $depth=0, $args=null) { 
}
class Menu_Wal_Kwork extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        if($args->menu_class=='header__menu') {
            $output .= "<li class='header__menu-item " .  implode(" ", $item->classes) . "'>";
        } elseif($args->menu_class=='footer__navigation-wrapper') {
            $output .= "<li class='footer__navigation-wrapper-link " .  implode(" ", $item->classes) . "'>";
        }
 
		if ($item->url && $item->url != '#') {
            if($args->menu_class=='header__menu') {
                $output .= '<a class="header__menu-link" href="' . $item->url . '">';
            } elseif($args->menu_class=='footer__navigation-wrapper') {
                $output .= '<a href="' . $item->url . '">';
            }
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}