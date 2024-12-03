<?php 
/**
 * Plugin Name: AI Image Classifier Plugin
 * Description: This task is for Learning of Plugin development.
 * @link https://github.com/syedashardev/ai-image-classifier/issues/3
 * @since 12.02.2024
 */



 // Add Menu
 function add_admin_menu(){
    add_menu_page("AI Image Classifier", "Image Classifier", "manage_options", "ai-plugin", "admin_menu-content", "dashicons-cover-image", 23)
 }
// Calling Action Hook to add menu
add_action("admin_menu", "add_admin_menu");

 // Menu Handle callback
 function admin_menu-content(){
     echo "<h2>Aslam-O-Aliakum Pakistan</h2>"
 }
?>