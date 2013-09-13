<?php
/**
 * The footer template for the gus twitter theme
 * @package Gus Twitter
 */
/**
 * Starting the footer
 */

namespace TWITTER;

if ( ! is_home() ) { ?>
    <div class="navigation">
        <div class="floatleft"><?php next_post_link('%link','&laquo; Next Tweet') ?></div>
        <div class="floatright"><?php previous_post_link('%link','Previous Tweet &raquo;') ?></div>
        <div class="floatcenter"><a href="<?php bloginfo('url'); ?>">Home</a></div>
    </div>
<?php } ?>

</div> 
<div id="footer-container">
		<div id="footer-text">
            <p>
                <center>Copyright &copy; 1980 - <?php echo date("Y") ?> by <a href="http://mattrude.com/">Matt Rude</a>.</center>
            </p>
		</div>
	<?php wp_footer(); ?>
</div>

<!--Closeing tags-->
</div>
</body>
</html>
<?php
?>
