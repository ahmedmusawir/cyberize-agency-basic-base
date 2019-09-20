<?php 
/**
 *
 * MODULE: Archive Index Private Training
 *
 */
?>

<style type="text/css">
	#general-blog-page-header {
		width: 100vw;
		height: 300px;
		background-color: rgba(189, 198, 18, .55);
		background-image: url('<?php echo get_field('blog_page_header_image', 'option')['url'] ?>');
		background-size: cover;
		background-position: top center;
		padding: 11rem 15px 0px;
		margin-bottom: 30px;
	}
</style>


<!-- Page Header with image -->
<section id="general-blog-page-header">
	<div class="container-fluid">
		<!-- <h1><?php // the_field('blog_index_title', 'option') ?></h1> -->
		<h1>Portfolio</h1>
	</div>
</section>

<main class="archive-index-cyberize" class="">
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">



		<?php
		if ( have_posts() ) : ?>

			<header class="page-header mb-5 mt-5">
				<?php
					//the_archive_title( '<h1 class="page-title text-center">', '</h1>' );
					//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
			<div class="card-columns">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive-item-cyberize' );

			endwhile;

			?>
			</div>
			<div class="post-nav-holder col-12"><?php the_posts_navigation(); ?></div>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</main>