<?php
namespace StoneFlow;

/**
 * Simple PSR-4 autoloader for the StoneFlow namespace.
 *
 * @param string $class Class name.
 */
spl_autoload_register(
    function ( $class ) {
        $prefix = __NAMESPACE__ . '\\';
        if ( 0 !== strpos( $class, $prefix ) ) {
            return;
        }

        $relative = substr( $class, strlen( $prefix ) );
        $path     = __DIR__ . '/' . str_replace( '\\', '/', $relative ) . '.php';
        if ( file_exists( $path ) ) {
            require $path;
        }
    }
);
