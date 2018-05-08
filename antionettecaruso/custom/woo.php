<?php
/* customizations for woocommerce */

add_action( 'after_setup_theme', 'bbloomer_remove_zoom_lightbox_theme_support', 99 );

// remove lightbox, zoom & slider for woocommerce products 
function bbloomer_remove_zoom_lightbox_theme_support() {
remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );
}
