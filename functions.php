
<?php


function portfolio_style(){


	wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'portfolio_style');







?>