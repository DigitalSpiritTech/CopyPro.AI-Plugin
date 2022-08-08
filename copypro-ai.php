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
 * @since             1.0.0
 * @package           Copypro_AI
 *
 * @wordpress-plugin
 * Plugin Name:       CopyPro.AI
 * Plugin URI:        https://plugin.copypro.ai
 * Description:       Bring your generated copy from the CopyPro.AI app into your wordpress. Save the generate copy as either a post or a page.
 * Version:           1.0.0
 * Author:            CopyPro
 * Author URI:        https://copypro.ai
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       copypro-ai
 * Domain Path:       /languages
 */

namespace Copypro_AI;

use Copypro_AI\Setup;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Set Default paths.
define( __NAMESPACE__ . '\\PATH', \plugin_dir_path( __FILE__)  );
define( __NAMESPACE__ . '\\URL', \plugin_dir_url( __FILE__ ) );

// Set some plugin values.
define( __NAMESPACE__ . '\\FILE', __FILE__ );

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( __NAMESPACE__ . '\\VERSION', '1.0.0' );

// Setup autoloading for our classes.
spl_autoload_register(__NAMESPACE__ . '\\autoload');
function autoload( $cls )
{
    // Trim off Namespace parts and lowercase.
    $cls = ltrim( $cls, '\\' );

    // If the namespace isn't the first part of the class passed, return (not found).
    if( strpos( $cls, __NAMESPACE__ ) !== 0 )
        return;

    // Remove the namespace from the path along with the slash after it and turn.
    $cls = strtolower( ltrim( str_replace( __NAMESPACE__, '', $cls ), '\\' ) );

    $path = PATH .
        str_replace( '\\', DIRECTORY_SEPARATOR, $cls ) . '.php';

    require_once( $path );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/activator.php
 */
function activate_copypro_ai() {
	Includes\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/deactivator.php
 */
function deactivate_copypro_ai() {
	Includes\Deactivator::deactivate();
}

\register_activation_hook( FILE, __NAMESPACE__ . '\\activate_copypro_ai' );
\register_deactivation_hook( FILE, __NAMESPACE__ . '\\deactivate_copypro_ai' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_copypro_ai() {
	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	$plugin = new Setup();
	$plugin->run();

}
run_copypro_ai();
