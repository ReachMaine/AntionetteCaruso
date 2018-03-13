<?php
/* customizations for divi theme */

// redefine function s.t. we can do shortcodes in footer "credits"
if ( ! function_exists( 'et_get_footer_credits' ) ) :
function et_get_footer_credits() {
	$original_footer_credits = et_get_original_footer_credits();

	$disable_custom_credits = et_get_option( 'disable_custom_footer_credits', false );

	if ( $disable_custom_credits ) {
		return '';
	}

	$credits_format = '<%2$s id="footer-info">%1$s</%2$s>';

	$footer_credits = et_get_option( 'custom_footer_credits', '' );
  $footer_credits = do_shortcode($footer_credits); // zig
	if ( '' === trim( $footer_credits ) ) {
		return et_get_safe_localization( sprintf( $credits_format, $original_footer_credits, 'p' ) );
	}

	return et_get_safe_localization( sprintf( $credits_format, $footer_credits, 'div' ) );
}
endif;
