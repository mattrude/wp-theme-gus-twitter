<?php 
/**
 * The main index file for the Gus Theme
 * @package Gus Twitter
 */

get_header(); ?>

<div id='content'>
<?php $screename = 'mdrude';
  while (have_posts()) : the_post();
    get_template_part( 'content', get_post_format() );
  endwhile; ?>
</div>

<?php get_footer(); ?>
