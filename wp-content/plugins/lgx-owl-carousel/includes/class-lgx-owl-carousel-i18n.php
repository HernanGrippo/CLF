<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/includes
 * @author     LogicHunt <info.logichunt@gmail.com>
 */
class Lgx_Owl_Carousel_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lgx-owl-carousel',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
