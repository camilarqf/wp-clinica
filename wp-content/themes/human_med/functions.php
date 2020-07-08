<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//imagens responsivas
function my_custom_sizes() {
    add_image_size('large', 1360, 845, true);
    add_image_size('medium', 414, 328, true);
}
add_action( 'after_setup_theme', 'my_custom_sizes' );

//google maps -  acf pro

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBN-oqIOcyxZwPDdi57cFlvpVbsYF2Lk8c');
}

add_action('acf/init', 'my_acf_init');

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBN-oqIOcyxZwPDdi57cFlvpVbsYF2Lk8c';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Habilitar Menus
add_theme_support('menus');

//Registrar menus
function register_my_menu()
{
	register_nav_menu('menu-principal', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

function registra_scripts()
{
	//deregistra o jquery do wp
	wp_deregister_script( 'jquery' );

	// Registra o jQuery Novo (true p carregar no footer)
	wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), '2.1.1', true);

	// Registrar Main, para carrgar o scroll precisa carregar o jquery antes => array('jquery' )
	wp_register_script( 'scroll',get_template_directory_uri(). '/js/scroll.js', array('jquery' ),false, true );

	// Registrar materialize o false é para carregar no header
	wp_register_script( 'materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js', array('jquery'),false, true );

	// Carrega o Script
	wp_enqueue_script( 'materialize' );
	wp_enqueue_script( 'scroll' );

}
add_action('wp_enqueue_scripts', 'registra_scripts');

function registra_css(){
	wp_register_style( 'style', get_template_directory_uri(). '/style.css', array(), false, false );

	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'registra_css');

add_filter('widget_text', 'do_shortcode');
