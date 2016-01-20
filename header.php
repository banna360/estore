<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GenieTheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/images/fav icon.png" type="image/x-icon" />

<?php wp_head(); ?>
</head>
<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/561f92b5600c87867dc42926/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'genietheme' ); ?></a>
	   
<div class="fixed_head">
	   <div class="head_top">
<div class="container">

<div class="row">

    <div class="support col-md-3">Our Support Email:<a href="mailto:info@luluestore.com"/>info@luluestore.com</a></div>

<div class="items_outer">

	<div class="col-md-8 item_b1">
	    <?php wp_nav_menu( array( 'theme_location' => 'head_top' ) ); ?>
	    <div class="clearfix"></div>
	</div>

	<div class="cart_itmm col-md-1 item_b2">
	<?php global $woocommerce; ?>

	<div class="cart_b">
	 <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
	 (<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>)

	</a>
    </div>

	</div>
	<div class="clearfix"></div>
</div>


</div>

</div>
    <div class="clearfix"></div>
   </div>

<div class="container-fluid branding_outer">
	<div class="container">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		
           <div class="logo col-md-2">        

	             <?php  $titan = TitanFramework::getInstance( 'genietheme' );?>
	             <?php
	            
		              $imageID = $titan->getOption( 'head_logo' );           
		   
		            $imageSrc = $imageID; // For the default value
		            if ( is_numeric( $imageID ) ) {
		                $imageAttachment = wp_get_attachment_image_src( $imageID,$size );
		                $imageSrc = $imageAttachment[0];	          	                
		            }	            
		            ?>           
	              <?php if($imageSrc)  { ?>
	              <a href="<?php bloginfo('url')?>/"> <img src="<?php echo $imageSrc; ?>" alt=""/> </a>
	              <?php }  ?>
    
            </div>	

            <div class="col-md-10 logo_right">              

                 <div class="search_bar text-right">
                        			
										<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
										
										<input id="s" type="text" name="s" placeholder="Search our products.."value="<?php the_search_query(); ?>" class="text" />
										<input id="x" type="submit" value="" class="button cg_button" />
									
										</form>
							      </div>

               

            </div>		
 
          <div class="clearfix"></div>
		</div>

	</header><!-- #masthead -->
</div><!-- #header container -->

</div><!-- #header container fluid -->



<div class="nav_left_right container-fluid">

<div class="container">
		<div class="menu_right col-md-12">
        
        <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'genietheme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		</nav><!-- #site-navigation -->


		 <!-- mobile menu -->



	<div class="col-xs-12 visible-xs hidden-md hidden-sm hidden-lg">
		<div class="row">
        <a href="#" class="MobileMenu">MENU</a>
        </div>
        <div class="clearfix"></div>
        &nbsp;
    </div>

  
    <div class="col-xs-12 mobile-navi hidden-md hidden-sm hidden-lg">
    	<div class="row">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>

    </div>



   <!-- mobile menu  end-->

		</div>
<div class="clearfix"></div>


	</div>

	</div>	

</div>
 

<div class="container-fluid ">

	<div class="container">
 <?php
if ( is_page('5') ) { ?>

<div class="slider_area">

<div class="left_menu col-md-3">

<?php dynamic_sidebar( 'left_menu' ); ?>

</div>

<div class="slider_show col-md-9"><?php layerslider(1) ?></div>

  <div class="clearfix"></div>
</div>

<?php } ?>

	<div id="content" class="site-content">
