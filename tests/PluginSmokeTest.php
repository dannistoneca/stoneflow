<?php
use PHPUnit\Framework\TestCase;

/**
 * Basic plugin smoke test.
 */
class PluginSmokeTest extends TestCase {
    public function test_init_function_exists() {
        $this->assertTrue( function_exists( 'StoneFlow\\init' ) );
    }
}
