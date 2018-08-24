<?php
/**
 * Created by PhpStorm.
 * User: seong
 * Date: 2018-08-08
 * Time: 오후 8:50
 */

 // compile scss 
define('WP_SCSS_ALWAYS_RECOMPILE', true);

// Setup
function arcademia_setup() {
    // A
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'arcademia_setup' );
// Styles & Scripts
function arcademia_scripts() {

    wp_enqueue_style('arcademia', get_theme_file_uri('./style.css'));
}
add_action( 'wp_enqueue_scripts', 'arcademia_scripts' );

// Custom header setup 

$header_info = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'   => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/static/images/heroImage.jpg',
);
add_theme_support( 'custom-header', $header_info );


function arcademia_customize_register( $wp_customize ) { 
    $wp_customize -> add_setting('home_profile_image_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    $wp_customize -> add_section('home_profile_image_section', array(
        'title'      => __( 'Home Profile Image', 'arcademia' ),
        'priority'   => 30,
    ));
    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'home_profile_image_control', array(
        'label'      => __( 'Home Profile Image', 'arcademia' ),
        'section'    => 'home_profile_image_section',
        'settings'   => 'home_profile_image_setting',
    )));

    $wp_customize -> add_setting('home_profile_box_text_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    $wp_customize -> add_section('home_profile_box_text_section', array(
        'title'      => __( 'Profile Box Text', 'arcademia' ),
        'priority'   => 30,
    ));
    $wp_customize -> add_control( new WP_Customize_Control( $wp_customize, 'home_profile_box_text_control', array(
        'label'      => __( 'Profile Box Text', 'arcademia' ),
        'section'    => 'home_profile_box_text_section',
        'settings'   => 'home_profile_box_text_setting',
        'type' => 'text'
    )));
    // Home profile box project image
    $wp_customize -> add_setting('home_project_box_text_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    $wp_customize -> add_section('home_project_box_text_section', array(
        'title'      => __( 'Project Box Text', 'arcademia' ),
        'priority'   => 30,
    ));
    $wp_customize -> add_control( new WP_Customize_Control( $wp_customize, 'home_profile_box_text_control', array(
        'label'      => __( 'Project Box Text', 'arcademia' ),
        'section'    => 'home_profile_box_text_section',
        'settings'   => 'home_profile_box_text_setting',
        'type' => 'text'
    )));

    $wp_customize -> add_setting('home_project_image_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    $wp_customize -> add_section('home_project_image_section', array(
        'title'      => __( 'Project Box Image', 'arcademia' ),
        'priority'   => 30,
    ));
    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'home_project_image_control', array(
        'label'      => __( 'Project Box Image', 'arcademia' ),
        'section'    => 'home_project_image_section',
        'settings'   => 'home_project_image_setting',
    )));
}
add_action('customize_register', 'arcademia_customize_register');
    
    


add_action( 'init', 'reviews_post_type' );
function reviews_post_type() {
    register_post_type( 'Reviews',
        array(
        'labels' => array(
            'name'               => __('Reviews', 'arcademia'),
            'singular_name'      => __('Review', 'arcademia'),
            'add_new_item'       => __('Add New Review', 'arcademia'),
            'edit_item'          => __('Edit Review', 'arcademia'),
            'new_item'           => __('New Review', 'arcademia'),
            'view_item'          => __('View Review', 'arcademia'),
            'search_items'       => __('Search Reviews', 'arcademia'),
            'not_found'          => __('No Review Found', 'arcademia'),
            'not_found_in_trash' => __('No Reviews found in Trash', 'arcademia')
        ),
        'description'          => 'Represent reviews in home page',
        'hierarchical'         => false,
        'menu_icon'            => 'dashicons-format-quote',
        'menu_position'        => 5,
        'public'               => true,
        'show_in_admin_bar'    => false,
        'show_in_nav_menus'    => true,
        'show_ui'              => true,
        'supports'             => array('title')
        ));
}