<?php
/* customizations for woocommerce */

add_action( 'after_setup_theme', 'bbloomer_remove_zoom_lightbox_theme_support', 99 );

// remove lightbox, zoom & slider for woocommerce products
function bbloomer_remove_zoom_lightbox_theme_support() {
remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );
}

// remove the result count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// remove sorting
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// remove woo breadcrumbs
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
