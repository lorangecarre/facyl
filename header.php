<?php
/**
 * Template for header
 *
 * <head> section and everything up until <div id="content">
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:17:32
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2022-09-30 16:48:33
 *
 * @package facyl
 */

namespace Air_Light;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.cdnfonts.com">
  <?php wp_enqueue_script( 'tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js' ) ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'no-js' ); ?>>


  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <div class="nav-container">
      <header class="site-header">
        <?php get_template_part( 'template-parts/header/branding' ); ?>
        <?php get_template_part( 'template-parts/header/navigation' ); ?>

      </header>
    </div><!-- .nav-container -->

    <div class="site-content">
