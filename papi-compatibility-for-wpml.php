<?php

/**
 * Papi compatibility for WPML
 *
 * Adds WPML compatibility to WordPress Page Type API.
 *
 * @link              http://log.pt/
 * @since             1.0.0
 * @package           PapiWpml
 *
 * @wordpress-plugin
 * Plugin Name:       Papi compatibility for WPML
 * Plugin URI:        https://github.com/log-oscon/papi-compatibility-for-wpml/
 * Description:       Adds WPML compatibility to WordPress Page Type API.
 * Version:           1.0.1
 * Author:            log.OSCON, Lda.
 * Author URI:        http://log.pt/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       papi-compatibility-for-wpml
 * Domain Path:       /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use logoscon\PapiWpml;

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
    $plugin = new PapiWpml\Plugin();
    $plugin->run();
} );

?>
