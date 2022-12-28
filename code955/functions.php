<?php require_once('assets.php');
 function img_features() {
    add_theme_support('post-thumbnails' );
   
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'after_setup_theme', 'img_features' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-header' );
 