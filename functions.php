<?php

// Including the stylesheet and script files
function load_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', ['jquery'], '4.6.0', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', [], '4.6.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', [], time(), 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// This function is just for organization
function learnwp_config()
{
    // register nav menu
    register_nav_menus(array(
        'my_main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
    ));

    $args = array(
        'height' => 225,
        'width' => 1920,
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
		add_theme_support( 'title-tag' );
    
}

// Everything in learnwp_config will run when the after_setup_theme hook is executed
add_action('after_setup_theme', 'learnwp_config', 0);


// Registering our sidebars
add_action( 'widgets_init', 'learnwp_sidebars' );
function learnwp_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'This is the Home Page Sidebar. You can add your widgets here. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'sidebar-2',
			'description' => 'This is the Blog Sidebar. You can add your widgets here. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	

	// First
	register_sidebar(
		array(
			'name' => 'Service 1',
			'id' => 'services-1',
			'description' => 'First services area. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	

	// Second
	register_sidebar(
		array(
			'name' => 'Service 2',
			'id' => 'services-2',
			'description' => 'Second services area. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	

	// Third
	register_sidebar(
		array(
			'name' => 'Service 3',
			'id' => 'services-3',
			'description' => 'Third services area. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
}