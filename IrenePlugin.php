<?php


/**
 * Plugin Name: Irene in ALL CAPS
 * Version: 0.1
 * Description: The first plugin that changes 'Irene' to 'IRENE'.
 * Author: IRENE
 * License: GPL v3
 */

add_filter('the_content', 'changeIrenetoIRENE');

function changeIrenetoIRENE($content) {
    return $content = str_replace("Irene", "IRENE", $content);
};
