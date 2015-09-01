<?php

/**
 * WPML Papi Compatibility
 *
 * Adds WPML compatibility to WordPress Page Type API.
 *
 * @link              http://log.pt/
 * @since             1.0.0
 * @package           WpmlPapiCompatibility
 *
 * @wordpress-plugin
 * Plugin Name:       WPML Papi Compatibility
 * Plugin URI:        https://github.com/log-oscon/wpml-papi-compatibility/
 * Description:       WordPress Page Type API WPML compatibility.
 * Version:           1.0.0
 * Author:            log.OSCON, Lda.
 * Author URI:        http://log.pt/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpml-papi-compatibility
 * Domain Path:       /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use logoscon\WpmlPapiCompatibility;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
\add_action( 'plugins_loaded', function () {
    $plugin = new WpmlPapiCompatibility\Plugin();
    $plugin->run();
} );

?>
