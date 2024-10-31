<?php
/*
	Plugin Name: NavThemes Gutenberg Blocks
	Plugin URI: 
	Description: Custom Gutenberg Blocks from NavThemes
	Version: 2.0
	Author: NavThemes
	Author URI: https://www.navthemes.com/
	License: 
	Text Domain: navthemes_gtblocks
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
register_activation_hook( __FILE__, 'child_plugin_activate' );
function child_plugin_activate(){

    // Require parent plugin
    if ( ! is_plugin_active( 'navthemesfa/navthemesfa.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires <a href="'.admin_url().'/plugin-install.php?s=navthemes&tab=search&type=term">NavThemes FontAwesome Icons</a> to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}
/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
