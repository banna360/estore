<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GenieTheme
 */
?>

	</div><!-- #content -->
<div class="container-fluid footer_bg">
	<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

         
            <div class="f_one col-md-4">
               
            	<?php dynamic_sidebar( 'f_left' ); ?>
            </div>


            <div class="f_one col-md-4">
            	
            	<?php dynamic_sidebar( 'f_middle' ); ?>
            </div>



            <div class="f_one col-md-4">
            	
            	<?php dynamic_sidebar( 'f_right' ); ?>
            </div>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #footer container -->
</div><!-- #footer container fluid -->

<div class="clearfix"></div>

<div class="container-fluid copy_outer">

<div class="container">


<div class="copy">

         <div class="c_one col-md-12">All Rights Reserved © 2015 - <?php bloginfo( 'name' ); ?> |  <a href="http://coregenie.com" target="_blank">Ecomerce Website Developed By Coregenie Technologies</a></div>
         

		</div>


</div><!-- #footer container -->
</div><!-- #footer container fluid -->


</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

