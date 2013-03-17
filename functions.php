<?php
 
/********************************************************************************
 * Add Automatic Feed Links to theme for WordPress 3.0
 */
add_theme_support( 'automatic-feed-links' );

/********************************************************************************
 * Your changeable header business starts here
 */

$custom_header_support = array(
    'default-image' => '%s/images/header-cabin.jpg',
    'default-text-color' => '000',
    'header-text' => false,
    'width' => 700,
    'height' => 143,
);
add_theme_support( 'custom-header', $custom_header_support );

?>
