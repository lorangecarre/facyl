<?php
/**
 * Cleanup
 *
 * Disable all unused WordPress native functions
 *
 * @package facyl
 */

namespace Air_Light;

/**
 * API
 * Since we don't use the api in this theme, the API is disabled
 */
require get_theme_file_path( '/inc/clean/api.php' );

/**
 * WP-EMBED
 * Other WordPress posts embeds are disable
 */
require get_theme_file_path( '/inc/clean/embed.php' );

/**
 * EMOJIS
 * Emojis are disabled
 */
require get_theme_file_path( '/inc/clean/emoji.php' );

/**
 * HEAD
 * A big cleanup has been made in the head output of pages
 */
require get_theme_file_path( '/inc/clean/head.php' );
