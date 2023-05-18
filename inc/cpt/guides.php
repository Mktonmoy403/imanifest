<?php
if( ! class_exists( 'iMenifest_Guides_Post' ) ) :
class iMenifest_Guides_Post{

     /**
      * @access  public
      * @Init Hooks in Constructor
      */
     public function __construct() {
          add_action('init', array(&$this, 'init_post_type'));
     }

     public function init_post_type() {
          $label = array(
               'name'                   => esc_html__('Guides', 'imenifest'),
               'all_items'              => esc_html__('Guides', 'imenifest'),
               'singular_name'          => esc_html__('Guide', 'imenifest'),
               'add_new'                => esc_html__('Add Guide', 'imenifest'),
               'add_new_item'           => esc_html__('Add New Guide', 'imenifest'),
               'edit'                   => esc_html__('Edit', 'imenifest'),
               'edit_item'              => esc_html__('Edit Guide', 'imenifest'),
               'new_item'               => esc_html__('New Guide', 'imenifest'),
               'view'                   => esc_html__('View Guide', 'imenifest'),
               'view_item'              => esc_html__('View Guide', 'imenifest'),
               'search_items'           => esc_html__('Search Guide', 'imenifest'),
               'not_found'              => esc_html__('No Guide Found', 'imenifest'),
               'not_found_in_trash'     => esc_html__('No Guide found in trash', 'imenifest'),
               'parent'                 => esc_html__('Parent Guides', 'imenifest'),
               'featured_image'         => esc_html__( 'Guide Image', 'imenifest' ),    //used in post.php
               'set_featured_image'     => esc_html__( 'Set Guide Image', 'imenifest' ),    //used in post.php
               'remove_featured_image'  => esc_html__( 'Remove Guide Image', 'imenifest' ), //used in post.php
               'use_featured_image'     => esc_html__( 'Use as Guide Image', 'imenifest' ), //used in post.php
               'insert_into_item'       => esc_html__( 'Insert into Guide Image', 'imenifest' ),  //used in post.php
               'uploaded_to_this_item'  => esc_html__( 'Uploaded to this Guide Image', 'imenifest' ),
          );
          $args = array(
               'labels'                 => $label,
               'description'            => esc_html__('This is where you can add Guide', 'imenifest'),
               'public'                 => true,
               'supports'                => array('title', 'editor', 'author', 'thumbnail'),
               'show_ui'                => true,
               'capability_type'        => 'post',
               'map_meta_cap'           => true,
               'publicly_queryable'     => true,
               'exclude_from_search'    => false,
               'hierarchical'           => false,
               'menu_position'          => 10,
               'rewrite'                => array('slug' => 'guides', 'with_front' => true),
               'query_var'              => false,
               'has_archive'            => false,
               'menu_icon'              => 'dashicons-format-aside',
               // 'capabilities'           => array( 'create_posts' => false )
          );

          register_post_type('guides', $args);

     }

}
new iMenifest_Guides_Post();

endif;