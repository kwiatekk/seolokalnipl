<?php 

function seolokalnipl_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Lato:300i,400&amp;subset=latin-ext');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'seolokalnipl_setup');


function seolokalnipl_init() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
    
);

}

add_action('after_setup_theme', 'seolokalnipl_init');

// oferta post-type

function seolokalnipl_custom_post_type() {
    register_post_type('oferta',
    array(
        'rewrite' => array('slug' => 'oferta'),
        'labels' => array(
        'name' => 'oferty',
        'singular name' => 'oferta',
        'add_new_item' => 'Dodaj nową ofertę',
        'edit_item' => 'Edytuj ofertę'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )

    )

        );

}

add_action('init', 'seolokalnipl_custom_post_type');

//sidebar

function seolokalnipl_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init', 'seolokalnipl_widgets');


//filtr dla szukaj

function search_filter($query){
    if($query->is_search()){
        $query->set('post_type', array('post','oferta'));
    }
}

add_filter('pre_get_posts', 'search_filter');