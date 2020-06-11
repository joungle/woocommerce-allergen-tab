<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/*
Plugin Name: WooCommerce Allergen Tab
Description: Display additional tab for allergens in WooCommerce product details
Version:     1.0
Author:      Jan Lenartz
Author URI:  https://www.xlimity.de/services/
License:     GNU GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

define('ALLERGEN_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('ALLERGEN_PLUGIN_URL', plugin_dir_url(__FILE__));

include ALLERGEN_PLUGIN_PATH . 'includes/product-single-settings.php';
include ALLERGEN_PLUGIN_PATH . 'includes/product-tab.php';