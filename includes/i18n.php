<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://copypro.ai
 * @since      1.0.0
 *
 * @package    Copypro_AI
 * @subpackage Copypro_AI/includes
 */

 namespace Copypro_AI\Includes;

 use const Copypro_AI\PATH;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Copypro_AI
 * @subpackage Copypro_AI/includes
 * @author     CopyPro <ted@copypro.ai>
 */
class I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'copypro-ai',
			false,
			PATH . '/languages/'
		);

	}



}
