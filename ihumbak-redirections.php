<?php

/*
 * Plugin Name: iHumbak Redirections
 */

if ( ! defined( 'ABSPATH' ) )
  exit;

add_action('init', 'ihumbak_redirect');
function ihumbak_redirect() {
  $uri = (preg_split('/\?/', $_SERVER['REQUEST_URI']));
  print_r($uri);
  if ($uri[0] == '/') {

    wp_redirect('/booking/'.($uri[1] ? '?'.$uri[1] : null));
    exit;
  }
}