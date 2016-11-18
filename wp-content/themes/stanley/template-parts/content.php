<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanley
 */
	$author_id= get_the_author_meta( 'ID' ); 
	$blog_image= get_field('blog_image');

?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<p><div width="50px" height="50px"><?php get_avatar($author_id, 50); ?></div> <ba><?php the_author(); ?></ba></p>
				<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<p><bd><?php the_date(); ?></bd></p>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="wrapper">
				<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
				
			    <?php if(!empty($blog_image)){ ?>
			    	<div class="post-image">
						<img class="img-responsive" src="<?php echo $blog_image['url']; ?>" alt="<?php echo $blog_image['alt']; ?>"  /> <br>
			    	</div> <!-- post image -->
			    <?php } ?>
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
