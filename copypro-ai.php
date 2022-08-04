<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://copypro.ai
 * @since             2.1.0
 * @package           Copypro_Ai
 *
 * @wordpress-plugin
 * Plugin Name:       CopyPro.AI
 * Plugin URI:        https://plugin.copypro.ai
 * Description:       Bring your generated copy from the CopyPro.AI app into your wordpress. Save the generate copy as
 * either a post or a page.
 * Version:           2.1.0
 * Author:            CopyPro
 * Author URI:        https://copypro.ai
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       copypro-ai
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 2.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'COPYPRO_AI_VERSION', '2.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-copypro-ai-activator.php
 */
function activate_copypro_ai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-copypro-ai-activator.php';
	Copypro_Ai_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-copypro-ai-deactivator.php
 */
function deactivate_copypro_ai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-copypro-ai-deactivator.php';
	Copypro_Ai_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_copypro_ai' );
register_deactivation_hook( __FILE__, 'deactivate_copypro_ai' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-copypro-ai.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.1.0
 */
function run_copypro_ai() {

	$plugin = new Copypro_Ai();
	$plugin->run();

}
run_copypro_ai();
