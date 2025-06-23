<?php
use PHPUnit\Framework\TestCase;

/**
 * Placeholder database tests.
 */
class PlaceholderTest extends TestCase {
    public function test_create_tables_function_exists() {
        $this->assertTrue( function_exists( 'StoneFlow\\create_tables' ) );
    }
}
