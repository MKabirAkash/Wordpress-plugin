<?php
/**
 * @package Akashbooking
 */
namespace Config\Base;

class Runscript{

    public function register(){
            add_action('wp_enqueue_scripts',array($this,'run_scripts'));
            add_action('admin_enqueue_scripts',array($this,'run_scripts'));
    }
    public function run_scripts(){
        wp_enqueue_style('mypluginstyle','/wp-content/plugins/Akashbooking/assets/bookingstyle.scss');
        wp_enqueue_script('mypluginjs','/wp-content/plugins/Akashbooking/assets/mybookingjs.js',array('jquery'));

  
      }
}
