<?php
/**
 * Plugin Name: StoneFlow
 * Description: Core functionality for the StoneFlow plugin.
 * Version: 0.1.0
 * Author: Stone Business Solutions
 *
 * @package StoneFlow
 */

namespace StoneFlow;

defined( 'ABSPATH' ) || exit;

/**
 * Initialize the plugin.
 * Loads the autoloader and database upgrader.
 */
function init() {
    require_once __DIR__ . '/includes/class-loader.php';
    require_once __DIR__ . '/includes/db-upgrader.php';
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\\init' );
