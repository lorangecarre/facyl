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


function customizer_footer($wp_customize)
{
      // on ajoute une nouvelle section
      $wp_customize->add_section('theme_footer', array(
        'title' => 'Reseaux Sociaux',
        'description' => "",
        'priority' => 20
      ));

	  $wp_customize->add_setting('show_facebook', array(
        'capability' => 'edit_theme_options',
      ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_facebook',
            array(
                'label'     => __("Lien Facebook", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_facebook',
                'type'      => 'text',
            )
        )
    );

	  $wp_customize->add_setting('show_instagram', array(
        'capability' => 'edit_theme_options',
      ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_instagram',
            array(
                'label'     => __("Lien Instagram", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_instagram',
                'type'      => 'text',
            )
        )
    );

    $wp_customize->add_setting('show_linkedin', array(
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_linkedin',
            array(
                'label'     => __("Lien Linkedin", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_linkedin',
                'type'      => 'text',
            )
        )
    );

    $wp_customize->add_setting('show_twitter', array(
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_twitter',
            array(
                'label'     => __("Lien Twitter", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_twitter',
                'type'      => 'text',
            )
        )
    );

    $wp_customize->add_setting('show_youtube', array(
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_youtube',
            array(
                'label'     => __("Lien Youtube", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_youtube',
                'type'      => 'text',
            )
        )
    );

    $wp_customize->add_setting('show_tiktok', array(
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_tiktok',
            array(
                'label'     => __("Lien Tiktok", 'dd_theme'),
                'section'   => 'theme_footer',
                'settings'  => 'show_tiktok',
                'type'      => 'text',
            )
        )
    );
}
