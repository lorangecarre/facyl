<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:06:45
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2021-05-04 11:13:10
 *
 * @package facyl
 **/

namespace Air_Light;

/**
 * Registers the Your Post Type post type.
 */
class Your_Post_Type extends Post_Type {

  public function register() {

    // Modify all the i18ized strings here.
    $generated_labels = [
      'menu_name'          => __( 'Your Post Type', 'facyl' ),
      'name'               => _x( 'Your Post Types', 'post type general name', 'facyl' ),
      'singular_name'      => _x( 'Your Post Type', 'post type singular name', 'facyl' ),
      'name_admin_bar'     => _x( 'Your Post Type', 'add new on admin bar', 'facyl' ),
      'add_new'            => _x( 'Add New', 'thing', 'facyl' ),
      'add_new_item'       => __( 'Add New Your Post Type', 'facyl' ),
      'new_item'           => __( 'New Your Post Type', 'facyl' ),
      'edit_item'          => __( 'Edit Your Post Type', 'facyl' ),
      'view_item'          => __( 'View Your Post Type', 'facyl' ),
      'all_items'          => __( 'All Your Post Types', 'facyl' ),
      'search_items'       => __( 'Search Your Post Types', 'facyl' ),
      'parent_item_colon'  => __( 'Parent Your Post Types:', 'facyl' ),
      'not_found'          => __( 'No your post types found.', 'facyl' ),
      'not_found_in_trash' => __( 'No your post types found in Trash.', 'facyl' ),
    ];

    // Definition of the post type arguments. For full list see:
    // http://codex.wordpress.org/Function_Reference/register_post_type
    $args = [
      'labels'              => $generated_labels,
      'description'         => '',
      'menu_icon'           => null,
      'public'              => false,
      'has_archive'         => false,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest'        => false,
      'rewrite'             => [
        'with_front'  => false,
        'slug'        => 'your-post-type',
      ],
      'supports'            => [ 'title', 'editor', 'thumbnail', 'revisions' ],
      'taxonomies'          => [],
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
