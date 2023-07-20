<?php
/**
 * @package Akashbooking
 */
namespace Config\Base;

 class Activateplugin{

    public static function activate(){
        flush_rewrite_rules();
    }
 }