<?php

register_nav_menus( array(
    'primary' => __( 'Top primary menu', 'cla' ),
    'secondary' => __( 'Secondary menu', 'cla' ),
    ) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

function register_header1_widget_area() {
    register_sidebar(
        array(
            'id' => 'header-widget-area-1',
            'name' => esc_html__( 'Header First Part', 'theme-domain' ),
            'description' => esc_html__( 'Your Header content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
add_action( 'widgets_init', 'register_header1_widget_area' );

function register_footer1_widget_area() {
    register_sidebar(
        array(
            'id' => 'footer-widget-area-1',
            'name' => esc_html__( 'Footer First Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
add_action( 'widgets_init', 'register_footer1_widget_area' );

/* custome post type */

add_action('init','register_ims_post_type',0);
function register_ims_post_type(){
    $slider_labels=array(
        'name'=>__('Slider','cla'),
        'singular_name'=>__('Slider','cla'),
        'add_new'=>__('Add New Slider','cla'),
        'add_new_item'=>__('Add New Slider','cla'),
        'edit_item'=>__('Edit Slider','cla'),
        'new_item'=>__('New Slider','cla'),
        'view_item'=>__('View Slider','cla'),
        'search_item'=>__('Search Slider','cla'),
        'not_found'=>__('No Slider Found','cla'),
        'not_found_in_trash'=>__('No Slider Found in Trash','cla'),
        'parent_item_colon'=>__('Parent Slide:','cla'),
        'menu_name'=>__('Slides','cla'),
    );

    $slider_args=[
        'labels'=>$slider_labels,
        'description'=>__('Add your home page slides', 'cla'),
        'supports'=>array('title','thumbnail'),
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('slider',$slider_args);
}