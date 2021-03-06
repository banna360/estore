<?php
/**
 * GenieTheme functions and definitions
 *
 * @package GenieTheme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'genietheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function genietheme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GenieTheme, use a find and replace
	 * to change 'genietheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'genietheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support('post-thumbnails');

	set_post_thumbnail_size('product_image',350,250,true);
	
	add_image_size('product_image',350,250,true);
	add_filter('widget_text', 'do_shortcode');


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'genietheme' ),
		'head_top' => __( 'Head Top Menu', 'genietheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	
        
}
endif; // genietheme_setup
add_action( 'after_setup_theme', 'genietheme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function my_custom_before_shop_loop_sidebar() {

dynamic_sidebar('shop-loop-header-sidebar');

}

add_action( 'woocommerce_before_shop_loop', 'my_custom_before_shop_loop_sidebar', 2);


function genietheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'genietheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop sidebar', 'genietheme' ),
		'id'            => 'shop',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Left Menu', 'genietheme' ),
		'id'            => 'left_menu',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer Left', 'genietheme' ),
		'id'            => 'f_left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer Middle', 'genietheme' ),
		'id'            => 'f_middle',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );	

		register_sidebar( array(
		'name'          => __( 'Footer Right', 'genietheme' ),
		'id'            => 'f_right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );	


}
add_action( 'widgets_init', 'genietheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function genietheme_scripts() {
	
wp_enqueue_style( 'genietheme-style-mobile', get_template_directory_uri().'/mobile.css');
	wp_enqueue_script( 'genietheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'genietheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_style( 'genietheme-style-boot', get_template_directory_uri().'/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'genietheme-style-boottheme', get_template_directory_uri().'/bootstrap/bootstrap-theme.min.css');
	wp_enqueue_script( 'genietheme-script', get_template_directory_uri().'/bootstrap/bootstrap.min.js');
	wp_enqueue_style( 'genietheme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'genietheme-owl-css', get_template_directory_uri().'/owl-carousel/owl.carousel.css');
    wp_enqueue_script( 'genietheme-owl-script', get_template_directory_uri().'/owl-carousel/owl.carousel.js');
	wp_enqueue_script( 'genietheme-owl-scriptnew', get_template_directory_uri().'/owl-carousel/site_new.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery');
}
add_action( 'wp_enqueue_scripts', 'genietheme_scripts' );



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

require get_template_directory() . '/inc/jetpack.php';

require_once( 'titan-framework/titan-framework-embedder.php' );
// Check whether the Titan Framework plugin is activated, and notify if it isn't
require_once( 'admin_options.php' );

add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['AED'] = __( 'DIRHAM', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'AED': $currency_symbol = 'AED '; break;
     }
     return $currency_symbol;
}