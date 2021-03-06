<?php
/**
 * The template for displaying all single posts.
 *
 * @package GenieTheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php genietheme_post_nav(); ?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	
</div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>