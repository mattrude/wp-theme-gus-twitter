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

define("IMAGE_FILETYPE", "(bmp|gif|jpeg|jpg|png)", true);

function addlightboxrel_replace($string) {
    $pattern = '/<a(.*?)href="(.*?).(bmp|gif|jpeg|jpg|png)"(.*?)>/i';
    $replacement = '<a$1href="$2.$3" rel=\'lightbox\'$4>';
    return preg_replace($pattern, $replacement, $string);
}

add_filter('the_content', 'addlightboxrel_replace');

?>
