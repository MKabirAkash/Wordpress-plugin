<?php
/**
 * @package Akashbooking
 */
namespace Config\API;

class Popup{

    public function register(){
        add_action('wp_head',array($this,'gotopopup'));
    
    }

    public function gotopopup(){
        $dir= PLUGIN_BASE.'/template/popupportal.php';
        
        load_template($dir,true);
    }



}