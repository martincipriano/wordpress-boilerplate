<?php

require_once( __DIR__ . '/includes/scss.php' );

/**
 * Register css and js to be enqueued specifically on template files or partials
 */
if( ! function_exists('boilerplate_register_scripts') ) {
  function boilerplate_register_scripts() {

    // css
    wp_register_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap' );

    wp_register_style( 'bootstrap', get_bloginfo('template_url') . '/vendors/bootstrap/css/bootstrap.css' );

    wp_register_style( 'slick', get_bloginfo('template_url') . '/vendors/slick/css/slick.css' );
    wp_register_style( 'slick-theme', get_bloginfo('template_url') . '/vendors/slick/css/slick-theme.css' );

    // js
    wp_register_script( 'popper', get_bloginfo('template_url') . '/vendors/popper/js/popper.js', ['jquery'], '1.16.0', true );
    wp_register_script( 'bootstrap', get_bloginfo('template_url') . '/vendors/bootstrap/js/bootstrap.js', [ 'jquery', 'popper' ], '4.4.1', true );

    wp_register_script( 'slick', get_bloginfo('template_url') . '/vendors/slick/js/slick.js', ['jquery'], '1.8.0', true );
    wp_register_script( 'slick-init', get_bloginfo('template_url') . '/assets/js/slick.js', [ 'jquery', 'slick' ], '1.0.0', true );

    wp_register_script( 'scrollmagic', get_bloginfo('template_url') . '/vendors/scrollmagic/js/scrollmagic.js', ['jquery'], '2.0.7', true );
    wp_register_script( 'addindicators', get_bloginfo('template_url') . '/vendors/scrollmagic/js/addindicators.js', [ 'jquery', 'scrollmagic' ], '2.0.7', true );
  }
  add_action( 'init', 'boilerplate_register_scripts' );
}

/**
 * Enqueue global css and js
 */
if( ! function_exists('boilerplate_scripts') ) {
  function boilerplate_scripts() {
    wp_enqueue_style('roboto');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('slick');
    wp_enqueue_style('slick-theme');

    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('slick');
    wp_enqueue_script('slick-init');

    wp_enqueue_script('scrollmagic');
    wp_enqueue_script('addindicators');
  }
  add_action( 'wp_enqueue_scripts', 'boilerplate_scripts' );
}