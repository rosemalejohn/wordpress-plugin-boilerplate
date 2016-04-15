<?php

use RosemaleJohnScraper\Activator;
use RosemaleJohnScraper\Deactivator;
use RosemaleJohnScraper\Scraper;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           RosemaleJohnScraper
 *
 * @wordpress-plugin
 * Plugin Name:       Rosemale-John Scraper
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Clone post from a certain website and save to your website as a post.
 * Version:           1.0.0
 * Author:            Rosemale-John II C. Villacorta
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rosemalejohn-scraper
 * Domain Path:       /app/languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name()
{
    Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name()
{
    Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_plugin_name');

register_deactivation_hook(__FILE__, 'deactivate_plugin_name');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name()
{

    $plugin = new Scraper();
    $plugin->run();

}
run_plugin_name();
