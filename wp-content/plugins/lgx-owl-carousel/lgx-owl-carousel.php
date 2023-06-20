<?php

/**
 *
 * @link              http://logichunt.com
 * @since             1.0.0
 * @package           Lgx_Owl_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       Owl Carousel
 * Plugin URI:        http://logichunt.com/product/wordpress-owl-carousel-slider/
 * Description:       This is a Owl Carousel 2.0 based plugin for wordpress, a responsive and fully customizable carousel.
 * Version:           1.4.0
 * Author:            LogicHunt
 * Author URI:        http://logichunt.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lgx-owl-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lgx-owl-carousel-activator.php
 */
function activate_lgx_owl_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lgx-owl-carousel-activator.php';
	Lgx_Owl_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lgx-owl-carousel-deactivator.php
 */
function deactivate_lgx_owl_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lgx-owl-carousel-deactivator.php';
	Lgx_Owl_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lgx_owl_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_lgx_owl_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-lgx-owl-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

function run_lgx_owl_carousel() {

	$plugin = new Lgx_Owl_Carousel();
	$plugin->run();

}
run_lgx_owl_carousel();