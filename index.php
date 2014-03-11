<?php 
/**
 * The main index file for the Gus Theme
 * @package Gus Twitter
 */

get_header(); ?>

<div id='content'>
    <?php $screename = 'mdrude';
    if (have_posts()) {
        while (have_posts()) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
    } else { ?>
        <div class="page">
            <h2 class="center"><center>Oops! - 404 Error</center></h2> 
            <p class="center"><center>No sense sticking around here for very long.</center></p>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>
