<?php
/**
 * Template part for displaying whole post content in single_work_examples.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanley
 */
	$work_image= get_field('work_image');
	$work_title= get_field('work_title');
	$work_desc= get_field('work_desc');
	$work_singlepage_image1= get_field('work_singlepage_image1');
	$work_singlepage_image2= get_field('work_singlepage_image2');
	$work_singlepage_image3= get_field('work_singlepage_image3');
	$clients_url= get_field('clients_url');
	$clients_name= get_field('clients_name');
	$project_date= get_field('project_date');


?>

		<!-- +++++ Projects Section +++++ -->
		<div class="row mt">
			<div class="centered">
				<h3><?php echo $work_title; ?></h3>
				<hr>
				<p><?php echo $work_desc; ?></p>
			</div>
		</div>
		<div class="row mt centered">	
			<div>
				<p><img class="img-responsive" src="<?php echo $work_singlepage_image1['url']; ?>" alt="<?php echo $work_singlepage_image1['alt']; ?>"></p>
				<p><img class="img-responsive" src="<?php echo $work_singlepage_image2['url']; ?>" alt="<?php echo $work_singlepage_image2['alt']; ?>"></p>
				<p><img class="img-responsive" src="<?php echo $work_singlepage_image3['url']; ?>" alt="<?php echo $work_singlepage_image3['alt']; ?>"></p>
				<p><bt>Client: <a href="<?php echo $clients_url; ?>"><?php echo $clients_name; ?></a></bt> - <bt>Type: <a href="#"><?php the_category( ', ' ); ?></a></bt> - <bt>Date: <a href="#"><?php echo $project_date; ?></a></bt></p>
			</div>
		</div><!-- /row -->
	
