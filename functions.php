<?php

/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'talon_child_enqueue' );
function talon_child_enqueue() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}
