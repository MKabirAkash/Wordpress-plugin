<?php
/**
 * @package Akashbooking
 */
namespace Config\Base;

 class Settings{

    public function register(){

        add_filter("plugin_action_links_".BASENAME,array($this,'setting_link'));
    }
    static public function setting_link($links){
        $setting_links='<a href="options-general.php?page=Akashbooking">Settings</a>';
        array_push($links,$setting_links);
        return $links;
  
      }
 }