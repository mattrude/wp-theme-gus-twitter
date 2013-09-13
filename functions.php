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
 * Your changeable header business starts here
 *
 * @since 0.1
 * @package Gus Twitter
 */
$custom_header_support = array(
    'default-image' => '%s/images/header-cabin.jpg',
    'default-text-color' => '000',
    'header-text' => false,
    'width' => 700,
    'height' => 143,
);
add_theme_support( 'custom-header', $custom_header_support );

define("IMAGE_FILETYPE", "(bmp|gif|jpeg|jpg|png)", true);

/**
 * Add rel='lightbox' to all images
 *
 * This function will add rel='lightbox' to all images links in the
 * theme. This will allow the lightbox javascript to display the full size 
 * imags on the site.
 *
 * @param string $string The current link html from WordPress
 * @since 0.1
 * @package Gus Twitter
 */
function addlightboxrel_replace($string) {
    $pattern = '/<a(.*?)href="(.*?).(bmp|gif|jpeg|jpg|png)"(.*?)>/i';
    $replacement = '<a$1href="$2.$3" rel=\'lightbox\'$4>';
    return preg_replace($pattern, $replacement, $string);
}

add_filter('the_content', 'addlightboxrel_replace');

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
