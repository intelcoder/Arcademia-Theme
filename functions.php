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
    wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/static/js/hamburger.js', false );
    // styles will be automatically added through sass plugin
}
add_action( 'wp_enqueue_scripts', 'arcademia_scripts' );
add_theme_support( 'customize-selective-refresh-widgets' );
// allow upload svg via media uploader
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

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
    // Home Page
    // Home profile section
    $wp_customize -> add_section('homepage', array(
        'title'      => __( 'Home page', 'arcademia' ),
        'priority'   => 30,
    ));
    $wp_customize -> add_setting('homepage_heading', array(
        'default' => _x('Custom', 'arcademia'),
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('homepage_heading', array(
        'label' => __('Profile Box Text', 'arcademia'),
        'section' => 'homepage',
        'type' => 'textarea'
    ));

    $wp_customize -> add_setting('home_profile_image', array(
        'transport'      => 'refresh',
        'height'         => 325
    ));

    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'home_profile_image', array(
        'label'      => __( 'Profile Image', 'arcademia' ),
        'section'    => 'homepage',
        'settings'   => 'home_profile_image',
        'priority'   => 1,
        
    )));

    $wp_customize -> add_setting('home_profile_button_text', array(
        'transport'      => 'refresh',
        'height'         => 325
    ));

    $wp_customize -> add_control('home_profile_button_text', array(
        'label' => __('Profile Button Text', 'arcademia'),
        'section' => 'homepage'
    ));
    

   
    // Home project section
    $wp_customize -> add_setting('home_project_image_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'home_project_image_setting', array(
        'label'      => __( 'Project Box Image', 'arcademia' ),
        'section'    => 'homepage',
        'settings'   => 'home_project_image_setting',
    )));

    $wp_customize -> add_setting('home_project_box_text_setting', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    $wp_customize -> add_control( new WP_Customize_Control( $wp_customize, 'home_project_box_text_setting', array(
        'label'      => __( 'Project Box Text', 'arcademia' ),
        'section'    => 'homepage',
        'settings'   => 'home_project_box_text_setting',
        'type' => 'textarea'
    )));

    
    $wp_customize -> add_setting('home_project_button_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mode'
    ));

    $wp_customize -> add_control('home_project_button_text', array(
        'label' => __('Project Button Text', 'arcademia'),
        'section' => 'homepage'
    ));

    // Testimonial Page
    $wp_customize -> add_section('contactPage', array(
        'title'      => __( 'Contact page', 'arcademia' ),
        'priority'   => 30,
    ));

    // Profile Page
    $wp_customize -> add_section('profilePage', array(
        'title'      => __( 'Profile page', 'arcademia' ),
        'priority'   => 30,
    ));

    $wp_customize -> add_setting('top_right_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('top_right_text', array(
        'label' => __('Top right text', 'arcademia'),
        'section' => 'profilePage',
        'type' => 'textarea'
    ));

    $wp_customize -> add_setting('top_left_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('top_left_text', array(
        'label' => __('Top Left Text', 'arcademia'),
        'section' => 'profilePage',
        'type' => 'textarea'
    ));

    $wp_customize -> add_setting('principal_name', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('principal_name', array(
        'label' => __('Principal name', 'arcademia'),
        'section' => 'profilePage',
    ));

    $wp_customize -> add_setting('principal_from', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('principal_from', array(
        'label' => __('Principal from', 'arcademia'),
        'section' => 'profilePage',
    ));

    $wp_customize -> add_setting('profile_middle_bg_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('profile_middle_bg_text', array(
        'label' => __('Middle background text', 'arcademia'),
        'section' => 'profilePage',
        'type' => 'textarea'
    ));

    $wp_customize -> add_setting('bottom_left_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('bottom_left_text', array(
        'label' => __('Bottom left text', 'arcademia'),
        'section' => 'profilePage',
        'type' => 'textarea'
    ));

    $wp_customize -> add_setting('bottom_right_text', array(
        'transport'      => 'refresh',
        'height'         => 325,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('bottom_right_text', array(
        'label' => __('Bottom right text', 'arcademia'),
        'section' => 'profilePage',
        'type' => 'textarea'
    ));
 

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
add_action( 'init', 'testimonials_post_type' );
function testimonials_post_type() {
    register_post_type( 'Testimonials',
        array(
        'labels' => array(
            'name'               => __('Testimonials', 'arcademia'),
            'singular_name'      => __('Testimonial', 'arcademia'),
            'add_new_item'       => __('Add New Testimonial', 'arcademia'),
            'edit_item'          => __('Edit Testimonial', 'arcademia'),
            'new_item'           => __('New Testimonial', 'arcademia'),
            'view_item'          => __('View Testimonial', 'arcademia'),
            'search_items'       => __('Search Testimonials', 'arcademia'),
            'not_found'          => __('No Testimonial Found', 'arcademia'),
            'not_found_in_trash' => __('No Testimonials found in Trash', 'arcademia')
        ),
        'description'          => 'Represent testimonials in testimonials page',
        'hierarchical'         => false,
        'menu_icon'            => 'dashicons-format-chat',
        'menu_position'        => 5,
        'public'               => true,
        'show_in_admin_bar'    => false,
        'show_in_nav_menus'    => true,
        'show_ui'              => true,
        'supports'             => array('title')
        ));
}
add_action( 'init', 'projects_post_type' );
function projects_post_type() {
    register_post_type( 'Projects',
        array(
        'labels' => array(
            'name'               => __('Projects', 'arcademia'),
            'singular_name'      => __('Project', 'arcademia'),
            'add_new_item'       => __('Add New Project', 'arcademia'),
            'edit_item'          => __('Edit Project', 'arcademia'),
            'new_item'           => __('New Project', 'arcademia'),
            'view_item'          => __('View Project', 'arcademia'),
            'search_items'       => __('Search Project', 'arcademia'),
            'not_found'          => __('No Project Found', 'arcademia'),
            'not_found_in_trash' => __('No Projects found in Trash', 'arcademia')
        ),
        'description'          => 'Represent projects in projects page',
        'hierarchical'         => false,
        'menu_icon'            => 'dashicons-networking',
        'menu_position'        => 5,
        'public'               => true,
        'show_in_admin_bar'    => false,
        'show_in_nav_menus'    => true,
        'show_ui'              => true,
        'supports'             => array('title', 'editor', 'custom-fields')
        ));
}

add_action( 'init', 'locations_post_type' );
function locations_post_type() {
    register_post_type( 'Locations',
        array(
        'labels' => array(
            'name'               => __('Locations', 'arcademia'),
            'singular_name'      => __('Location', 'arcademia'),
            'add_new_item'       => __('Add New Location', 'arcademia'),
            'edit_item'          => __('Edit Location', 'arcademia'),
            'new_item'           => __('New Location', 'arcademia'),
            'view_item'          => __('View Location', 'arcademia'),
            'search_items'       => __('Search Location', 'arcademia'),
            'not_found'          => __('No Location Found', 'arcademia'),
            'not_found_in_trash' => __('No Location found in Trash', 'arcademia')
        ),
        'description'          => 'Represent location blocks in the contact page',
        'hierarchical'         => false,
        'menu_icon'            => 'dashicons-networking',
        'menu_position'        => 5,
        'public'               => true,
        'show_in_admin_bar'    => false,
        'show_in_nav_menus'    => true,
        'show_ui'              => true,
        'supports'             => array('title')
        ));
}

add_action( 'init', 'contact_manager_post_type' );
function contact_manager_post_type() {
    register_post_type( 'manager_contact',
        array(
        'labels' => array(
            'name'               => __('Manager Contacts', 'arcademia'),
            'singular_name'      => __('Manager Contact', 'arcademia'),
            'add_new_item'       => __('Add Manager Contact', 'arcademia'),
            'edit_item'          => __('Edit Manager Contact', 'arcademia'),
            'new_item'           => __('New Manager Contact', 'arcademia'),
            'view_item'          => __('View Manager Contact', 'arcademia'),
            'search_items'       => __('Search Manager Contact', 'arcademia'),
            'not_found'          => __('No Manager Contact Found', 'arcademia'),
            'not_found_in_trash' => __('No Manager Contact found in Trash', 'arcademia')
        ),
        'description'          => 'Manager contacts in the contact page',
        'hierarchical'         => false,
        'menu_icon'            => 'dashicons-networking',
        'menu_position'        => 5,
        'public'               => true,
        'show_in_admin_bar'    => false,
        'show_in_nav_menus'    => true,
        'show_ui'              => true,
        'supports'             => array('title')
        ));
}