<?php
use Config\Base\Activateplugin;
use Config\Base\Deactivateplugin;

/**
 * @package Akashbooking
 */

 /*
 * Plugin Name:       Akashbooking
 * Plugin URI:        localhost/wordpress/wp-content/plugins/Akashbooking
 * Description:       A custom booking system
 * Version:           1.0.0
 * Requires at least: 5.2
 * Author:            Mahmud Kabir
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 */





defined('ABSPATH') or die("You can't access this plugin");



if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
   require_once dirname(__FILE__).'/vendor/autoload.php';
}


define ('PLUGIN_BASE',plugin_dir_path(__FILE__));
define ('BASENAME',plugin_basename(__FILE__));



function booking_activate(){
   Activateplugin::activate();
}
register_activation_hook(__FILE__,'booking_activate');


function booking_deactivate(){
   Deactivateplugin::deactivate();
}
register_deactivation_hook(__FILE__,'booking_deactivate');

if(class_exists('Config\\Init')){
   Config\Init :: register_plugin();
}