<?php


// Load Stylesheets
function load_css(){

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
wp_enqueue_style('bootstrap');

wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
wp_enqueue_style('main');



}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
// Menus


register_nav_menus(

array(

'top-menu' => 'Top Menu Location',
'mobile-menu' => 'Mobile Menu Location',
'footer-menu' => 'Footer Menu Location',
)

);

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'products',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-products',
			'supports' => array('title','editor', 'thumbnail')
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function my_first_taxonomy(){

$args = array(

'labels' => array(
	'name' => 'Product Category',
	'singular_name' => 'Category'
),


'public' => true,
'heirarchical' => true,
);


register_taxonomy('products', array('products'), $args);

}
add_action('init','my_first_taxonomy');