<?php 

function nsa_files() {
	wp_enqueue_style('nsa_main_style', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'nsa_files');

 ?>