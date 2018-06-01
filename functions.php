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

/**
 * Remove custom post class
 */
add_action('init', 'talon_child_remove_custom_post_class');
function talon_child_remove_custom_post_class() {
  remove_filter( 'post_class', 'talon_post_classes' );
}
