<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() .'/lib/swiper/swiper-bundle.min.css' );
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/lib/swiper/swiper-bundle.min.js' );
	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );





add_action('acf/init', 'my_acf_init');
function my_acf_init() {

    // check function exists
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'home-banner',
            'title'				=> __('Home Banner'),
            'description'		=> __('A custom block for the Home Banner.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array( 'Banner','Home Banner'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'partners',
            'title'				=> __('Partners'),
            'description'		=> __('A custom block for Partners.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array( 'Partners'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'features',
            'title'				=> __('Features'),
            'description'		=> __('A custom block for Features.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Features', 'Home Features'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'metric',
            'title'				=> __('Metric'),
            'description'		=> __('A custom block for Metric.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Metric', 'Home Metric'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'text-with-img-and-list',
            'title'				=> __('Text with image and list'),
            'description'		=> __('A custom block for Text with image and list.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Text with image and list', 'Text with image'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'cta',
            'title'				=> __('CTA'),
            'description'		=> __('A custom block for CTA.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('CTA'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'testimonials',
            'title'				=> __('Testimonials'),
            'description'		=> __('A custom block for Testimonials.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Testimonials', 'Testimonial'),
        ));
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'text-with-image',
            'title'				=> __('Text With Image'),
            'description'		=> __('A custom block for Text With Image.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Text With Image', 'Image'),
        ));
    }
    
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'carousel',
            'title'				=> __('Carousel'),
            'description'		=> __('A custom block for Carousel.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Carousel', 'Image'),
        ));
    }
    
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'home-contact',
            'title'				=> __('Home Contact'),
            'description'		=> __('A custom block for Home Contact.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Home Contact', 'Contact Us'),
        ));
    }

}

function my_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if( file_exists( get_theme_file_path("/global-templates/block/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/global-templates/block/content-{$slug}.php") );
    }
}


add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
    
    // loop
    foreach( $items as &$item ) {
        
        // vars
        $icon = get_field('icon', $item);
        
        
        // append icon
        if( $icon ) {
            
            $item->title = '<span class="icon"><img src="'.$icon['url'].'"></span> '.$item->title;
            
        }
        
    }
    
        return $items;
    
}

if( function_exists('acf_add_options_page') ) {    
    acf_add_options_page();    
}

add_action( 'widgets_init', 'cybel_angel_widgets_init' );
function cybel_angel_widgets_init() {
register_sidebar(
    array(
        'name'          => __( 'Footer One', 'understrap' ),
        'id'            => 'footer_one',
        'description'   => __( 'Footer One', 'understrap' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
        'after_widget'  => '</div><!-- .footer-widget -->',
        'before_title'  => '<h3 class="widget-title title">',
        'after_title'   => '</h3>',
    )
);



register_sidebar(
    array(
        'name'          => __( 'Footer Two', 'understrap' ),
        'id'            => 'footer_two',
        'description'   => __( 'Footer Two', 'understrap' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
        'after_widget'  => '</div><!-- .footer-widget -->',
        'before_title'  => '<h3 class="widget-title title">',
        'after_title'   => '</h3>',
    )
);


register_sidebar(
    array(
        'name'          => __( 'Footer Three', 'understrap' ),
        'id'            => 'footer_three',
        'description'   => __( 'Footer Three', 'understrap' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
        'after_widget'  => '</div><!-- .footer-widget -->',
        'before_title'  => '<h3 class="widget-title title">',
        'after_title'   => '</h3>',
    )
);

register_sidebar(
    array(
        'name'          => __( 'Footer Four', 'understrap' ),
        'id'            => 'footer_four',
        'description'   => __( 'Footer Four', 'understrap' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
        'after_widget'  => '</div><!-- .footer-widget -->',
        'before_title'  => '<h3 class="widget-title title">',
        'after_title'   => '</h3>',
    )
);


}


    