<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package zakotv
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function omskdev_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'omskdev_pingback_header' );