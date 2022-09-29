<?php

// Disable emoji
function disable_emoji()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', __NAMESPACE__ . '\disable_emoji_TinyMCE');
    add_filter('wp_resource_hints', __NAMESPACE__ . '\disable_emoji_remove_dns_prefetch', 10, 2);
}
add_action('init', __NAMESPACE__ . '\disable_emoji');

// Remove TinyMCE emoji plugin
function disable_emoji_TinyMCE($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

// Remove emoji CDN hostname from DNS pre-fetching hints
function disable_emoji_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}
