<?php
/**
 * Include custom features etc.
 *
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:07:17
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2021-12-10 11:48:15
 *
 * @package facyl
 */

namespace Air_Light;

// Theme setup
require get_theme_file_path( '/inc/includes/theme-setup.php' );

// Localized strings
require get_theme_file_path( '/inc/includes/localization.php' );

// Nav Walker
require get_theme_file_path( '/inc/includes/nav-walker.php' );

// Post type and taxonomy base classes
// We check this with if, because this stuff will not go to WP theme directory
if ( file_exists( get_theme_file_path( '/inc/includes/taxonomy.php' ) ) ) {
  require get_theme_file_path( '/inc/includes/taxonomy.php' );
}

if ( file_exists( get_theme_file_path( '/inc/includes/post-type.php' ) ) ) {
  require get_theme_file_path( '/inc/includes/post-type.php' );
}

// Custom functions
require get_theme_file_path( '/inc/functions/index.php' );
add_action( 'wp_ajax_filter_projects', 'filter_projects' );
add_action( 'wp_ajax_nopriv_filter_projects', 'filter_projects' );
add_action( 'wp_ajax_filter_projects_keyword', 'filter_projects_keyword' );
add_action( 'wp_ajax_nopriv_filter_projects_keyword', 'filter_projects_keyword' );
add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_action( 'customize_register', 'customizer_footer' );
// add_action( 'acf/field_group/admin_enqueue_scripts', 'my_acf_field_group_admin_enqueue_scripts' );
add_action( 'init', 'custom_wp_remove_global_css' );
remove_action( 'template_redirect', 'wpcf7_cleanup_upload_files', 20 );
add_action( 'template_redirect', 'custom_wpcf7_cleanup_upload_files', 20, 0 );
