<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-item card'); ?>>

	<figure class="featured-image-box card-img-top">
			
		<?php cyberize_post_thumbnail(); ?>
			
	</figure>

</article>
