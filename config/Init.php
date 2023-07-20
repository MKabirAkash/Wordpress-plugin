<?php
/**
 * @package Akashbooking
 */
namespace Config;
/**
 *
 */
 class Init{

    public static function services_list(){
        return [
           Pages\Adminpages :: class,
           Base\Runscript :: class,
           Base\Settings :: class,
           API\Popup:: class
        ];

    }


    public static function register_plugin(){
        foreach (self::services_list() as $class){
            $service=self::initiate($class);
            if(method_exists($service,'register')){
                $service ->register();
            }
        }
    }

    private static function initiate($class){
        $ini=new $class();
        return $ini;

    }
 }











 //class Akashbooking{

   /*function __construct(){
   
   }

   static public function register_plugin(){
      add_action('admin_enqueue_scripts',array('Akashbooking','run_scripts'));
      add_action('admin_menu',array('Akashbooking','add_admin_function'));

      $basename=plugin_basename(__FILE__);
      add_filter("plugin_action_links_$basename",array('Akashbooking','setting_link'));
      
   }


    public static function run_scripts(){
      wp_enqueue_style('mypluginstyle',plugins_url('assets/style.css',__FILE__));
      wp_enqueue_script('mypluginjs',plugins_url('assets/myjs.js',__FILE__));

    }



    static public function add_admin_function(){
      add_menu_page('Bookinglist','Showbooking','manage_options','Akashbooking',array('Akashbooking','admin_index'),'dashicons-images-alt2',110);
    }


    static public function admin_index(){
      require_once plugin_dir_path(__FILE__).'template/adminIndex.php';
    }

    static public function setting_link($links){
      $setting_links='<a href="options-general.php?page=Akashbooking">Settings</a>';
      array_push($links,$setting_links);
      return $links;

    }

    static function activated(){
      require_once dirname(__FILE__).''
    }
 }
 

 if(class_exists('Akashbooking')){
   $akash_booking=new Akashbooking();
   Akashbooking :: register_plugin();
 }




 //activate pluggin

 register_activation_hook(__FILE__,array('Activateplugin','activate'));

 //deactive plugin

 register_deactivation_hook(__FILE__,array($akash_booking,'deactivate'));

*/
 ?>