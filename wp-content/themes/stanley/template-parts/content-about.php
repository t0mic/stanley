<?php 
// Advanced Custom Fields vars
    $about_title= get_field('about_title');
    $about_desc= get_field('about_desc');
 ?>
<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 centered">
					<?php if(has_post_thumbnail()) : the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="/stanley/wp-content/themes/stanley/assets/img/user.png" alt="Stanley">
					<?php endif; ?>
					<h1><?php echo $about_title; ?></h1>
					<p><?php echo $about_desc; ?></p>
				
				</div><!-- /col-md-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->