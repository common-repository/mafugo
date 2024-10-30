<?php
/*
Plugin Name: Mafugo
Plugin URI: https://app.mafugo.com
Description: Plugin für Mafugo.com. Hiermit können Sie ganz einfach eine Umfrage in ihre Wordpress-Seite einfügen 
Version: 1.0
Author: Adrian Knauff
Author URI: https://www.bullshit-generator.com
License: GPLv2
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/* Shortcode [mafugo width="" height="" survey=""] - Mafugo-Embed-Code hinzufügen */

function embed_mafugo($atts) {
    extract(shortcode_atts(array(
        "width" => '800',
        "height" => '600',
        "survey" => 'error'
        ), $atts));
    return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.mafugo.com/m/'.$survey.'"></iframe>';
}

add_shortcode("mafugo", "embed_mafugo");