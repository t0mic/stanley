<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stanley
 */

get_header(); ?>

	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );
					
				endwhile; // End of the loop.
				?>

			</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->

<?php
get_footer();
