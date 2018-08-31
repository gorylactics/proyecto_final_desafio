<?php 

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );


	/* SCRIPTS USADOS EN LA WEB */

	wp_register_script( 'jquery', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), '3.3.1', true );
	wp_register_script( 'index', get_theme_file_uri('/assets/js/index.js'), array('jquery'), '2.1.0', true );
	wp_register_script( 'inicio', get_theme_file_uri('/assets/js/inicio.js'), array('jquery'), '2.1.0', true );
	wp_register_script( 'tendencias', get_theme_file_uri('/assets/js/tendencias.js'), array('jquery'), '2.1.0', true );
	wp_register_script( 'sobremi', get_theme_file_uri('/assets/js/sobremi.js'), array('jquery'), '2.1.0', true );
	wp_register_script( 'book', get_theme_file_uri('/assets/js/book.js'), array('jquery'), '2.1.0', true );
	
	
	/* Enqueue Scripts */
	

	
	wp_enqueue_script( 'index' );
	wp_enqueue_script( 'inicio' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'sobremi' );
	wp_enqueue_script( 'tendencias' );
	wp_enqueue_script( 'book' ); 

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
