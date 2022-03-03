<?php
/**
 * AMP plugin to open links in new tab.
 *
 * @package   Google\AMP_Link_New_Tab
 * @author    Your Name, Google
 * @license   GPL-2.0-or-later
 * @copyright 2020 Google Inc.
 *
 * @wordpress-plugin
 * Plugin Name: AMP Open Link in New tab.
 * Plugin URI: https://amp-wp.org/
 * Description: Plugin will open all the links in new tab.
 * Version: 0.1
 * Author: milindmore22
 * Author URI: https://amp-wp.org/
 * License: GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Google\AMP_Link_New_Tab;

/**
 * Whether the page is AMP.
 *
 * @return bool Is AMP.
 */
function is_amp() {
	return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();
}

/**
 * Run Hooks.
 */
function add_hooks() {

		add_filter( 'amp_content_sanitizers', __NAMESPACE__ . '\filter_sanitizers' );
}

add_action( 'wp', __NAMESPACE__ . '\add_hooks' );

/**
 * Add sanitizer to fix up the markup.
 *
 * @param array $sanitizers Sanitizers.
 * @return array Sanitizers.
 */
function filter_sanitizers( $sanitizers ) {
	require_once __DIR__ . '/sanitizers/class-sanitizer.php';
	$sanitizers[ __NAMESPACE__ . '\Sanitizer' ] = array();
	return $sanitizers;
}
