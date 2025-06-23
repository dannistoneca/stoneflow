<?php
if ( ! defined( 'WP_TESTS_DIR' ) ) {
    if ( getenv( 'WP_TESTS_DIR' ) ) {
        define( 'WP_TESTS_DIR', getenv( 'WP_TESTS_DIR' ) );
    } else {
        define( 'WP_TESTS_DIR', __DIR__ . '/../vendor/wp-phpunit/wp-phpunit/includes' );
    }
}

require WP_TESTS_DIR . '/functions.php';

tests_add_filter( 'muplugins_loaded', function () {
    require dirname( __DIR__ ) . '/stoneflow.php';
} );

require WP_TESTS_DIR . '/bootstrap.php';

activate_plugin( 'stoneflow/stoneflow.php' );
