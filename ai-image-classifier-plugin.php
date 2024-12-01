<?php 
/**
 * Plugin Name: AI Image Classifier Plugin
 * Description: This task is for Learning of Plugin development.
 * Version: 1.10.3
 * @link https://github.com/syedashardev/ai-image-classifier/issues/3
 * @since X.X.X
 * @return (if there is)
 */

// Calling Action Hook to add menu
 add_action("admin_menu", "cp_add_admin_menu");

 // Add Menu
 function cp_add_admin_menu(){
    add_menu_page("AI Image Classifier", "Image Classifier", "manage_options", "ai-plugin", "cp_handle_admin_menu", "dashicons-cover-image", 23)
 }

 // Menu Handle callback
 function cp_handle_admin_menu(){
     echo "<h2>Aslam O Aliakum Pakistan</h2>"
 }

?>