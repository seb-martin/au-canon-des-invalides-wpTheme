<?php
/**
 * Au Canon Des Invalides functions and definitions
 *
 * @package Au Canon Des Invalides
 * @since Au Canon Des Invalides 1.0
 */

/**
 * Evite d'afficher la barre d'administration wp
 * par dessus la barre de navigation du site
 */
add_filter( 'show_admin_bar', '__return_false' );


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Au Canon Des Invalides 1.0
 */
/*if ( ! isset( $content_width ) )
    $content_width = 654;*/





/**
 * Ajoute le support de Modernizr
 */
function enqueue_modernizr() {
    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', array(), '2.7.2', false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_modernizr' );

/**
 * Ajoute le support de Modernizr
 */
function enqueue_webshim() {
    wp_enqueue_script( 'polyfiller-script', get_template_directory_uri() . '/bower_components/webshim/js-webshim/dev/polyfiller.js', array('jquery'), '1.12.5', false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_webshim' );

/**
 * Ajoute le support de Bootstrap
 */
function enqueue_bootstrap() {
    wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.js', array('jquery'), '3.1.1', false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );

/**
 * Fournit les scripts (js/css) de l'application
 */
function enqueue_app_scripts() {
    wp_enqueue_style( 'app-style-deprecated', get_stylesheet_directory_uri() . '/_style.css', array('bootstrap-style'));
    wp_enqueue_style( 'app-style', get_stylesheet_uri(), array('bootstrap-style'));

    wp_enqueue_script('app-script', get_template_directory_uri() . '/js/main.js', array('bootstrap-script' ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_app_scripts' );

if (!function_exists('app_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     *
     * @since Au Canon Des Invalides 1.0
     */

    function app_setup()
    {
        /**
         * Custom template tags for this theme.
         */
        require( get_template_directory() . '/inc/template-tags.php' );

        /**
         * Custom functions that act independently of the theme templates
         */
        require( get_template_directory() . '/inc/tweaks.php' );

        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * If you're building a theme based on Shape, use a find and replace
         * to change 'shape' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'acdi', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to head
         */
        add_theme_support( 'automatic-feed-links' );


        /**
         * This theme uses wp_nav_menu() in one location.
         */
        register_nav_menus( array(
            'Top' => 'Navigation principale',
        ) );

    }
    add_action( 'after_setup_theme', 'app_setup' );
}

if(! function_exists('app_init')) {
    function app_init()
    {
        /**
         * Ajout des menus du jour dans le menu d'administration de WP
         */
        register_post_type('menu-jour', array(
            'label' => __('Menus du Jour'),
            'singular_label' => __('Menu du Jour'),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'supports' => array('title', 'editor')
        ));
    }
    add_action('init', 'app_init');
}

