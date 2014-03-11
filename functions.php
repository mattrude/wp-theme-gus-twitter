<?php
/**
 * The main function file for the Gus Twitter Theme
 * @package Gus Twitter
 */
/**
 * Add Automatic Feed Links to theme for WordPress 3.0
 *
 * @since 0.1
 * @package Gus Twitter
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Add theme support for infinite scroll
 *
 * @uses add_theme_support
 * @action after_setup_theme
 * @return null
 */
function kirby_infinite_scroll_init() {
    add_theme_support( 'infinite-scroll', array(
        'container'      => 'content',
        'posts_per_page' => '25'
    ) );
}
add_action( 'after_setup_theme', 'kirby_infinite_scroll_init' );

?>
