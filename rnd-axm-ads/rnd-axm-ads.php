<?php

/**
 * RND AxM Ads
 *
 * @package           RNDPlugins
 * @author            RND Innovations
 * @copyright         2022 rndvn
 * @license           GPL-2.0-or-later
 *
 * @rnd-plugin
 * Plugin Name:       RND AxM Ads
 * Plugin URI:        https://www.rndvn.com/
 * Description:       This plugin let you render AxM Ads on your web pages.
 * Version:           1.0.0
 * Requires at least: 1.0.0
 * Requires PHP:      8.0
 * Author:            RND Innovations
 * Author URI:        https://www.rndvn.com/
 * Text Domain:       rndvn
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// NOTE: You have to have an account in www.alexamaster.net to use this.
// You can find Publisher ID once you created an AxM Ad unit there.
// Just replace {{YOUR-PUBLISHER-ID}} below with your one.
define( "RND_AXM_PUBLISHER_ID", "{{YOUR-PUBLISHER-ID}}" );


function rnd_plugins_axm_ads_scripts($items) {


    $js_path    =  __DIR__ . '/script.js';

    $scripts    = get_file_contents_from_a_file( $js_path );

    $scripts    = str_replace("AxM-0-XXXXXX", RND_AXM_PUBLISHER_ID, $scripts);

    return $items.$scripts;
}
add_filter('page_script', 'rnd_plugins_axm_ads_scripts');   
