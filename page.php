<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GenieTheme
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="p_title"><h1><?php the_title(); ?></div>

				<?php the_content();?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
</div><!-- container -->
</div><!-- container-fluid -->

<?php get_footer(); ?>
