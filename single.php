<?php
/**
 * The template for displaying all single posts.
 *
 * @package powen
 */

get_header(); ?>

<div id="content" class="site-content">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php powen_breadcrumb(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
				
				<?php powen_the_post_navigation(); ?>


				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>

	</div><!-- #content -->
	
		<div class="clearfix"></div>
	
<?php get_footer(); ?>
