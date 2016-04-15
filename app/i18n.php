<?php

namespace RosemaleJohnScraper;

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    RosemaleJohnScraper
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    RosemaleJohnScraper
 * @author     Rosemale-John II C. Villacorta <rosemalejohn@gmail.com>
 */
class i18n
{

    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'rosemalejohn-scraper',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/app/languages/'
        );

    }

}
