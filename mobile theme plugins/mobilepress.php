<?php
/*
Plugin Name: Mobiletheme activator
Plugin URI: http://spidysoft.com
Description: 
Version: 
Author: 
Author URI: 
License: 

/* 
*/

global $wpdb;

// Load the helpers
require_once( dirname( __FILE__ ) . '/helpers/functions.php' );

// Load the config
require_once( dirname( __FILE__ ) . '/config/config.php' );

// Load the core class
require_once( dirname( __FILE__ ) . '/classes/core.php' );

if ( class_exists( 'Mobilepress_core' ) ) {
	// New MobilePress object
	$mobilepress_core = new Mobilepress_core;

	// Setup the installer on activation of the plugin
	register_activation_hook( __FILE__, array( &$mobilepress_core, 'mopr_load_activation' ) );

	// Shut down the plugin on deactivation
	register_deactivation_hook( __FILE__, array( &$mobilepress_core, 'mopr_load_deactivation' ) );

	// Setup the uninstaller if the plugin needs to be uninstalled
	register_uninstall_hook( __FILE__, array( &$mobilepress_core, 'mopr_load_uninstall' ));

	// Setup admin panel only if we are inside the admin area, otherwise run the normal render code
	if ( is_admin() )
	{
		// Setup the admin area
		$mobilepress_core->mopr_load_admin();
	} else {
		require_once( dirname( __FILE__ ) . '/helpers/api.php' );
		// Start a session if not started already
		if ( ! session_id() ) {
			@session_start();
		}

		// Initialize the MobilePress check logic and rendering
		$mobilepress_core->mopr_load_site();
	}
}

?>