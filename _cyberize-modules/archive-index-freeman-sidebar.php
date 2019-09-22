<?php
/**
 *
 * MODULE: Archive Index Biz Mobile w Sidebar
 *
 */

get_header(); ?>

<style type="text/css">
	#general-blog-page-header {
		width: 100vw;
		height: 380px;
		background-color: rgba(189, 198, 18, .55);
		background-image: url('<?php echo get_field('blog_page_header_image', 'option')['url'] ?>');
		background-size: cover;
		background-position: top center;
		padding: 13rem 15px 0px;
	}
</style>

<section id="general-blog-page-header">
	<div class="container">
		<h1>Archive</h1>
	</div>
</section>

<section class="blog-index-block-freeman">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container">

				<div class="row m-5">


					<div class="col-sm-12 col-md-12 col-lg-12">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										the_archive_title( '<h4 class="archive-type mb-5">', '</h4>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'post-item-freeman' );

							endwhile;

							// the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div>

				</div> <!-- End Row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- end primary -->

</section>
