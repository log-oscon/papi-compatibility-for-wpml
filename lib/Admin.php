<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       https://github.com/log-oscon/papi-compatibility-for-wpml/
 * @since      1.0.0
 *
 * @package    PapiWpml
 * @subpackage PapiWpml/includes
 */

namespace logoscon\PapiWpml;

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    PapiWpml
 * @subpackage PapiWpml/includes
 * @author     log.OSCON, Lda. <engenharia@log.pt>
 */
class Admin {

	/**
	 * The plugin's instance.
	 *
	 * @since     1.0.0
	 * @access    private
	 * @var       Plugin $plugin This plugin's instance.
	 */
	private $plugin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    Plugin $plugin This plugin's instance.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 * Fix link to translation.
	 *
	 * @since     1.0.0
	 * @param     string    $link    WPML link
	 * @return    string             Possibly-modified WPML link
	 */
	public function wpml_link_to_translation( $link ) {

		global $post;

		if ( $post->post_type === 'page' &&
			 function_exists( 'icl_object_id' ) &&
			 function_exists( 'papi_get_page_type_meta_value' ) ) {

			$page_type = \papi_get_page_type_meta_value( $post->ID );

			if ( $page_type ) {
				return $link .= '&page_type=' . $page_type;
			}

			return $link .= '&papi-bypass=true';
		}

		return $link;

	}

}
