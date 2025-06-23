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
	 * Banner should not appear when WordPress runs in a subdirectory but home page is root.
	 */
	public function test_banner_not_needed_when_home_is_root() {
		$this->assertFalse( should_show_admin_banner( 'https://example.com/wp/', 'https://example.com/' ) );
	}

	/**
	 * Banner should not appear when WordPress is root but home page is in a subdirectory.
	 */
	public function test_banner_not_needed_when_site_root_and_home_subdirectory() {
		$this->assertFalse( should_show_admin_banner( 'https://example.com/', 'https://example.com/blog/' ) );
	}

	/**
	 * Banner should not appear for root installs.
	 */
	public function test_banner_not_needed_when_site_root() {
		$this->assertFalse( should_show_admin_banner( 'https://example.com/', 'https://example.com/' ) );
	}
}
