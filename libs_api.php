<?php
/*
Plugin Name: Libs API
Description: Automatically adds javascript and css libraries.
Plugin URI: danilocgsilva.me
Author: Danilo Silva (danilocgsilva)
Author URI: danilocgsilva
License: GPLv2
*/

include_once(plugin_dir_path( __FILE__ ) . 'includes.php');

add_shortcode('libs_api_dev', 'libs_api_dev');
function libs_api_dev() {
    $libs_folders = libs_api_get_libs();
    
    $info = "";
    foreach($libs_folders as $folder) {
        $info .= $folder . "<br />";
    }
    return $info;
}