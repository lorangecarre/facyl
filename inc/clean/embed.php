<?php

add_action( 'wp_footer', __NAMESPACE__ . '\clean_embed' );
function clean_embed () {
	wp_deregister_script( 'wp-embed' );
}

