<?php
/**
 * Woocommerce compatibility
 *
 * @package Edubin
 */

/**
 * Declare WooCommerce support
 */
add_action( 'after_setup_theme', 'edubin_woocommerce_support' );
function edubin_woocommerce_support() {
	add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );    
}

/**
 * Remove default WooCommerce CSS
 */
add_filter( 'woocommerce_enqueue_styles', 'edubin_dequeue_styles' );
function edubin_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] ); 
    return $enqueue_styles;
}

/**
 * Add product link icon
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'edubin_add_wishlist_with_product_link_icon', 10 );
function edubin_add_wishlist_with_product_link_icon() {
    echo '<div class="edubin-cart-button-list">';
    woocommerce_template_loop_add_to_cart();

    $product_link = get_the_permalink();
    echo '<a class="edubin-cart-link" href="'.$product_link.'"><i class="glyph-icon flaticon-musica-searcher"></i></a>';
    echo '</div>';

}

/**
 * Add image overlay class
 */
add_action( 'woocommerce_before_shop_loop_item', 'edubin_wp_image_overlay', 10 );
function edubin_wp_image_overlay() {
    echo '<div class="overlay"></div>';
}

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);

function sb_woo_remove_reviews_tab($tabs) {
if (!is_user_logged_in()) {
unset($tabs['reviews']);
}

return $tabs;
}


add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' ); 

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' ); 

function woo_custom_product_add_to_cart_text() {

    return esc_html__( '', 'edubin' );

}

// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
//remove shop page title 
add_filter('woocommerce_show_page_title', '__return_false');
// Trim zeros in price decimals
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );
// Replace WooCommerce Default Pagination
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
function woocommerce_pagination() {

    the_posts_pagination( array(
        'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
        'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ) );
}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);

// If the user needs to install, send them to the setup wizard
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', 'wc_subscriber_auto_redirect', 20, 1 );
function wc_subscriber_auto_redirect( $boolean ) {
    return true;
}

/**
 * Add anchor link shop page title
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 10 );
function woocommerce_template_loop_product_link_open() {
    global $product;

    $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

    echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
}
