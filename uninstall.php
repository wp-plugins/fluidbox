<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Fluidbox
 * @author    flowdee <support@flowdee.de>
 * @license   GPL-2.0+
 * @link      http://www.flowdee.de
 * @copyright 2014 flowdee
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $wpdb;

if ( is_multisite() ) {

	$blogs = $wpdb->get_results( "SELECT blog_id FROM {$wpdb->blogs}", ARRAY_A );
		delete_option('fluidbox_active');
	if ( $blogs ) {

	 	foreach ( $blogs as $blog ) {
			switch_to_blog( $blog['blog_id'] );
			delete_option('fluidbox_active');
			restore_current_blog();
		}
	}

} else {
	delete_option('fluidbox_active');
}