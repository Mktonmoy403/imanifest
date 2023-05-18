<?php
/**
 * iManifest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iManifest
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function imanifest_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on iManifest, use a find and replace
		* to change 'imanifest' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'imanifest', get_template_directory() . '/languages' );

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
			'primary-menu' => esc_html__( 'Primary Menu', 'imanifest' ),
			'dashboard-menu' => esc_html__( 'Dashboard Menu', 'imanifest' ),
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
			'imanifest_custom_background_args',
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
add_action( 'after_setup_theme', 'imanifest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function imanifest_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'imanifest_content_width', 640 );
}
add_action( 'after_setup_theme', 'imanifest_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function imanifest_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'imanifest' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'imanifest' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'imanifest_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function imanifest_scripts() {
	wp_enqueue_style( 'imanifest-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );
	wp_enqueue_style( 'dashboard-style', get_template_directory_uri() . '/assets/css/dashboard-layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'dashboardr-style', get_template_directory_uri() . '/assets/css/dashboard-responsive.css', array(), _S_VERSION );
	wp_enqueue_style( 'sidemenu-style', get_template_directory_uri() . '/assets/plugins/sidebar/BootSideMenu.css', array(), _S_VERSION );
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/vendor/normalize-css/normalize.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap-5.3.0/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrapicon-style', get_template_directory_uri() . '/assets/vendor/bootstrap-icons-1.10.3/bootstrap-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'boxicons-style', '//cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'googlefonts-style', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Roboto&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'imanifest-style', 'rtl', 'replace' );

	// Load files only dashboard page
	if (is_page_template('page-templates/dashboard.php')) {
		wp_enqueue_style( 'swiper-style', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), _S_VERSION );
		wp_enqueue_script( 'swiper-script', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );
	}

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/vendor/bootstrap-5.3.0/js/bootstrap.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'sidebar-script', get_template_directory_uri() . '/assets/plugins/sidebar/respn-sidebar.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), _S_VERSION, true );
	wp_localize_script('theme-script', 'imenifest_ajax_objects', array(
		'ajaxurl'      => admin_url('admin-ajax.php'),
		'confirmText'  => esc_html__('Are your sure?', 'imenifest'),
	));
	// Load files only journals page
	if (is_page_template('page-templates/journals.php')) {
		wp_enqueue_script( 'journals-script', get_template_directory_uri() . '/assets/js/dashboard/journals.js', array('jquery'), _S_VERSION, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'imanifest_scripts' );

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
require get_template_directory() . '/inc/hooks.php';
require get_template_directory() . '/inc/ajax.php';


/**
 * Nav Walker which enhance the theme Nav by hooking into WordPress.
 */
require get_template_directory() . '/inc/nav-walker.php';

/**
 * initialize functions which enhance the theme Nav by hooking into WordPress.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/*

** imanifest register post type start

*/






// Register All Books

register_post_type('books',array(
	'public'		=>true,
	'labels'		=>array(
		'name'						=>'Books',
		'add_new'					=>'Add New Book',
		'add_items'					=>'All Books',
		'add_new_item'				=>'Add New Books',
		'featured_image'			=>'Books Image',
		'set_featured_image'		=>'Add Book Image',
		'remove_featured_image'		=>'Remove Book Image'
		),
	'menu_icon'		=> 'dashicons-book',
	'supports'		=>array('title','author','thumbnail','editor')
	));

	// Register Journal 
	register_post_type('journal',array(
		'public'		=>true,
		'labels'		=>array(
			'name'						=>'Journal',
			'add_new'					=>'Add New Journal',
			'add_items'					=>'All Journal',
			'add_new_item'				=>'Add New Journal',
			'featured_image'			=>'Journal Image',
			'set_featured_image'		=>'Add Journal Image',
			'remove_featured_image'		=>'Remove Journal Image'
			),
		'menu_icon'		=> 'dashicons-welcome-write-blog',
		'supports'		=>array('title','author','thumbnail','editor')
		));   
		
	// Register Guides 
	register_post_type('guides',array(
		'public'		=>true,
		'labels'		=>array(
			'name'						=>'Guides',
			'add_new'					=>'Add New Guides',
			'add_items'					=>'All Guides',
			'add_new_item'				=>'Add New Guides',
			'featured_image'			=>'Guides Image',
			'set_featured_image'		=>'Add Guides Image',
			'remove_featured_image'		=>'Remove Guides Image'
			),
		'menu_icon'		=> 'dashicons-text-page',
		'supports'		=>array('title','author','thumbnail','editor')
		));  

