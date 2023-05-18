<?php
if( ! class_exists( 'iMenifest_Journal_Post' ) ) :
class iMenifest_Journal_Post{

     /**
      * @access  public
      * @Init Hooks in Constructor
      */
     public function __construct() {
          add_action('init', array(&$this, 'init_post_type'));
     }

     public function init_post_type() {
          $label = array(
               'name'                   => esc_html__('Journals', 'imenifest'),
               'all_items'              => esc_html__('Journals', 'imenifest'),
               'singular_name'          => esc_html__('Journal', 'imenifest'),
               'add_new'                => esc_html__('Add Journal', 'imenifest'),
               'add_new_item'           => esc_html__('Add New Journal', 'imenifest'),
               'edit'                   => esc_html__('Edit', 'imenifest'),
               'edit_item'              => esc_html__('Edit Journal', 'imenifest'),
               'new_item'               => esc_html__('New Journal', 'imenifest'),
               'view'                   => esc_html__('View Journal', 'imenifest'),
               'view_item'              => esc_html__('View Journal', 'imenifest'),
               'search_items'           => esc_html__('Search Journal', 'imenifest'),
               'not_found'              => esc_html__('No Journal Found', 'imenifest'),
               'not_found_in_trash'     => esc_html__('No Journal found in trash', 'imenifest'),
               'parent'                 => esc_html__('Parent Journals', 'imenifest'),
               'featured_image'         => esc_html__( 'Journal Image', 'imenifest' ),    //used in post.php
               'set_featured_image'     => esc_html__( 'Set Journal Image', 'imenifest' ),    //used in post.php
               'remove_featured_image'  => esc_html__( 'Remove Journal Image', 'imenifest' ), //used in post.php
               'use_featured_image'     => esc_html__( 'Use as Journal Image', 'imenifest' ), //used in post.php
               'insert_into_item'       => esc_html__( 'Insert into Journal Image', 'imenifest' ),  //used in post.php
               'uploaded_to_this_item'  => esc_html__( 'Uploaded to this Journal Image', 'imenifest' ),
          );
          $args = array(
               'labels'                 => $label,
               'description'            => esc_html__('This is where you can add Journal', 'imenifest'),
               'public'                 => true,
               'supports'                => array('title', 'editor', 'author', 'thumbnail'),
               'show_ui'                => true,
               'capability_type'        => 'post',
               'map_meta_cap'           => true,
               'publicly_queryable'     => true,
               'exclude_from_search'    => false,
               'hierarchical'           => false,
               'menu_position'          => 10,
               'rewrite'                => array('slug' => 'journal', 'with_front' => true),
               'query_var'              => false,
               'has_archive'            => false,
               'menu_icon'              => 'dashicons-media-document',
               // 'capabilities'           => array( 'create_posts' => false )
          );

          register_post_type('journal', $args);

     }

}
new iMenifest_Journal_Post();

endif;