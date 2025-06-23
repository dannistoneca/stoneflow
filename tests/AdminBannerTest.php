<?php
/**
 * Tests for the admin banner logic.
 *
 * @package StoneFlow
 */

use PHPUnit\Framework\TestCase;
use function StoneFlow\should_show_admin_banner;

/**
 * Class AdminBannerTest
 */
class AdminBannerTest extends TestCase {
	/**
	 * Banner should appear when both URLs are within subdirectories.
	 */
	public function test_banner_needed_when_site_and_home_in_subdirectory() {
		$this->assertTrue( should_show_admin_banner( 'https://example.com/wp/', 'https://example.com/wp/home/' ) );
	}

	/**
	 * Banner should not appear for root installs.
	 */
	public function test_banner_not_needed_when_site_root() {
		$this->assertFalse( should_show_admin_banner( 'https://example.com/', 'https://example.com/' ) );
	}
}
