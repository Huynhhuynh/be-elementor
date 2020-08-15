<?php 
/**
 * Plugin Name:       Be Elementor - a plugin add-on for Elementor
 * Plugin URI:        https://beplus.com/be-elementor
 * Description:       add-on for Elementor created by Beplus
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7
 * Author:            Beplus
 * Author URI:        #
 * Text Domain:       be-elementor
 * Domain Path:       /languages
 */

{
    /**
     * Define 
     */
    define( 'BEE_VER', '1.0.0' );
    define( 'BEE_DIR', plugin_dir_path( __FILE__ ) );
    define( 'BEE_URI', plugin_dir_url( __FILE__ ) );
}

{
    /**
     * Include
     */
    require( BEE_DIR . 'inc/static.php' );
    require( BEE_DIR . 'inc/helpers.php' );
    require( BEE_DIR . 'inc/hooks.php' );
    require( BEE_DIR . 'inc/ajax.php' );
    require( BEE_DIR . 'inc/template-tag.php' );
    require( BEE_DIR . 'inc/elementor-widget-loaded.php' );
}

{
    /**
     * Plugin boot 
     */

}