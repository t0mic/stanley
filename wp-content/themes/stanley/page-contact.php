<?php
/*
    Template Name: Contact Page
*/
// Advanced Custom Fields vars
    $contact_page_title= get_field('contact_page_title');
    $contact_page_desc= get_field('contact_page_desc');
    $contact_page_button_text= get_field('contact_page_button_text');

    
get_header(); ?>

<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-md-6 col-md-offset-3 centered">
				<h3><?php echo $contact_page_title; ?></h3>
				<hr>
				<p><?php echo $contact_page_desc; ?></p>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-md-8 col-md-offset-2">
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; //end of the loop ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->






<?php get_footer(); ?>