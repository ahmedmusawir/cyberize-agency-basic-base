<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
	</div><!-- #content -->

	<footer id="footer-vizrek" class="site-footer">

		<figure class="text-center mb-5">
			<img class="img-fluid pl-4 pr-4" src="/wp-content/uploads/2019/09/LOGOWHITE.png" alt="">
		</figure>


		<div class="container widgets_wrapper">
		   <div class="row">
		      <div class="col-12 col-sm-12 col-md-6 col-lg-3">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</aside><!-- #secondary -->

		        
		      </div>
		      <div class="col-12 col-sm-12 col-md-6 col-lg-3">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-2" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</aside><!-- #secondary -->

		         
		      </div>
		      <div class="col-12 col-sm-12 col-md-6 col-lg-3">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-3" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</aside><!-- #secondary -->

		      </div>
		      <div class="col-12 col-sm-12 col-md-6 col-lg-3">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-4" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</aside><!-- #secondary -->

		      </div>
		      
		   </div> <!-- END ROW -->
		   
		</div> <!-- END WIDGET WRAPPER -->
		<section class="site-info container">

			<div class="copyright  d-flex align-items-center">
				<div class="text-center mx-auto">

					<?php
						printf( esc_html__( 'Copyright &copy; All Rights Reserved', 'moose-framework-2' ), 'CyberizeFramework' );
					?>
					<span class="sep"> | </span>
					<?php the_field('theme_footer_text', 'option') ?>

				</div>	
					
			</div>						
			
		</section>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<div style="color: white"><strong>Current template:</strong> 
					<?php  echo get_current_template( true ); ?>
				</div>
				
				<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->
						
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
