<?php
/**
 * Plugin Name: hide content on time or date base
 * Plugin URI: https://github.com/innovative-designer
 * Description: Set a date/time to show or hide specific parts of a post's content
 * Version: 1.0
 * Author: Qaiser ur rehman
 * Author URI: https://innovative-designer.com/
 *
 * @package unknown
 * @author INNOVATIVE DESIGNERS
 * @version 1.0.0
 */


/*
 * ---------------------------------- *
 * constants
 * ---------------------------------- *
*/

if ( ! defined( 'SHOWHIDE_PLUGIN_DIR' ) ) {
	define( 'SHOWHIDE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'SHOWHIDE_PLUGIN_URL' ) ) {
	define( 'SHOWHIDE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/*
 * ---------------------------------- *
 * includes
 * ---------------------------------- *
*/

include( SHOWHIDE_PLUGIN_DIR . 'includes/shortcodes.php' ); // Where the magic happens.
