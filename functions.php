<?php

function custom_theme_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// Set custom failed login error message
function no_wordpress_errors() {
	return 'oops! no go.';
}

add_filter( 'login_errors', 'no_wordpress_errors' );

// Disable search function for the site
function fb_filter_query( $query, $error = true ) {
 
    if ( is_search() ) {
        $query->is_search = false;
        $query->query_vars['s'] = false;
        $query->query['s'] = false;
 
        // to error
        if ( $error == true )
            $query->is_404 = true;
    }
}
 
add_action( 'parse_query', 'fb_filter_query' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );

// Add menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
