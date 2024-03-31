<?php
/*
 * Child theme functions file
 *
 */
function fun_olympic_enqueue_styles()
{

    $parent_style = 'zakra-style'; //parent theme style handle 'zakra-style'

    //Enqueue parent and chid theme style.css
    wp_register_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'fun_olympic_style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style(
        'fun_olympic_carousel_css',
        get_stylesheet_directory_uri() . '/css/owl.min.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style(
        'fun_olympic_carousel_theme_css',
        get_stylesheet_directory_uri() . '/css/owl.theme.min.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script(
        'fun_olympic_owl_carousel_js',
        get_stylesheet_directory_uri() . '/js/owl.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script(
        'fun_olympic_script',
        get_stylesheet_directory_uri() . '/js/fun_olympic_script.js',
        array('jquery'),
        '',
        true
    );
}
add_action('wp_enqueue_scripts', 'fun_olympic_enqueue_styles');

// Our custom post type event function
function fun_olympic_event_cpt()
{

    register_post_type(
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'fun_olympic_event_cpt');

// Our custom post type event function
function fun_olympic_game_cpt()
{

    register_post_type(
        'games',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Games'),
                'singular_name' => __('Game')
            ),
            'taxonomies'  => array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'games'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'fun_olympic_game_cpt');
