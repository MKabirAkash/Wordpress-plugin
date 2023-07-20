<?php
/**
 * @package Akashbooking
 */
namespace Config\Pages;
 


 class Adminpages{

 
   
    public function __consturct()
   {
  
   }

   

    public function register(){
      add_action('admin_menu',array($this,'add_admin_function'));
      add_action('admin_menu',array($this,'add_admin_subpage'));
    

    }
    
     //add custom admin menu using plugin
    public function add_admin_function(){
      add_menu_page('Bookinglist','Showbooking','manage_options','Akashbooking',array($this,'admin_index'),'dashicons-images-alt2',110);
     
    }

    //code to add subpages on admin panel
    public function add_admin_subpage(){
      add_submenu_page('Akashbooking','Edit','Edit','manage_options','menu_slug',array($this,'set_admin_booking_page'));

    }

    //add custom admin custom field using plugin



    public static function admin_index(){
      require_once PLUGIN_BASE.'template/adminIndex.php';
    }
    public static function set_admin_booking_page(  ) 
    {
      require_once PLUGIN_BASE.'template/admininterface.php';
      

    }
  }
   
 