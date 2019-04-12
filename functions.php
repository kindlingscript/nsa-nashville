<?php 

function nsa_files() {
	wp_enqueue_style('nsa_main_style', get_stylesheet_uri(), NULL, microtime());
	wp_enqueue_style('bootstrap_4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'nsa_files');

 ?>