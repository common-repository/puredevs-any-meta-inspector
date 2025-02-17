<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Puredevs_Any_Meta_Inspector
 *
 * @wordpress-plugin
 * Plugin Name:       PureDevs Any Meta Inspector
 * Plugin URI:        https://wordpress.org/plugins/puredevs-any-meta-inspector
 * Description:       When activated, PureDevs Any Meta Inspector shows all the meta keys and their unserialized values in a metabox for posts( including all CPT ), pages, terms( any taxonomy ), comments and users.
 * Version:           1.0.0
 * Author:            puredevs
 * Author URI:        https://puredevs.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       puredevs-any-meta-inspector
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PUREDEVS_ANY_META_INSPECTOR_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-puredevs-any-meta-inspector.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function pdami_run_puredevs_any_meta_inspector() {

	$plugin = new Puredevs_Any_Meta_Inspector();
	$plugin->pdami_run();

}
pdami_run_puredevs_any_meta_inspector();
