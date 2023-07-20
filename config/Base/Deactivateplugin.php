<?php
/**
 * @package Akashbooking
 */
namespace Config\Base;
 class Deactivateplugin{

    public static function deactivate(){
        flush_rewrite_rules();
    }
 }