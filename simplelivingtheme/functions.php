<?php

add_theme_support("post-thumbnails"); 
add_theme_support("menus");

add_image_size("custom", 900, 650);

function getResources() {
	wp_enqueue_style("style", get_stylesheet_uri());
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"> Continue reading.. </a>';
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );
add_action("wp_enqueue_scripts", "getResources");

?>