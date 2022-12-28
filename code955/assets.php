<?php
function add_normalize_CSS() {
	wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
 }
 add_action('wp_enqueue_scripts', 'add_normalize_CSS');



function addstyle1() {
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css');
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'wp_enqueue_scripts', 'addstyle1' );

  function addscript1() {
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.bundle.js','', '',true );
   
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'wp_enqueue_scripts', 'addscript1' );
  function add_Main_Nav() {
    register_nav_menus(array(
        'primary' => 'header',
        'secondry' => 'footer',
    ));
  }
  add_action( 'after_setup_theme', 'add_Main_Nav' );
  function code95_theme_support(){
    add_theme_support('tite-tag');
  }

  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );
  $args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'    => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/images/hero_1.png',
  );
  
  add_theme_support( 'custom-header', $args );
?>