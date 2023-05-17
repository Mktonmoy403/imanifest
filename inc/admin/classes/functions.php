<?php
/**
 * iManifest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/inc/admin/classes/functions/
 *
 * @package iManifest
 */
if( ! class_exists( 'iMenifest_Functions' ) ) :

     class iMenifest_Functions{

          public function __construct() {
               add_filter( 'show_admin_bar', [&$this, 'imenifest_hide_admin_bar'] );
               add_action( 'admin_init', [&$this, 'imenifest_restrict_admin_access_for_users'] );
               // add_action('template_redirect', [&$this, 'imenifest_restrict_page_access'] );
               add_action('template_redirect', [&$this, 'imenifest_check_user_access'] );
          }

          // hide adminbar if user not admin
          public function imenifest_hide_admin_bar( $show ) {
               if ( ! current_user_can('administrator') ) {
                    return false;
               }
               return $show;
          }

          public function imenifest_restrict_admin_access_for_users() {
               // Check if the current user is not an administrator
               if (!current_user_can('administrator') && is_admin()) {
                   wp_redirect(home_url());
                   exit;
               }
          }

          // public function imenifest_restrict_page_access() {
          //      if (!is_user_logged_in() && !is_front_page()) {
          //          wp_redirect(wp_login_url());
          //          exit;
          //      }
          // }
          public function imenifest_check_user_access() {
               global $post;
           
               if ( $post && $post->post_type === 'page' || $post->post_type === 'post' ) {
                   $user_access = get_post_meta($post->ID, '_imenifest_user_access', true);
           
                   if ($user_access === 'authenticated' && !is_user_logged_in()) {
                       wp_redirect(home_url());
                       exit;
                   }
               }
          }

     }
     new iMenifest_Functions();
endif;