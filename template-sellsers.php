<?php
/**
 * Template Name:Sellers
 *
 * @package GenieTheme
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="p_title sell_title"><h1>Sell Products Online On Lulu E-Store</div>

				<?php the_content();?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
</div><!-- container -->
</div><!-- container-fluid -->

<?php get_footer(); ?>
