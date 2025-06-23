<?php
/**
 * Admin notice banner when WordPress is in a subdirectory and home page is not root.
 *
 * @package StoneFlow
 */

namespace StoneFlow;

/**
 * Determine if the admin banner should display.
 *
 * @param string|null $site_url Optional override of the site URL.
 * @param string|null $home_url Optional override of the home URL.
 * @return bool
 */
function should_show_admin_banner( $site_url = null, $home_url = null ) {
	$site_url  = $site_url ?? site_url( '/' );
	$home_url  = $home_url ?? home_url( '/' );
	$parser    = function_exists( 'wp_parse_url' ) ? 'wp_parse_url' : 'parse_url';
	$site_path = trim( $parser( $site_url, PHP_URL_PATH ), '/' );
	$home_path = trim( $parser( $home_url, PHP_URL_PATH ), '/' );

	return '' !== $site_path && '' !== $home_path;
}

/**
 * Output the warning banner in the admin area when needed.
 */
function maybe_display_admin_banner() {
	if ( false === should_show_admin_banner() ) {
		return;
	}

	echo '<div class="notice notice-warning"><p>' .
		esc_html__( 'WordPress is installed in a subdirectory and the default home page is not root.', 'stoneflow' ) .
		'</p></div>';
}

if ( function_exists( 'add_action' ) ) {
	add_action( 'admin_notices', __NAMESPACE__ . '\\maybe_display_admin_banner' );
}
