<?php 

	function nsa_files() {
		wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
		wp_enqueue_style('bootstrap_4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
		wp_enqueue_style('lato_font', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,900');
		wp_enqueue_style('nsa_main_style', get_stylesheet_uri(), NULL, microtime());
	}

	function nsa_post_thumbs() {
	  add_theme_support('post-thumbnails');
	  // add_image_size( 'featured-large', 500, 330, true ); // width, height, crop
	}

	add_action('wp_enqueue_scripts', 'nsa_files');
	add_action('after_setup_theme', 'nsa_post_thumbs');
	add_image_size( 'index-thumb', 300, 200 );
	//remove_filter('the_excerpt', 'wpautop');

?>