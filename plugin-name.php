<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   ACF - Page builder prototype
 * @author    Your Name <david@atomicsmash.co.uk>
 * @license   GPL-2.0+
 * @link      https://github.com/AtomicSmash/ACF-page-builder
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       ACF Flexible Content Modifier
 * Plugin URI:        http://www.atomicsmash.co.uk
 * Description:       This makes the third level flexible content area appear in a popup modal window.
 * Version:           0.0.1
 * Author:            Atomicsmash
 * Author URI:        http://www.atomicsmash.co.uk
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/AtomicSmash/ACF-page-builder
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-plugin-name-admin.php' );
	add_action( 'plugins_loaded', array( 'Acf_Layout', 'get_instance' ) );

}
