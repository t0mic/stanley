<?php
/*
    Template Name: Portfolio Page
*/
// Advanced Custom Fields vars
    $work_description= get_field('work_description');
    $work_author= get_field('work_author');
    $work_url= get_field('work_url');

get_header(); ?>

	<div class="container pt">
		<div class="col-md-12">
			
			

				<section id="main-content">
	        			<?php $loop = new WP_Query(array('post_type'=>'work_example', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
						<div class="row mt centered">
						<?php while($loop-> have_posts()) : $loop->the_post(); ?>
				            <?php
				                $work_image= get_field('work_image');
				    			$work_title= get_field('work_title');
				    		?>	
							<div class="resource">
								<a class="zoom green" href="<?php echo get_permalink($post->ID) ; ?>"><img class="img-responsive" src="<?php echo $work_image['url']; ?>" alt="<?php echo $work_image['alt']; ?>" /></a>
								<p><?php echo $work_title; ?></p>
							</div>
						<?php endwhile; wp_reset_query(); ?>
						</div><!-- /row -->
				</section> <!--/section -->
				
		</div><!-- #col -->
	</div><!-- #container -->

<?php
get_footer();
