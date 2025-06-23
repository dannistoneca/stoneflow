<?php
use PHPUnit\Framework\TestCase;

class PluginSmokeTest extends TestCase {
    public function test_plugin_is_active() {
        $this->assertTrue( is_plugin_active( 'stoneflow/stoneflow.php' ) );
    }
}
