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
