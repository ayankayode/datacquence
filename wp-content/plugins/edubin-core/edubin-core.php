<?php
/**
 * Plugin Name: Edubin Core
 * Description: Plugin that adds additional features needed by our theme. It's also a framework to code your own widgets to help you make any kind of page.
 * Plugin URI: 	http://thepixelcurve.com/
 * Author: 		ThePixelcurve
 * Author URI: 	http://thepixelcurve.com/
 * Version: 	6.0.8
 * Text Domain: edubin-core
*/

if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly

define( 'EDUBIN_VERSION', '6.0.8' );
define( 'EDUBIN_ADDONS_PL_URL', plugins_url( '/', __FILE__ ) );
define( 'EDUBIN_ADDONS_PL_PATH', plugin_dir_path( __FILE__ ) );

// Required File
require_once EDUBIN_ADDONS_PL_PATH.'includes/helper-function.php';
require_once EDUBIN_ADDONS_PL_PATH.'includes/metabox.php';
require_once EDUBIN_ADDONS_PL_PATH.'includes/cmb2-fontawesome-icon-picker/cmb2-fontawesome-picker.php';
require_once EDUBIN_ADDONS_PL_PATH.'init.php';

// Shortcode initialization
function edubin_core_load() {
    Edubin_Shortcode_Social::init();
    Edubin_Shortcode_QuickInfo::init();
}
add_action( 'plugins_loaded', 'edubin_core_load' );

// Edubin Shortcode 
 require_once EDUBIN_ADDONS_PL_PATH . '/shortcodes/shortcode-social.php';
 require_once EDUBIN_ADDONS_PL_PATH . '/shortcodes/shortcode-quick-info.php';

// Edubin Widgets 
 require_once EDUBIN_ADDONS_PL_PATH . '/widgets/latest_post_widget.php';

 


