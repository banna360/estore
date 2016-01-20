<?php
/**
 * Template Name:Home Template
 * @package GenieTheme
 */

get_header(); ?>
<?php
if ( is_page('5') ) { ?>

<style type="text/css">
.site-content{
	background:#E7E7E7;
}

</style>


<?php } ?>

	<div id="primary" class="content-area home_content_area">
		<main id="main" class="site-main" role="main">

	
          <!--home page image-left under slider-->


<div class="hmm_banner_outer">
<div class="col-md-6 bb_padd_one col-sm-6">
          <?php  $titan = TitanFramework::getInstance( 'genietheme' );?>
	             <?php
	            
		              $imageID = $titan->getOption( 'home_img_one' );           
		   
		            $imageSrc = $imageID; // For the default value
		            if ( is_numeric( $imageID ) ) {
		                $imageAttachment = wp_get_attachment_image_src( $imageID,$size );
		                $imageSrc = $imageAttachment[0];	          	                
		            }	            
		            ?>           
	              <?php if($imageSrc)  { ?>
	              <a href="<?php echo get_titan_option('home_txt_one') ?>"> <img src="<?php echo $imageSrc; ?>" alt=""/> </a>
	              <?php }  ?>



</div>
<!--home page image-right under slider-->

<div class="col-md-6 bb_padd_two col-sm-6">
          <?php  $titan = TitanFramework::getInstance( 'genietheme' );?>
	             <?php
	            
		              $imageID = $titan->getOption( 'home_img_two' );           
		   
		            $imageSrc = $imageID; // For the default value
		            if ( is_numeric( $imageID ) ) {
		                $imageAttachment = wp_get_attachment_image_src( $imageID,$size );
		                $imageSrc = $imageAttachment[0];	          	                
		            }	            
		            ?>           
	              <?php if($imageSrc)  { ?>
	              <a href="<?php echo get_titan_option('home_txt_two') ?>"> <img src="<?php echo $imageSrc; ?>" alt=""/> </a>
	              <?php }  ?>


</div>
<div class="clearfix"></div>
</div>

<!--recent products-->
<div class="hm_products">
         
<section id="recent">

