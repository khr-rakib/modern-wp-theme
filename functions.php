<?php

require_once get_theme_file_path() .'/inc/modern-codestar.php';
require_once get_theme_file_path() .'/inc/class-tgm-plugin-activation.php';
require_once get_theme_file_path() .'/inc/modern-activate.php';
require_once get_theme_file_path() .'/inc/modern-demo.php';



function load_css_js(){    
    // load css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), "4.1.0", "all");
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), "1.0", "all" );
    wp_enqueue_style( 'fontawesome-5-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' );
    wp_enqueue_style( 'magnificpopup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), "1.0", "all" );
    wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), "1.0", "all" );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), "1.0", "all" );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), "1.0", "all" );
    wp_enqueue_style( get_stylesheet_uri() );

    // load js
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true );
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
    wp_enqueue_script('jquerymagnificpopup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true );
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), '1.0', true );
    wp_enqueue_script('imageloaded-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array(), '1.0', true );
    wp_enqueue_script('jquerycounterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0', true );
    wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array(), '1.0', true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'load_css_js' );

function modern_theme_setup(){
    register_nav_menus([
        'primary_manu'  => 'Primary Menu',
        'footer_menu'   => 'Footer Menu'
    ]);
    // add_theme_support( 'post-thumbnails' );
    add_theme_support('post-thumbnails', ['slider', 'post']);
    add_theme_support('title-tag');
    load_theme_textdomain('modern', 'modern_theme_setup');
}
add_action( 'after_setup_theme', 'modern_theme_setup' );



// custome posts
function modern_custom_posts(){
    // sldier post type
    register_post_type('slider', [
        'labels' => [
            'name' => __("Slider", 'modern'),
            'singular_name' => __('Slider', 'modern')
        ],
        'public'  => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']
    ]);

    // service post type
    register_post_type('service', [
        'label' => 'Service',
        'public' => true,
        'supports' => ['title', 'editor', 'custom-fields']
    ]);

    // team post type
    register_post_type('team', [
        'label' => 'Team',
        'public' => true,
        'supports' => ['custom-fields']
    ]);

    // testimonial post type
    register_post_type('testimonial', [
        'label' => 'Testimonial',
        'public' => true,
        'supports' => ['custom-fields']
    ]);
    // Portfolio post type
    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'supports' => ['custom-fields']
    ]);
    // portfolio taxonomy
    register_taxonomy('portfolio-cat', 'portfolio', [
        'label' => 'Categories',
        'hierarchical' => true,
        'show_admin_column' => true
    ]);

    // gallery post type
    register_post_type('gallery', [
        'label' => "Gallery",
        'public' => true,
        'supports' => ['custom-fields']
    ]);

}
add_action('init', 'modern_custom_posts');


// setup theme widgets
function modern_widgets(){
    // blog sidebar
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id'    => 'blog_sidebar',
        'description'  => 'This is blog sidebar',
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);

    // footer 1 sidebar
    register_sidebar([
        'name' => 'Footer One',
        'id'    => 'footer_one',        
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ]);
    // footer 2 sidebar
    register_sidebar([
        'name' => 'Footer Two',
        'id'    => 'footer_two',        
        'before_widget' => '<div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);
    // footer 3 sidebar
    register_sidebar([
        'name' => 'Footer Three',
        'id'    => 'footer_three',        
        'before_widget' => '<div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);
    // footer 4 sidebar
    register_sidebar([
        'name' => 'Footer Four',
        'id'    => 'footer_four',        
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);
}
add_action('widgets_init', 'modern_widgets');