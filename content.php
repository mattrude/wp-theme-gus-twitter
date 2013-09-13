<?php 
/**
 * The main index file for the Gus Theme
 * @package Gus Twitter
 */
?>
	<div id="tweet_template-<?php echo $post->ID; ?>" class="post">
		<div id='tweet-<?php echo $post->ID; ?>' class='tweet_post' >
			<div class="twitter-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'twentyeleven_status_avatar', '64' ) ); ?></div>
			<?php the_content(); ?>
		</div>
		<div id='tweet_date-<?php echo $post->ID; ?>' class='byline tweet_date' ><?php
			if ( get_post_meta( $post->ID, 'aktt_twitter_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, 'aktt_twitter_id', true);
			} elseif ( get_post_meta( $post->ID, '_aktt_tweet_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, '_aktt_tweet_id', true);
			} elseif ( get_post_meta( $post->ID, 'ozh_ta_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, 'ozh_ta_id', true);
			} elseif ( function_exists(twitter_permalink) ) {
                $twitterid = twitter_permalink( false );
            } else {
				$twitterid ='';
			}

			?>Posted to <a href="https://twitter.com/mdrude/status/<?php echo $twitterid; ?>" rel="nofollow">Twitter</a> by <a href="http://twitter.com/mdrude" rel="nofollow">Matt Rude</a> on <?php
			$permlink = get_permalink( $post->ID );
			if ( is_home() ) { 
				echo "<a href='$permlink'>";
				the_time('F jS Y, g:i a T');
				echo "</a>";
			} else {
				the_time('F jS Y, g:i a T');
			}
			edit_post_link('Edit', ', '); ?>
		</div>
	</div>
