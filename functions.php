<?php
/**
 * Gather all bits and pieces together.
 * If you end up having multiple post types, taxonomies,
 * hooks and functions - please split those to their
 * own files under /inc and just require here.
 *
 * @Date: 2019-10-15 12:30:02
 * @Last Modified by: Alexandre Sauvaget
 * @Last Modified time: 2022-10-06 13:53:37
 *
 * @package facyl
 */

namespace Air_Light;

/**
 * The current version of the theme.
 */
define( 'AIR_LIGHT_VERSION', '9.1.7' );

// We need to have some defaults as comments or empties so let's allow this:
// phpcs:disable Squiz.Commenting.InlineComment.SpacingBefore, WordPress.Arrays.ArrayDeclarationSpacing.SpaceInEmptyArray

/**
 * Theme settings
 */
add_action( 'after_setup_theme', function() {
  $theme_settings = [
    /**
     * Theme textdomain
     */
    'textdomain' => 'facyl',

    /**
     * Image and content sizes
     */
    'image_sizes' => [
      'small'   => 300,
      'medium'  => 700,
      'large'   => 1200,
    ],
    'content_width' => 800,

    /**
     * Logo and featured image
     */
    'default_featured_image'  => null,
    'logo'                    => '/svg/logo.svg',
    'logo_linkedin'           => '/svg/linkedin.svg',
    'logo_insta'              => '/svg/insta.svg',
    'chevron_right'           => '/svg/chevron-right.svg',
    'chevron_up'              => '/svg/chevron-up.svg',
    'accessibilite'           => '/svg/accessibilite.svg',

    /**
     * Custom setting group settings when using Air setting groups plugin.
     * On multilingual sites using Polylang, translations are handled automatically.
     */
    'custom_settings' => [
      // 'your-custom-setting' => [
      //   'id' => Your custom setting post id,
      //   'title' => 'Your custom setting',
      //   'block-editor' => true,
      //  ],
    ],

    'social_media_accounts'  => [
      // 'twitter' => [
      //   'title' => 'Twitter',
      //   'url'   => 'https://twitter.com/digitoimistodude',
      // ],
    ],

    /**
     * All links are checked with JS, if those direct to external site and if,
     * indicator of that is included. Exclude domains from that check in this array.
     */
    'external_link_domains_exclude' => [
      'localhost:3000',
      // 'airdev.test',
      // 'airwptheme.com',
      'localhost',
    ],

    /**
     * Menu locations
     */
    'menu_locations' => [
      'primary' => __( 'Primary Menu', 'facyl' ),
      'footer' => __( 'Footer Menu', 'facyl' ),
      'confidentiality' => __( 'Confidentialité Menu', 'facyl' ),
    ],

    /**
     * Taxonomies
     *
     * See the instructions:
     * https://github.com/digitoimistodude/facyl#custom-taxonomies
     */
    'taxonomies' => [
      // 'your-taxonomy' => [
      //   'name' => 'Your_Taxonomy',
      //   'post_types' => [ 'post', 'page' ],
      // ],
    ],

    /**
     * Post types
     *
     * See the instructions:
     * https://github.com/digitoimistodude/facyl#custom-post-types
     */
    'post_types' => [
      // 'your-post-type' => 'Your_Post_Type',
    ],

    /**
     * Gutenberg -related settings
     * @link https://developer.wordpress.org/resource/dashicons/#block-default
     */
    // Register custom ACF Blocks
    'acf_blocks' => [
      [
        // Bloc header
        'name'           => 'accueil-header',
        'title'          => 'Bloc Accueil Header',
        'description'     => 'Présentation principal',
        'post_types'        => array( 'post', 'page' ),
        'prevent_cache'  => false,
        'icon'  => 'heading',
        'enqueue_style'   => get_template_directory_uri() . '/css/prod/global.css',
      ],
      [
        // Bloc eco-conception
        'name'            => 'eco-conception',
        'title'           => 'Bloc Eco Conception',
        'description'     => "Présentation de la démarche d'éco-conception",
        'render_template' => '/template-parts/blocks/eco-conception.php',
        'category'        => 'formatting',
        'icon'            => 'palmtree',
        'keywords'        => array( 'éco-conception', 'accueil' ),
        'post_types'      => array( 'post', 'page' ),
      ],
      [
        // Bloc chiffres
        'name'            => 'bloc-chiffres',
        'title'           => 'Bloc Chiffres',
        'description'     => 'Présentation de chiffres clés',
        'render_template' => '/template-parts/blocks/bloc-chiffres.php',
        'category'        => 'formatting',
        'example'         => 'true',
        'keywords'        => array( 'chiffres', 'accueil' ),
        'post_types'      => array( 'post', 'page' ),
        'icon'            => 'editor-ol',
            ],
      [
         'name'            => 'image-texte',
         'title'           => 'Bloc texte et image ',
         'render_template' => '/template-parts/blocks/image-texte.php',
         'category'        => 'formatting',
                ],
         [
          //bloc les etape
          'name'            => 'etapes',
          'title'           => 'Les étapes de conception',
          'render_template' => '/template-parts/blocks/etape.php',
                ],
        [
          //bloc les etapes et texte
          'name'            => 'etapes-texte',
          'title'           => 'Les étapes de conception et texte',
          'render_template' => '/template-parts/blocks/etape-texte.php',
                ],
        [
          //bloc les etape
          'name'            => 'carrousel',
          'title'           => 'Carrousel',
          'render_template' => '/template-parts/blocks/carrousel.php',
          ],

        [
          //bloc les etape
          'name'            => 'temoignage',
          'title'           => 'Témoignage',
          'render_template' => '/template-parts/blocks/temoignage.php',
        ],

          [
          'name'            => 'dernieres-realisations',
          'title'           => 'Bloc dernières réalisations',
          'render_template' => '/template-parts/blocks/dernieres-realisations.php',
          'category'        => 'formatting',
          ],

      // [
      //   'name'           => 'block-file-slug',
      //   'title'          => 'Block Visible Name',
      //   // You can safely remove lines below if you find no use for them
      //   'prevent_cache'  => false, // Defaults to false,
      //   // Icon defaults to svg file inside svg/block-icons named after the block name,
      //   // eg. svg/block-icons/block-file-slug.svg
      //   //
      //   // Icon setting defines the dashicon equivalent: https://developer.wordpress.org/resource/dashicons/#block-default
      //   // 'icon'  => 'block-default',
      // ],
      [
         'keywords'        => array( 'images', 'accueil' ),
         'post_types'      => array( 'post', 'page' ),
         'icon'            => 'image',
                ],
       [
        // Bloc tarifs
        'name'            => 'bloc-tarifs',
        'title'           => 'Bloc Tarifs',
        'description'     => 'Présentation des tarifs des offres',
        'render_template' => '/template-parts/blocks/bloc-tarifs.php',
        'category'        => 'formatting',
        'example'         => 'true',
        'keywords'        => array( 'tarifs', 'accueil' ),
        'post_types'      => array( 'post', 'page' ),
        'icon'            => 'money',
       ],
    ],

    // Custom ACF block default settings
    'acf_block_defaults' => [
      'category'          => 'facyl',
      'mode'              => 'auto',
      'align'             => 'full',
      'post_types'        => [
        'page',
      ],
      'supports'  => [
        'align'           => false,
        'anchor'          => true,
        'customClassName' => false,
      ],
      'render_callback'   => __NAMESPACE__ . '\render_acf_block',
    ],

    // Restrict to only selected blocks
    // Set the value to 'all' to allow all blocks everywhere
   'allowed_blocks' => [
      'default' => [
        'core/archives',
        'core/audio',
        'core/buttons',
        'core/categories',
        'core/code',
        'core/column',
        'core/columns',
        'core/coverImage',
        'core/embed',
        'core/file',
        'core/freeform',
        'core/gallery',
        'core/heading',
        'core/html',
        'core/image',
        'core/latestComments',
        'core/latestPosts',
        'core/list',
        'core/more',
        'core/nextpage',
        'core/paragraph',
        'core/preformatted',
        'core/pullquote',
        'core/quote',
        'core/block',
        'core/separator',
        'core/shortcode',
        'core/spacer',
        'core/subhead',
        'core/table',
        'core/textColumns',
        'core/verse',
        'core/video',
      ],
      'post' => [
        'core/archives',
        'core/audio',
        'core/buttons',
        'core/categories',
        'core/code',
        'core/column',
        'core/columns',
        'core/coverImage',
        'core/embed',
        'core/file',
        'core/freeform',
        'core/gallery',
        'core/heading',
        'core/html',
        'core/image',
        'core/latestComments',
        'core/latestPosts',
        'core/list',
        'core/more',
        'core/nextpage',
        'core/paragraph',
        'core/preformatted',
        'core/pullquote',
        'core/quote',
        'core/block',
        'core/separator',
        'core/shortcode',
        'core/spacer',
        'core/subhead',
        'core/table',
        'core/textColumns',
        'core/verse',
        'core/video',
      ],
    ],

    // If you want to use classic editor somewhere, define it here
    'use_classic_editor' => [],

    // Add your own settings and use them wherever you need, for example THEME_SETTINGS['my_custom_setting']
    'my_custom_setting' => true,
  ];

  $theme_settings = apply_filters( 'air_light_theme_settings', $theme_settings );

  define( 'THEME_SETTINGS', $theme_settings );
} ); // end action after_setup_theme



/**
 * Required files
 */
require get_theme_file_path( '/inc/hooks.php' );
require get_theme_file_path( '/inc/includes.php' );
require get_theme_file_path( '/inc/template-tags.php' );
require get_theme_file_path( '/inc/clean.php' );

// Run theme setup
add_action( 'init', __NAMESPACE__ . '\theme_setup' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\build_theme_support' );
