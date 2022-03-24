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
add_theme_support('widgets');
// Menus


register_nav_menus(

array(

'top-menu' => 'Top Menu Location',
'mobile-menu' => 'Mobile Menu Location',
'footer-menu' => 'Footer Menu Location',
)

);


// Custom Image Sizes
add_image_size('post-large', 800, 400, true);
add_image_size('post-small', 300, 200, true);


add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
}



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


// Register Sidebars
function my_sidebars()
{


			register_sidebar(

						array(

								'name' => 'Page Sidebar',
								'id' => 'page-sidebar',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);


			register_sidebar(

						array(

								'name' => 'Blog Sidebar',
								'id' => 'blog-sidebar',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);



}
add_action('widgets_init','my_sidebars');















// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function my_first_taxonomy()
{

			$args = array(

					'labels' => array(
							'name' => 'Products',
							'singular_name' => 'Product',
					),

					'public' => true,
					'hierarchical' => true,

			);


			register_taxonomy('products', array('products'), $args);

}
add_action('init', 'my_first_taxonomy');




