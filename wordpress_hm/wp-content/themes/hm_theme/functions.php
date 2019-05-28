<?php
    function register_menus(){

        register_nav_menu('header-menu', __('Header menu'));

        register_nav_menus(array(

            'header-menu'  => 'Header Menu',
            'footer-menu'  => 'Footer Menu',
            'sidebar-menu' => 'Sidebar Menu'

        ));
    }

    function register_assets() {
        wp_enqueue_style('bootstrap-css', 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

        wp_enqueue_style('main-style', get_stylesheet_uri() );

        wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
         array('jquery'));

        wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js', array('bootstrapjs')) ;
    }

    add_action('wp_enqueue_scripts', 'register_assets');
    add_action('init', 'register_menus');
    add_theme_support('post-thumbnails');
    register_sidebar(1, array('name' => 'Sidebar 1'));


    

function create_book_custom_post_type() {
    register_post_type('sedc_book', 
    array(
        'labels' => array(
            'name' => __('Books'),
            'singular_name' => __('Book')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array(
            'thumbnail',
            'title',
            'editor',
            'excerpt',
            'custom-fields'
        )
    ));
}

add_action('init', 'create_book_custom_post_type');


function create_book_taxonomy() {
    register_taxonomy(
        'genre',
        'sedc_book',
        array(
            'label' => __('Genre'),
            'hierarchical' => true
        )
    );
}

add_action('init', 'create_book_taxonomy');
?>