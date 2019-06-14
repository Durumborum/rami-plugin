<?php 
/**
 * @package RamiPlugin
 */

 /*
 Plugin Name: Rami Plugin
 Plugin URI: http://rami-plugin.com
 Description: This is my first try at a customer WP plugin.
 Version: 0.0.1
 Author: Simon Borum
 Author URI: http://simonborum.com
 License: GPLv2 or later
 Text Domain: rami-plugin
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

//if ( ! defined( 'ABSPATH') ) {
//    die;
//}

//if( ! function_exists( 'add_action' ) ) {
//    echo 'Hey, no access here!';
//    die;
//}

// If this file is called directly, abort!
defined( 'ABSPATH' ) or die( 'Hey, no access here!' );

// Requires once the Composer Autoload file
if ( file_exists( dirname( __FILE__ ). '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ). '/vendor/autoload.php';
}

/**
 * Starts the functions to run upon activation of the plugin
 */
function activate_rami_plugin() {
    Includes\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_rami_plugin' );

/**
 * Starts the functions to run upon deactivation of the plugin
 */
function deactivate_rami_plugin() {
    Includes\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_rami_plugin' );

/**
 * Initializes
 */
if ( class_exists( 'Includes\\Init' ) ) {
    Includes\Init::register_services();
}
