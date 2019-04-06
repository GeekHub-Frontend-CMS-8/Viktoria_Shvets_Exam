<?php
/**
 * GH-Exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GH-Exam
 */

if (!function_exists('gh_exam_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gh_exam_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on GH-Exam, use a find and replace
         * to change 'gh-exam' to the name of your theme in all the template files.
         */
        load_theme_textdomain('gh-exam', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'gh-exam'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('gh_exam_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'gh_exam_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gh_exam_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('gh_exam_content_width', 640);
}

add_action('after_setup_theme', 'gh_exam_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gh_exam_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'gh-exam'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'gh-exam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'gh_exam_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gh_exam_scripts()
{
    wp_enqueue_style('gh-exam-style', get_stylesheet_uri());

    wp_enqueue_script('gh-exam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('gh-exam-my-script', get_template_directory_uri() . '/js/my-script.js', array(), '20151215', true);
    wp_enqueue_script('gh-exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'gh_exam_scripts');

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function load_fonts()
{
    wp_register_style('et-googleFonts1',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i');
    wp_register_style('et-googleFonts2',
        'https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,700,700i');
    wp_enqueue_style('et-googleFonts1');
    wp_enqueue_style('et-googleFonts2');
}

add_action('wp_print_styles', 'load_fonts');
function wptp_create_post_type()
{
    $labels = array(
        'name' => __('Tiles'),
        'singular_name' => __('Tile'),
        'add_new' => __('New Item'),
        'add_new_item' => __('Add New Item'),
        'edit_item' => __('Edit Item'),
        'new_item' => __('New Item'),
        'view_item' => __('View Item'),
        'search_items' => __('Search Items'),
        'not_found' => __('No Items Found'),
        'not_found_in_trash' => __('No Items found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => false,
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'thumbnail'
        ),
    );
    register_post_type('tiles', $args);
}

add_action('init', 'wptp_create_post_type');

/*
This is taken directly from here and modified to fit our needs: https://developer.wordpress.org/themes/basics/including-css-javascript/
*/

function add_that_css_and_js()
{

    wp_enqueue_style('enqueue-that-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'add_that_css_and_js');

add_theme_support('menus');
register_nav_menus(
    array(
        'head_menu' => 'Header navigation',
    )
);

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
define('S_THEME_ROOT', get_template_directory_uri());
define('S_CSS_DIR', S_THEME_ROOT . '/css');
define('S_JS_DIR', S_THEME_ROOT . '/js');
define('S_IMG_DIR', S_THEME_ROOT . '/img/');
