<?php
/**
 * Silence is golden.
 *
 * Nothing to see here.
 *
 * @Author:		Roni Laukkarinen
 * @Date:   		2022-01-03 14:27:00
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-01-03 15:35:25
 *
 * @package facyl
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

 // Silence is golden.
function filter_projects() {
	$catSlug   = $_POST['category'];
	$ajaxposts = new WP_Query( [
		'post_type'      => 'post',
		'posts_per_page' => - 1,
		'category_name'  => $catSlug,
		'order_by'       => 'menu_order',
		'order'          => 'desc',
	] );
	$response  = '';

	if ( $ajaxposts->have_posts() ) {
		while ( $ajaxposts->have_posts() ) : $ajaxposts->the_post();
			$response .= get_template_part( 'template-parts/component/realisations' );
		endwhile;
	} else {
		$response = 'empty';
	}

	echo $response;
	exit;
}

function filter_projects_keyword() {
	$keyword   = $_POST['keyword'];
	$ajaxposts = new WP_Query( [
		'post_type'      => 'post',
		'posts_per_page' => - 1,
		's'  => $keyword,
		'order_by'       => 'menu_order',
		'order'          => 'desc',
	] );
	$response  = '';

	if ( $ajaxposts->have_posts() ) {
		while ( $ajaxposts->have_posts() ) : $ajaxposts->the_post();
			$response .= get_template_part( 'template-parts/component/realisations' );
		endwhile;
	} else {
		$response = 'empty';
	}

	echo $response;
	exit;
}
