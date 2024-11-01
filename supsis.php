<?php

/**
 * Supsis
 *
 * @package           Supsis
 * @author            Softcand Inc.
 * @copyright         2022 Softcand Inc.
 * @license           GPL2
 *
 * @wordpress-plugin
 * Plugin Name:       Supsis
 * Plugin URI:        https://supsis.com/plugins/wp
 * Description:       Supsis - The Powerful Live Supoort.
 * Version:           1.0.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Softcand Inc.
 * Author URI:        https://softcand.com
 * Text Domain:       supsis-live-support
 * License:           GPL2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Constants
 */
define("SUPSIS_PATH", plugin_dir_path(__FILE__));
define("SUPSIS_URL", plugin_dir_url(__FILE__));
define("SUPSIS", plugin_basename(__FILE__));

/**
 * Autoload import from composer.
 */
if (file_exists(SUPSIS_PATH . "vendor/autoload.php")) {
    require_once SUPSIS_PATH . "vendor/autoload.php";
}

/**
 * Supsis initialize
 */
function supsis_initialize()
{
    if (class_exists('Supsis\\Init')) {
        Supsis\Init::register();
    }
}

add_action("init", "supsis_initialize");
