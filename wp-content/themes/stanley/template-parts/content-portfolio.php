<?php
/**
 * Template part for displaying portfolio posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php stanley_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header --> 

	<!-- <div class="entry-content"> -->
		<!-- <!-- <?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stanley' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stanley' ),
				'after'  => '</div>',
			) );
		?> --> 

	<!-- </div>.entry-content -->
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
	
</article><!-- #post-## -->
