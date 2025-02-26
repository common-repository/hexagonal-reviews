<?php
/**
 * Translations
 *
 * @package Shared
 */

declare( strict_types=1 );

namespace HexagonalReviews\Shared\Infrastructure\Wordpress;

/**
 * Translations Inspired directly from JWT auth's plugin: https://github.com/Tmeister/wp-api-jwt-auth
 */
final class Translations {
	/**
	 * The domain specified for this plugin.
	 *
	 * @since    1.0.0
	 *
	 * @var string The domain identifier for this plugin.
	 */
	private ?string $domain = null;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( plugin_basename( __FILE__ ), 5 ) . '/languages/'
		);
	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @param string $domain The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}
}
