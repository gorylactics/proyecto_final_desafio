<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();



	// ACA SE PASAN LOS ESTILOS DEL CSS QUE DESARROLLE EN SUBLIME
	
	// PARA HACER LLAMADO A LAS FUENTES QUE USAMOS//
	wp_register_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css'), null, null, 'screen' );
	wp_register_style( 'style', get_theme_file_uri( '/assets/css/style.css'), null, null, 'screen' );
	wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Shadows+Into+Light,Abril+Fatface|Bad+Script|Poiret+One|Quicksand', null, null, null );
	// /PARA HACER LLAMADO A LAS FUENTES QUE USAMOS//

	// PARA HACER LLAMADO A LOS CSS CREADOS//
	
	
	/* Register Scripts */
	
	
	// /PARA HACER LLAMADO A LOS CSS CREADOS//
// llamado en orden para los estilos

	wp_enqueue_style('bootstrap');
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'fonts' );
	

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
