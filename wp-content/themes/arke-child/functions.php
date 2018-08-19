<?php
function arke_child_enqueue() {

	$parent_style = 'arke-style'; // This is 'arke-style' for the Arke theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('unslider-style', get_stylesheet_directory_uri() . '/css/unslider.css');
	wp_enqueue_style('aos-style', get_stylesheet_directory_uri() . '/css/aos.css');

	wp_enqueue_script('unslider-js', get_stylesheet_directory_uri() . '/js/aos.js', array('jquery'));
	wp_enqueue_script('aos-js', get_stylesheet_directory_uri() . '/js/unslider-min.js', array('jquery'));
	wp_enqueue_script('arke-child-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery', 'unslider-js'), '1.0.0', true);


}

add_action( 'wp_enqueue_scripts', 'arke_child_enqueue' );

////function output_meta_tags(){
////	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
//}
//add_action('wp_head', 'output_meta_tags');

if ( ! function_exists( 'arke_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arke_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Menu', 'arke' ),
			'social-menu'  => esc_html__( ' Social Menu', 'arke' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add image size for blog posts, 640px wide (and unlimited height).
		add_image_size( 'arke-blog', 640 );

		// Registering custom post type for case studies
		register_post_type( 'case-studies',
			array(
				'labels' => array(
					'name' => __( 'Case Studies' ),
					'singular_name' => __( 'Case Study' )
				),
				'public' => true,
				'has_archive' => true,
			)
		);

		// Remove P Tags Around Images
		function filter_ptags_on_images($content){
			return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
		}
		add_filter('the_content', 'filter_ptags_on_images');
	}
endif;
?>


