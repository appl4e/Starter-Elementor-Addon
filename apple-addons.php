<?php
/**
 * Plugin Name: Apple's Addon
 * Description: Custom Elementor addon.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Apple Mahmood
 * Author URI:  https://applemahmood.com/
 * Text Domain: apples-addon
 * 
 * Elementor tested up to:     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function apples_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Apples_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'apples_addon' );