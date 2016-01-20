<?php
/**
 * Template Name:Cart
 * @package GenieTheme
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="p_title"><h1><?php the_title(); ?></div>

				<?php the_content();?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div><!-- container -->
</div><!-- container-fluid -->
<?php get_footer(); ?>
