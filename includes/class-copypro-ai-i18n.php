<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://copypro.ai
 * @since      2.1.0
 *
 * @package    Copypro_Ai
 * @subpackage Copypro_Ai/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      2.1.0
 * @package    Copypro_Ai
 * @subpackage Copypro_Ai/includes
 * @author     CopyPro <ted@copypro.ai>
 */
class Copypro_Ai_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    2.1.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'copypro-ai',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
