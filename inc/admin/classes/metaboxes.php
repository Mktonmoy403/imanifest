<?php

if( ! class_exists('iMenifest_theme_metaboxes') ) :

     class iMenifest_theme_metaboxes{

          public function __construct() {
               add_action('add_meta_boxes', [ &$this, 'imenifest_user_access_metabox' ] );
               add_action('save_post', [ &$this, 'imenifest_save_user_access_metabox' ] );
          }

          // Add the metabox to the page editing screen
          function imenifest_user_access_metabox() {
               add_meta_box(
                    'imenifest_user_access_metabox_id', // Metabox ID
                    'User Accessibility', // Metabox title
                    [&$this, 'imenifest_render_user_access_metabox'], // Metabox callback function
                    array( 'post', 'page' ), // Post type(s)
                    'side', // Metabox position (e.g., 'side', 'normal', 'advanced')
                    'high' // Metabox priority (e.g., 'default', 'high', 'low')
               );
          }
          
          
          // Render the metabox content
          public function imenifest_render_user_access_metabox( $post ) {
               $user_access = get_post_meta($post->ID, '_imenifest_user_access', true);
          
               wp_nonce_field('imenifest_user_access_nonce_field', 'imenifest_user_access_metabox_nonce');
          
               ?>
               <label for="imenifest_user_access">
                    User Accessibility:
                    <select name="imenifest_user_access" id="imenifest_user_access" class="">
                         <option value="all" <?php selected($user_access, 'all'); ?>>Visitors</option>
                         <option value="authenticated" <?php selected($user_access, 'authenticated'); ?>>Authenticated Users Only</option>
                    </select>
               </label>
               <?php
          }
          
          // Save the metabox data
          public function imenifest_save_user_access_metabox( $post_id ) {

               if (!isset($_POST['imenifest_user_access_metabox_nonce']) || !wp_verify_nonce($_POST['imenifest_user_access_metabox_nonce'], 'imenifest_user_access_nonce_field')) {
                    return;
               }
          
               if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                    return;
               }
          
               if (!current_user_can('edit_page', $post_id)) {
                    return;
               }
          
               if (isset($_POST['imenifest_user_access'])) {
                    update_post_meta($post_id, '_imenifest_user_access', sanitize_text_field($_POST['imenifest_user_access']));
               }
          }
 
     }

     new iMenifest_theme_metaboxes();

endif;