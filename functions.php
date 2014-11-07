<?php
/**
 * tamcc functions and definitions
 *
 * @package tamcc
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'tamcc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tamcc_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tamcc, use a find and replace
	 * to change 'tamcc' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tamcc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	/************* THUMBNAIL SIZE OPTIONS *************/

                   // Thumbnail sizes
    add_image_size( 'wpbs-featured', 300, 200, true );
    add_image_size( 'wpbs-featured-home', 996, 311, true);
    add_image_size( 'wpbs-featured-blog', 350, 135, true);
    add_image_size( 'wpbs-featured-carousel', 1200, 800, true);
	add_theme_support( 'post-thumbnails' );

	
	 // Enable support for shortcode.
	add_filter('widget_text', 'do_shortcode');

	// This theme uses wp_nav_menu() in one location.
	//Register Navigations
	add_action( 'init', 'my_custom_menus' );
	function my_custom_menus() {
	    register_nav_menus(
	        array(
	            'primary-menu' => __( 'Primary Menu' ),
	            'energy-research' => __( 'Energy Research' ),
	            'solar-solution' => __( 'Solar Solution' )
	        )
	    );
	}

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );


	function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


	function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('....Read More', 'your-text-domain') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );


	//add svg support

	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );

	//adds breadcrumbs to website
	function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> <i class="fa fa-angle-double-right" style="color: #fff;"></i> </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> <i class="fa fa-angle-double-right" style="color: #fff;"></i> </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> <i class="fa fa-angle-double-right" style="color: #fff;"></i> </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator"><i class="fa fa-angle-double-right" style="color: #fff;"></i></li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
	}


	add_theme_support( 'html5', array( 'search-form' ) );


	//add link to the post thumbnail
	add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

	function my_post_image_html( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
	}



	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tamcc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // tamcc_setup
add_action( 'after_setup_theme', 'tamcc_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tamcc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'tamcc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'tamcc' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//footer boxes

	register_sidebar( array(
		'name'          => __( 'footer-bar-1', 'tamcc' ),
		'id'            => 'fw-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s fw-1 wow fadeInLeft">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><i class="fa fa-comment"></i> ',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'footer-bar-2', 'tamcc' ),
		'id'            => 'fw-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s fw-2 wow fadeInDown">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><i class="fa fa-twitter"></i> ',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'footer-bar-3', 'tamcc' ),
		'id'            => 'fw-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s fw-3 wow fadeInUp">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><i class="fa fa-tags"></i> ',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'footer-bar-4', 'tamcc' ),
		'id'            => 'fw-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s fw-4 wow fadeInRight">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><i class="fa fa-arrow-circle-o-down"></i> ',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'tamcc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tamcc_scripts() {
	
	wp_enqueue_style( 'tamcc-style-main', get_template_directory_uri() . '/assets/css/style.css?v='.time() );

	wp_enqueue_style( 'tamcc-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tamcc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tamcc-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'tamcc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tamcc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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




