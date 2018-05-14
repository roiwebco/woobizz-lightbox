<?php
/**
 * Plugin Name: Woobizz LightBox
 * Plugin URI: https://woobizz.com
 * Description: Woocommerce Storefront LightBox Customiser
 * Author: ROIWEB.CO
 * Author URI: https://roiweb.co
 * Version: 1.0.1
 * Text Domain: woobizz-lightbox
 * Domain Path: /lang/
 */
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizz_lightbox_load_textdomain' );
function woobizz_lightbox_load_textdomain(){load_plugin_textdomain('woobizz-lightbox',false,basename(dirname( __FILE__ )) . '/lang' );}
// Admin Files
define('WOOBIZZLIGHTBOX', 'woobizzlightbox');
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/*.php" ) as $file ) {include_once $file;}
// Functions Files
define('WOOBIZZLIGHTBOX', 'woobizzlightbox');
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/functions/*.php" ) as $file ) {include_once $file;}
// Options Files
define('WOOBIZZLIGHTBOX', 'woobizzlightbox');
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/options/*.php" ) as $file ) {include_once $file;}
// Section Files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {include_once $file;}
// ADD OPTIONS AND SUBMENU
$options_page = new WoobizzLightboxOptions( 'WooBizz Lightbox', 'woobizz-lightbox', WOOBIZZLIGHTBOX, 'woobizz', null, 'read', null, true, false, true, $options );