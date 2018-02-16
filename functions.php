<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css' );

// END ENQUEUE PARENT ACTION


add_filter( 'woocommerce_product_tabs', 'woo_custom_reviews_tab', 98 );
function woo_custom_reviews_tab( $tabs ) {

	$tabs['reviews']['callback'] = 'woo_custom_reviews_tab_content';	// Custom description callback

	return $tabs;
}

function woo_custom_reviews_tab_content() {
	echo '<h5>Rate this product</h5>';
	echo '<p>[ratings]</p>'; // Dependent on WP-Post Ratings by Lester 'GaMerZ' Chan
}

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Product Description' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Customer Rating' );				// Rename the reviews tab
	$tabs['additional_information']['title'] = __( 'Product Information' );	// Rename the additional information tab

	return $tabs;

}