<?php
/**
 * @package   Fluidbox
 * @author    flowdee <support@flowdee.de>
 * @license   GPL-2.0+
 * @link      http://www.flowdee.de
 * @copyright 2014 flowdee
 *
 * @wordpress-plugin
 * Plugin Name:       Fluidbox for WordPress
 * Plugin URI:        http://coder.flowdee.de/fluidbox-for-wordpress/
 * Description:       Fluidbox is a lightweight and modern lightbox plugin to enlarge your images for an optimized and responsive view.
 * Version:           1.0
 * Author:            flowdee
 * Author URI:        http://www.flowdee.de
 * Text Domain:       fluidbox-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Define Plugin Paths
 *----------------------------------------------------------------------------*/
define('FLUIDBOX_PATH', plugin_dir_url( __FILE__ ));

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * Handle Settings
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/options.php' );
/*
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-fluidbox.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'Fluidbox', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Fluidbox', 'deactivate' ) );

/*
 *
 */
add_action( 'plugins_loaded', array( 'Fluidbox', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-fluidbox-admin.php' );
	add_action( 'plugins_loaded', array( 'Fluidbox_Admin', 'get_instance' ) );
}
