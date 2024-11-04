<?php
/**
 * sws functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sws
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sws_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sws, use a find and replace
		* to change 'sws' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sws', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'sws' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sws_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sws_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sws_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sws_content_width', 640 );
}
add_action( 'after_setup_theme', 'sws_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sws_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sws' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sws' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sws_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sws_scripts() {
	wp_enqueue_style( 'sws-style', get_stylesheet_uri(), array(), THEME_VERSION );
	wp_enqueue_style( 'sws-theme-style', get_template_directory_uri() . '/css/theme.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-slick-min', get_template_directory_uri() . '/css/slick.min.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-aos', get_template_directory_uri() . '/css/aos.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-slick-theme-min', get_template_directory_uri() . '/css/slick-theme.min.css', [], THEME_VERSION );
	wp_enqueue_script( 'sws-core-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), THEME_VERSION, true );

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), THEME_VERSION, true );
	
	wp_enqueue_script( 'sws-aos-js', get_template_directory_uri() . '/js/aos.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THEME_VERSION, true );


	// wp_enqueue_script( 'sws-gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-gsap_animation', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-addIndicators', get_template_directory_uri() . '/js/debug.addIndicators.js', array(), THEME_VERSION, true );
	
	wp_enqueue_script( 'sws-custom', get_template_directory_uri() . '/js/custom.js', array(), THEME_VERSION, true ); // last on write

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap', false ); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sws_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme options.
 */
require get_template_directory() . '/inc/theme-options-acf.php';

/**
 * Custom Taxonomy.
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Custom Functions
 */

 require get_template_directory() . '/inc/custom-functions.php';


 /**
 * Custom SVG
 */

 require get_template_directory() . '/inc/class-svg-enable.php';


// Code for Block Free Email
 function block_free_email_domains($result, $tag) {
    $name = $tag['name'];
    
    // List of free email domains to block
    $free_domains = array('gmail.com', 'yahoo.com', 'aol.com', 'hotmail.com', 'outlook.com', 'aol.com', 'icloud.com', 'live.com', 'zoho.com', 'dont-reply.me');

    // Only apply this check to the email field
    if ($name == 'email-address') {
        $email = isset($_POST[$name]) ? trim($_POST[$name]) : '';
        
        // Extract the domain from the email
        $email_domain = substr(strrchr($email, "@"), 1);
        
        // If the email domain is in the list of free domains, invalidate the form
        if (in_array($email_domain, $free_domains)) {
            $result->invalidate($tag, 'Please use a business email address.');
        }
    }

    return $result;
}
add_filter('wpcf7_validate_email*', 'block_free_email_domains', 20, 2);








