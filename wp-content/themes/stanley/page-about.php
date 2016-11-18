<?php
/*
    Template Name: About Page
*/
    $about_textarea_title= get_field('about_textarea_title');
    $about_text_area= get_field('about_text_area');
    $about_skills_title= get_field('about_skills_title');
    $about_wordpress= get_field('about_wordpress');
    $about_photoshop= get_field('about_photoshop');
    $about_html= get_field('about_html');


    
get_header(); ?>

	<!-- about -->
    <?php get_template_part('template-parts/content', 'about'); ?>
	
	
	<!-- +++++ Information Section +++++ -->
	
	<div class="container pt">
		<div class="row mt centered">
		<?php $loop = new WP_Query(array('post_type'=>'course_feature', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
			<?php while($loop-> have_posts()) : $loop->the_post(); ?>
			<div class="resource-item">
				<span class="<?php the_field('course_feature_items'); ?>"></span>
				<p><?php the_title(); ?></p>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- /row -->
		
		<div class="row mt">
			<div class="col-md-6">
				<h4><?php echo $about_textarea_title; ?></h4>
				<p><?php echo $about_text_area; ?></p>
			</div><!-- /comd-md-6 -->
			
			<div class="col-md-6">
				<h4><?php echo $about_skills_title; ?></h4>
				Wordpress
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $about_wordpress; ?>%;">
						<span class="sr-only">60% Complete</span>
					</div>
				</div>

				Photoshop
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $about_photoshop; ?>%;">
						<span class="sr-only">80% Complete</span>
					</div>
				</div>
				
				HTML + CSS
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $about_html; ?>%;">
						<span class="sr-only">95% Complete</span>
					</div>
				</div>

			</div><!-- /col-md-6 -->
		</div><!-- /row -->
	</div><!-- /container -->















<?php get_footer(); ?>