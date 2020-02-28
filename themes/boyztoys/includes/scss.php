<?php

define('WP_SCSS_ALWAYS_RECOMPILE', true);

if( ! function_exists('scss_variables') ) {
  function scss_variables(){
    $variables = array(
      'black'   => '#000000',
      'danger'  => '#BF0426',
      'dark'    => '#333333',
      'light'   => '#F0F0F0',
      'primary' => '#0367A6',
      'success' => '#067302',
      'warning' => '#F2CB05',
      'white'   => '#FFFFFF'
    );
    return $variables;
  }
  add_filter( 'wp_scss_variables', 'scss_variables' );
}