<h1>OUR RECENT PRODUCTS</h1>

    <ul class="row-fluid col-md-12 ">

      <div id="main-recent-products" class="owl-carousel">

        <?php
            $args = array( 'post_type' => 'product', 'stock' => 4, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

             
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>



                    <li class="span3 col-md-12">    
                     <div class="row border_box">    
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                        	   <div class="pric_t"><span class="price"> <?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                     </div>       
                    </li><!-- /span3 -->


  
        <?php endwhile; ?>

        </div>

        <?php wp_reset_query(); ?>



    </ul><!-- /row-fluid -->
 <div class="clearfix"></div>
</section><!-- /recent -->




<section id="featured"><!-- featured -->


<h1>OUR FEATURED PRODUCTS</h1>

    <div class="row-fluid col-md-12">

       <div class="col-md-4">

         
        <div id="main-featured-products" class="owl-carousel">

         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'featured-home-products_main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"> <?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>

       </div>

    </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'featured-home-products', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                        	   <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


   
</div>



<div class="ads_banner">

  <img src="http://www.luluestore.com/wp-content/uploads/2015/11/banner_adds_new.png"/>

<div class="clearfix"></div>
</div>




<!--home page computer components box-->

<div class="hm_products">

<section id="components"><!-- featured -->



   <div class="recent_box">
     <h1 class="recent_title col-md-6">Computer Components</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/computer-components/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4 colmd_padd">
        <div id="main-computer-components" class="owl-carousel">

         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Computer Components-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
       </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Computer Components', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->




<!--##computer components box-->



<!-- start gadgets box-->

<section id="components"><!-- featured -->



   <div class="recent_box_two">
     <h1 class="recent_title_two col-md-6">Mobiles & Accessories</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/mobiles-&-accessories/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">

        <div id="main-gadgets" class="owl-carousel">

         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Mobiles&Accessories-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
   </div>
       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Mobiles & Accessories', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##gadgets box end-->


<!-- audio box-->

<section id="components"><!-- featured -->



   <div class="recent_box_three">
     <h1 class="recent_title_three col-md-6">Tablets & Accessories</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/tablets-accessories/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">
<div id="main-audio" class="owl-carousel">
         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Tablets & Accessories-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
        </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Tablets & Accessories', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##audio box end-->




<!-- cable&connectors box start -->

<section id="components"><!-- featured -->



   <div class="recent_box_four">
     <h1 class="recent_title_four col-md-6">Jewellery & Watches </h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/jewellery-watches/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">
<div id="main-cable" class="owl-carousel">
         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Jewellery & Watches-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
       </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Jewellery & Watches', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##cable&connectors box end-->


<!-- Laptop Battery Compatible box start -->

<section id="components"><!-- featured -->



   <div class="recent_box_five">
     <h1 class="recent_title_five col-md-6">Bags & Sunglasses</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/bags-sunglasses/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">
<div id="main-laptops" class="owl-carousel">
         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Bags & Sunglasses-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
       </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'Bags & Sunglasses', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##Laptop Battery Compatible box end-->



<!-- TV &Audio systems box start -->

<section id="components"><!-- featured -->



   <div class="recent_box_tv">
     <h1 class="recent_title_tv col-md-6">TV & Audio/Video Systems</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/tv-audiovideo-systems/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">
<div id="main-tv" class="owl-carousel">
         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'tv-audiovideo-systems-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
       </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'tv-audiovideo-systems', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##TV &Audio systems box end-->



<!-- Cameras & Accessories box start -->

<section id="components"><!-- featured -->



   <div class="recent_box_camera">
     <h1 class="recent_title_camera col-md-6">Cameras & Accessories</h1>

     <div class="view_more col-md-6">

      <a href="http://www.luluestore.com/product-category/cameras-accessories/">View All Products >></a>

     </div>

       <div class="clearfix"></div> 
   </div>


    <div class="row-fluid col-md-12">



       <div class="col-md-4">
<div id="camera_sec" class="owl-carousel">
         <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'cameras-accessories-main', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
   
                    <div class="row border_box_big">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'product_image'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>
                      <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                        </a>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>

                    </div>
                  
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
       </div>
       </div>

       <div class="col-md-8">

        <?php
            $args = array( 'post_type' => 'product', 'product_cat' => 'cameras-accessories', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );

            ?>   

           <?php $counter=0;?>

            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

              <?php if($counter%3==0) echo "<div class='clear'></div>"; ?>
                    <div class="span3 col-md-4 col-sm-4">    
                    <div class="row border_box_second">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prd_items_data">
                            
                            <h3><?php the_title(); ?></h3>

                            <?php if (has_post_thumbnail( $loop->post->ID )) ?>
                         <div class="title_bottom">   

                            <div class="f_thumbb"> <?php  echo get_the_post_thumbnail($loop->post->ID, 'product_image');?></div>

                             <div class="pric_t"><span class="price"><?php echo $product->get_price_html(); ?></span></div>

                          </div>

                        </a>
                        <div class="clearfix"></div>

                        <div class="cart_boxx"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></div>
                    </div>
                    </div><!-- /span3 -->


           <?php $counter++;?>
        <?php endwhile; ?>

        <?php wp_reset_query(); ?>


       </div><!-- /col-md-8 -->

    </div><!-- /col-md-12 -->


<div class="clearfix"></div>
</section><!-- /featured -->


<!--##Cameras & Accessories box end-->


</div><!--##bg white for box-->


   <div class="home_about"><?php the_content();?>

    <div class="clearfix"></div>
   </div>


		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- container -->
</div><!-- container-fluid -->
<?php get_footer(); ?>
