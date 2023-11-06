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
	//wp_enqueue_style( 'KBmapmarkers', get_stylesheet_directory_uri() .'/lib/swiper/KBmapmarkers.css' );
	wp_enqueue_style( 'interactive-image', get_stylesheet_directory_uri() .'/lib/interactive/interactive-image.css' );
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/lib/swiper/swiper-bundle.min.js' );
	
	wp_dequeue_script( 'jQuery' );
	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
    wp_enqueue_script( 'interactive-image', get_stylesheet_directory_uri() . '/lib/interactive/interactive-image.js', array('jquery'));
    wp_enqueue_script( 'count', get_stylesheet_directory_uri() . '/lib/count.js', array('jquery'));
    //wp_enqueue_script( 'KBmapmarkers', get_stylesheet_directory_uri() . '/lib/map/js/KBmapmarkers.js', array('jquery'));
	//wp_enqueue_script( 'KBmapmarkersCustm', get_stylesheet_directory_uri() . '/lib/map/js/KBmapmarkersCords.js', array('jquery'));
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

        
        acf_register_block(array(
            'name'				=> 'inner-page-banner',
            'title'				=> __('Inner Page Banner'),
            'description'		=> __('A custom block for Inner Page Banner.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Inner Page Banner', 'Banner'),
        ));
        acf_register_block(array(
            'name'				=> 'two-column-text-with-icon',
            'title'				=> __('Two column text with icon'),
            'description'		=> __('A custom block for Two column text with icon.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Two column text with icon', 'text', 'icon', 'Two Column'),
        ));

        acf_register_block(array(
            'name'				=> 'testimonials-style-2',
            'title'				=> __('Testimonial Style Two'),
            'description'		=> __('A custom block for Testimonial Style Two.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Testimonial Style Two', 'Testimonia', 'Style Two'),
        ));

        acf_register_block(array(
            'name'				=> 'releted-resources',
            'title'				=> __('Related Resources'),
            'description'		=> __('A custom block for Related Resources.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Related Resources', 'Resources'),
        ));

        acf_register_block(array(
            'name'				=> 'partners-logo',
            'title'				=> __('Partners logo With text'),
            'description'		=> __('A custom block for  Partners logo With text'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Partners logo With text.', ' Partners logo', 'logo'),
        ));

        acf_register_block(array(
            'name'				=> 'text-with-blue-bg',
            'title'				=> __('Text With Blue Background'),
            'description'		=> __('A custom block for Text With Blue Background'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Text With Blue Background', 'Blue Background', 'text'),
        ));
        
        acf_register_block(array(
            'name'				=> 'three-col-text-with-icon',
            'title'				=> __('Three Column Text With Icon'),
            'description'		=> __('A custom block for Three Column Text With Icon'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-aside',
            'keywords'			=> array('Three Column Text With Icon', 'Three Column Text', 'text'),
        ));


        acf_register_block(array(
            'name'              => 'banner',
            'title'             => __('Banner'),
            'description'       => __('A custom block for Banner'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Banner'),
        ));

        acf_register_block(array(
            'name'              => 'featurs-with-img',
            'title'             => __('Featurs with image'),
            'description'       => __('A custom block for Featurs with image'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Featurs with image'),
        ));


         acf_register_block(array(
            'name'              => 'two-column-text-box-with-blue-bg',
            'title'             => __('Two Column Text With Blue Background'),
            'description'       => __('A custom block for Two Column Text With Blue Background'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Two Column Text With Blue Background','Blue Background', 'Text'),
        ));

         acf_register_block(array(
            'name'              => 'text-with-image-style-one',
            'title'             => __('Text With Image Style One'),
            'description'       => __('A custom block for Two Column Text With Image Style One'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Text With Image Style One', 'Text'),
        ));

         
        acf_register_block(array(
            'name'              => 'banner-without-image',
            'title'             => __('Banner Without Image'),
            'description'       => __('A custom block for Banner Without Image'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Banner Without Image', 'Banner'),
        ));

         
 acf_register_block(array(
            'name'              => 'programs',
            'title'             => __('Programs'),
            'description'       => __('A custom block for Programs'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Programs', 'Program'),
        ));

         
 acf_register_block(array(
            'name'              => 'contact-us',
            'title'             => __('Contact'),
            'description'       => __('A custom block for Contact'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Contact', 'Contact Us'),
        ));

         
 acf_register_block(array(
            'name'              => 'two-col-text-and-image',
            'title'             => __('Two column text and image'),
            'description'       => __('A custom block for Two column text and image'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Contact', 'Contact Us'),
        ));

         
 acf_register_block(array(
            'name'              => 'quotes',
            'title'             => __('Quotes'),
            'description'       => __('A custom block for quotese'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('quotes'),
        ));

         
 acf_register_block(array(
            'name'              => 'offices',
            'title'             => __('Offices'),
            'description'       => __('A custom block for offices'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('offices', 'contact address'),
        ));

         
 acf_register_block(array(
            'name'              => 'features-with-steps',
            'title'             => __('Features with steps'),
            'description'       => __('A custom block for Features'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Features', 'Features with steps'),
        ));

         
 acf_register_block(array(
            'name'              => 'how-it-works',
            'title'             => __('How it works'),
            'description'       => __('A custom block for How it works'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('How it works'),
        ));

         
         
 acf_register_block(array(
            'name'              => 'news',
            'title'             => __('News'),
            'description'       => __('A custom block for News'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('News'),
        ));
         
 acf_register_block(array(
            'name'              => 'blog',
            'title'             => __('Blog'),
            'description'       => __('A custom block for Blog'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Blog'),
        ));

         
 acf_register_block(array(
            'name'              => 'our-team',
            'title'             => __('Our Team'),
            'description'       => __('A custom block for Our team'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Our Team'),
        ));

         
 acf_register_block(array(
            'name'              => 'banner-with-subscription',
            'title'             => __('Banner with subscription'),
            'description'       => __('A custom block for Banner with subscription'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Banner with subscription'),
        ));

          acf_register_block(array(
            'name'              => 'quote-with-image',
            'title'             => __('Quote with image'),
            'description'       => __('A custom block forQuote with image'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Quote with image'),
        ));


           acf_register_block(array(
            'name'              => 'inner-page-newsletter',
            'title'             => __('Inner Page Newsletter'),
            'description'       => __('A custom block for Inner Page Newsletter'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Inner Page Newsletter'),
        ));


           acf_register_block(array(
            'name'              => 'jobs',
            'title'             => __('Jobs'),
            'description'       => __('A custom block for Jobs'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Jobs','Join Our Team', 'Carrer'),
        ));

        acf_register_block(array(
            'name'              => 'video-with-text',
            'title'             => __('Vide with text'),
            'description'       => __('A custom block for Vide with text'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array('Vide with text'),
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


function cptui_register_my_cpts_Resources() {

	/**
	 * Post Type: Resources.
	 */

	$labels = [
		"name" => esc_html__( "Resources", "understrap-child" ),
		"singular_name" => esc_html__( "Resource", "understrap-child" ),
		"menu_name" => esc_html__( "Resources", "understrap-child" ),
		"all_items" => esc_html__( "All Resource", "understrap-child" ),
		"add_new" => esc_html__( "Add New Resource", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Resource", "understrap-child" ),
		"edit_item" => esc_html__( "Edit Resource", "understrap-child" ),
		"new_item" => esc_html__( "New Resource", "understrap-child" ),
		"view_item" => esc_html__( "View Resource", "understrap-child" ),
		"view_items" => esc_html__( "View Resources", "understrap-child" ),
		"search_items" => esc_html__( "Search Resource", "understrap-child" ),
		"not_found" => esc_html__( "Resource Found", "understrap-child" ),
		"not_found_in_trash" => esc_html__( "No Resource found in trash", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Resources", "understrap-child" ),
		"labels" => $labels,
		"description" => "Resource library",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "resource", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "resource", $args );
}

add_action( 'init', 'cptui_register_my_cpts_Resources' );


function cptui_register_my_cpts_news() {

	/**
	 * Post Type: News.
	 */

	$labels = [
		"name" => esc_html__( "News", "understrap-child" ),
		"singular_name" => esc_html__( "News", "understrap-child" ),
		"menu_name" => esc_html__( "News", "understrap-child" ),
		"all_items" => esc_html__( "All News", "understrap-child" ),
		"add_new" => esc_html__( "Add New News", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New News", "understrap-child" ),
		"edit_item" => esc_html__( "Edit News", "understrap-child" ),
		"new_item" => esc_html__( "New News", "understrap-child" ),
		"view_item" => esc_html__( "View News", "understrap-child" ),
		"view_items" => esc_html__( "View News", "understrap-child" ),
		"search_items" => esc_html__( "Search News", "understrap-child" ),
		"not_found" => esc_html__( "No News Found", "understrap-child" ),
		"not_found_in_trash" => esc_html__( "No News found in trash", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "News", "understrap-child" ),
		"labels" => $labels,
		"description" => "News",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "news", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "news", $args );
}

add_action( 'init', 'cptui_register_my_cpts_news' );

function cptui_register_my_taxes_news() {

	/**
	 * Taxonomy: News categories.
	 */

	$labels = [
		"name" => esc_html__( "News categories", "understrap-child" ),
		"singular_name" => esc_html__( "News Category", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "News categories", "understrap-child" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'news-category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "news-category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "news-category", [ "news" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_news' );


function cptui_register_my_cpts_careers() {

    /**
     * Post Type: Careers.
     */

    $labels = [
        "name" => __( "Careers", "twentytwentyone" ),
        "singular_name" => __( "Career", "twentytwentyone" ),
        "menu_name" => __( "Careers", "twentytwentyone" ),
        "all_items" => __( "All Career", "twentytwentyone" ),
        "add_new" => __( "New Career", "twentytwentyone" ),
        "add_new_item" => __( "Add New Career", "twentytwentyone" ),
        "edit_item" => __( "Edit Career", "twentytwentyone" ),
        "new_item" => __( "New Career", "twentytwentyone" ),
        "view_item" => __( "View Career", "twentytwentyone" ),
        "view_items" => __( "View Careers", "twentytwentyone" ),
        "search_items" => __( "Search Career", "twentytwentyone" ),
        "not_found" => __( "Careers Not found", "twentytwentyone" ),
        "not_found_in_trash" => __( "No Career Found in Trash", "twentytwentyone" ),
    ];

    $args = [
        "label" => __( "Careers", "twentytwentyone" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "careers", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-welcome-learn-more",
        "supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "careers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_careers' );



function cptui_register_my_taxes_job_category() {

    /**
     * Taxonomy: Job Categories.
     */

    $labels = [
        "name" => __( "Job Categories", "twentytwentyone" ),
        "singular_name" => __( " Job Category", "twentytwentyone" ),
    ];

    
    $args = [
        "label" => __( "Job Categories", "twentytwentyone" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'job_category', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "job_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "job_category", [ "careers" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_job_category' );


function get_ajax_resource_data() {
    $args = array(
        'post_type' => array('resource'),
        'post_status' => array('publish'),
        'posts_per_page' => 10,
        'order' => 'DESC',
        'orderby' => 'date',
    );

    $ajaxposts = get_posts( $args );
    $postList = [];
    $i= 0;
    foreach($ajaxposts as $post){
        $postList[$i]['id'] = $post->ID;
        $postList[$i]['title'] = $post->post_title;
        $postList[$i]['content'] = $post->post_content;
        $postList[$i]['date'] = $post->post_date;
        $postList[$i]['url'] = get_the_permalink($post->ID);
        $postList[$i]['image'] = get_the_post_thumbnail_url($post->ID, 'full'); ;
        $i++;
    }
    print_r($ajaxposts );
    echo json_encode( $ajaxposts );

    $the_query = new WP_Query($args);

    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
            <h2><a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a></h2>
        <?php endwhile;
        wp_reset_postdata();  
    endif;

    die();

}

add_action('wp_ajax_get_ajax_resource_data', 'get_ajax_resource_data');
add_action('wp_ajax_nopriv_get_ajax_resource_data', 'get_ajax_resource_data');



// required for ajax loading and get_template_part
function load_template_part($template_name, $part_name=null, $args = array()) {
    ob_start();
    get_template_part($template_name, $part_name, $args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


// MEGAMENU
class WPNav_Walker_Accessibility extends Walker_Nav_Menu {
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }

        if($args->theme_location == 'primary') {
        
            $item_id = $item->ID;
            $item_dropdown = '';
            // if(get_field('mega_menu', $item_id)){
            //     $item_dropdown .= "1111";
            // }
            
            

            if( have_rows('megamenu', get_field('post', $item_id)) ) {

                $item_dropdown .= '<div class="menu-dropdown"><div class="container-xl"><div class="row flex-column flex-xl-row">';
                    $item_dropdown .= '<div class="col-xl-8 d-flex flex-wrap">';
                        while ( have_rows('megamenu', get_field('post', $item_id)) ) { the_row();
                            $layout = get_row_layout();
                            $item_dropdown .= load_template_part('megamenu/megamenu', $layout, array('side' => 'left'));
                        } // endwhile
                    $item_dropdown .= '</div>';
                    $item_dropdown .= '<div class="col-xl-4 d-none d-xl-block">';
                        while ( have_rows('megamenu', get_field('post', $item_id)) ) { the_row();
                            $layout = get_row_layout();
                            $item_dropdown .= load_template_part('megamenu/megamenu', $layout, array('side' => 'right'));
                        } // endwhile
                    $item_dropdown .= '</div>';
                $item_dropdown .= '</div></div></div>';

            } // endif
        }

        $output .= "{$item_dropdown}</li>{$n}";
    }







		/**
		 * Starts the list before the elements are added.
		 *
		 * @since WP 3.0.0
		 *
		 * @see Walker_Nav_Menu::start_lvl()
		 *
		 * @param string   $output Used to append additional content (passed by reference).
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
				$t = '';
				$n = '';
			} else {
				$t = "\t";
				$n = "\n";
			}
			$indent = str_repeat( $t, $depth );
			// Default class to add to the file.
			$classes = array( 'dropdown-menu' );
			/**
			 * Filters the CSS class(es) applied to a menu list element.
			 *
			 * @since WP 4.8.0
			 *
			 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
			 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
           
			/**
			 * The `.dropdown-menu` container needs to have a labelledby
			 * attribute which points to it's trigger link.
			 *
			 * Form a string for the labelledby attribute from the the latest
			 * link with an id that was added to the $output.
			 */
			$labelledby = '';
			// find all links with an id in the output.
			preg_match_all( '/(<a.*?id=\"|\')(.*?)\"|\'.*?>/im', $output, $matches );
			// with pointer at end of array check if we got an ID match.
			if ( end( $matches[2] ) ) {
				// build a string to use as aria-labelledby.
				$labelledby = 'aria-labelledby="' . end( $matches[2] ) . '"';
			}
			$output .= "{$n}{$indent}<ul$class_names $labelledby >{$n}";
		}

		/**
		 * Starts the element output.
		 *
		 * @since WP 3.0.0
		 * @since WP 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
		 *
		 * @see Walker_Nav_Menu::start_el()
		 *
		 * @param string   $output Used to append additional content (passed by reference).
		 * @param WP_Post  $item   Menu item data object.
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 * @param int      $id     Current item ID.
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
				$t = '';
				$n = '';
			} else {
				$t = "\t";
				$n = "\n";
			}
			$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			// Initialize some holder variables to store specially handled item
			// wrappers and icons.
			$linkmod_classes = array();
			$icon_classes    = array();

			/**
			 * Get an updated $classes array without linkmod or icon classes.
			 *
			 * NOTE: linkmod and icon class arrays are passed by reference and
			 * are maybe modified before being used later in this function.
			 */
			$classes = self::seporate_linkmods_and_icons_from_classes( $classes, $linkmod_classes, $icon_classes, $depth );

			// Join any icon classes plucked from $classes into a string.
			$icon_class_string = join( ' ', $icon_classes );

			/**
			 * Filters the arguments for a single nav menu item.
			 *
			 *  WP 4.4.0
			 *
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param WP_Post  $item  Menu item data object.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */
			$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

			// Add .dropdown or .active classes where they are needed.
			if ( isset( $args->has_children ) && $args->has_children ) {
				$classes[] = 'dropdown';
                
                
			}
			if ( in_array( 'current-menu-item', $classes, true ) || in_array( 'current-menu-parent', $classes, true ) ) {
				$classes[] = 'active';
			}

			// Add some additional default classes to the item.
			$classes[] = 'menu-item-' . $item->ID;
			$classes[] = 'nav-item';
            if(get_field('mega_menu', $item->ID)){
                $classes[] = 'mega-menu-item';
            }
            

			// Allow filtering the classes.
			$classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

			// Form a string of classes in format: class="class_names".
			$class_names = join( ' ', $classes );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			/**
			 * Filters the ID applied to a menu item's list item element.
			 *
			 * @since WP 3.0.1
			 * @since WP 4.1.0 The `$depth` parameter was added.
			 *
			 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"' . $id . $class_names . '>';

			// initialize array for holding the $atts for the link item.
			$atts = array();

			// Set title from item to the $atts array - if title is empty then
			// default to item title.
			if ( empty( $item->attr_title ) ) {
				$atts['title'] = ! empty( $item->title ) ? strip_tags( $item->title ) : '';
			} else {
				$atts['title'] = $item->attr_title;
			}

			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			if ( '_blank' === $item->target && empty( $item->xfn ) ) { // Thanks to LukaszJaro, see https://github.com/understrap/understrap/issues/973.
				$atts['rel'] = 'noopener noreferrer';
			} else {
				$atts['rel'] = $item->xfn;
			}

			// If item has_children add atts to <a>.
			if ( isset( $args->has_children ) && $args->has_children && 0 === $depth && 1 !== $args->depth ) {
				$atts['href']           = '#';
				$atts['data-toggle']    = 'dropdown';
				$atts['data-bs-toggle'] = 'dropdown';
				$atts['aria-haspopup']  = 'true';
				$atts['aria-expanded']  = 'false';
            
                
                    $atts['class']          = 'dropdown-toggle nav-link';
                
				
				$atts['id']             = 'menu-item-dropdown-' . $item->ID;
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '#';
				// Items in dropdowns use .dropdown-item instead of .nav-link.
				if ( $depth > 0 ) {
					$atts['class'] = 'dropdown-item';
				} else {
					$atts['class'] = 'nav-link';
				}
			}

			$atts['aria-current'] = $item->current ? 'page' : '';

			// update atts of this item based on any custom linkmod classes.
			$atts = self::update_atts_for_linkmod_type( $atts, $linkmod_classes );
			// Allow filtering of the $atts array before using it.
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			// Build a string of html containing all the atts for the item.
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			/**
			 * Set a typeflag to easily test if this is a linkmod or not.
			 */
			$linkmod_type = self::get_linkmod_type( $linkmod_classes );

			/**
			 * START appending the internal item contents to the output.
			 */
			$item_output = isset( $args->before ) ? $args->before : '';
			/**
			 * This is the start of the internal nav item. Depending on what
			 * kind of linkmod we have we may need different wrapper elements.
			 */
			if ( '' !== $linkmod_type ) {
				// is linkmod, output the required element opener.
				$item_output .= self::linkmod_element_open( $linkmod_type, $attributes );
			} else {
				// With no link mod type set this must be a standard <a> tag.
				$item_output .= '<a' . $attributes . '>';
			}

			/**
			 * Initiate empty icon var, then if we have a string containing any
			 * icon classes form the icon markup with an <i> element. This is
			 * output inside of the item before the $title (the link text).
			 */
			$icon_html = '';
			if ( ! empty( $icon_class_string ) ) {
				// append an <i> with the icon classes to what is output before links.
				$icon_html = '<i class="' . esc_attr( $icon_class_string ) . '" aria-hidden="true"></i> ';
			}

			/** This filter is documented in wp-includes/post-template.php */
			$title = apply_filters( 'the_title', $item->title, $item->ID );

			/**
			 * Filters a menu item's title.
			 *
			 * @since WP 4.4.0
			 *
			 * @param string   $title The menu item's title.
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */
			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

			/**
			 * If the .sr-only class was set apply to the nav items text only.
			 */
			if ( in_array( 'sr-only', $linkmod_classes, true ) ) {
				$title         = self::wrap_for_screen_reader( $title );
				$keys_to_unset = array_keys( $linkmod_classes, 'sr-only', true );
				foreach ( $keys_to_unset as $k ) {
					unset( $linkmod_classes[ $k ] );
				}
			}

			// Put the item contents into $output.
			$item_output .= isset( $args->link_before ) ? $args->link_before . $icon_html . $title . $args->link_after : '';
			/**
			 * This is the end of the internal nav item. We need to close the
			 * correct element depending on the type of link or link mod.
			 */
			if ( '' !== $linkmod_type ) {
				// is linkmod, output the required element opener.
				$item_output .= self::linkmod_element_close( $linkmod_type, $attributes );
			} else {
				// With no link mod type set this must be a standard <a> tag.
				$item_output .= '</a>';
			}

			$item_output .= isset( $args->after ) ? $args->after : '';

			/**
			 * END appending the internal item contents to the output.
			 */
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}

		/**
		 * Traverse elements to create list from elements.
		 *
		 * Display one element if the element doesn't have any children otherwise,
		 * display the element and its children. Will only traverse up to the max
		 * depth and no ignore elements under that depth. It is possible to set the
		 * max depth to include all depths, see walk() method.
		 *
		 * This method should not be called directly, use the walk() method instead.
		 *
		 * @since WP 2.5.0
		 *
		 * @see Walker::start_lvl()
		 *
		 * @param object $element           Data object.
		 * @param array  $children_elements List of elements to continue traversing (passed by reference).
		 * @param int    $max_depth         Max depth to traverse.
		 * @param int    $depth             Depth of current element.
		 * @param array  $args              An array of arguments.
		 * @param string $output            Used to append additional content (passed by reference).
		 */
		public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
			if ( ! $element ) {
				return; }
			$id_field = $this->db_fields['id'];
			// Display this element.
			if ( is_object( $args[0] ) ) {
				$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] ); }
			parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}

		/**
		 * Menu Fallback
		 * =============
		 * If this function is assigned to the wp_nav_menu's fallback_cb variable
		 * and a menu has not been assigned to the theme location in the WordPress
		 * menu manager the function with display nothing to a non-logged in user,
		 * and will add a link to the WordPress menu manager if logged in as an admin.
		 *
		 * @param array $args passed from the wp_nav_menu function.
		 */
		public static function fallback( $args ) {
			if ( current_user_can( 'edit_theme_options' ) ) {

				/* Get Arguments. */
				$container       = $args['container'];
				$container_id    = $args['container_id'];
				$container_class = $args['container_class'];
				$menu_class      = $args['menu_class'];
				$menu_id         = $args['menu_id'];

				// initialize var to store fallback html.
				$fallback_output = '';

				if ( $container ) {
					$fallback_output .= '<' . esc_attr( $container );
					if ( $container_id ) {
						$fallback_output .= ' id="' . esc_attr( $container_id ) . '"';
					}
					if ( $container_class ) {
						$fallback_output .= ' class="' . esc_attr( $container_class ) . '"';
					}
					$fallback_output .= '>';
				}
				$fallback_output .= '<ul';
				if ( $menu_id ) {
					$fallback_output .= ' id="' . esc_attr( $menu_id ) . '"'; }
				if ( $menu_class ) {
					$fallback_output .= ' class="' . esc_attr( $menu_class ) . '"'; }
				$fallback_output .= '>';
				$fallback_output .= '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" title="' . esc_attr__( 'Add a menu', 'understrap' ) . '">' . esc_html__( 'Add a menu', 'understrap' ) . '</a></li>';
				$fallback_output .= '</ul>';
				if ( $container ) {
					$fallback_output .= '</' . esc_attr( $container ) . '>';
				}

				// if $args has 'echo' key and it's true echo, otherwise return.
				if ( array_key_exists( 'echo', $args ) && $args['echo'] ) {
					echo $fallback_output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				} else {
					return $fallback_output;
				}
			}
		}

		/**
		 * Find any custom linkmod or icon classes and store in their holder
		 * arrays then remove them from the main classes array.
		 *
		 * Supported linkmods: .disabled, .dropdown-header, .dropdown-divider, .sr-only
		 * Supported iconsets: Font Awesome 4/5, Glypicons
		 *
		 * NOTE: This accepts the linkmod and icon arrays by reference.
		 *
		 * @since 4.0.0
		 *
		 * @param array   $classes         an array of classes currently assigned to the item.
		 * @param array   $linkmod_classes an array to hold linkmod classes.
		 * @param array   $icon_classes    an array to hold icon classes.
		 * @param integer $depth           an integer holding current depth level.
		 *
		 * @return array  $classes         a maybe modified array of classnames.
		 */
		private function seporate_linkmods_and_icons_from_classes( $classes, &$linkmod_classes, &$icon_classes, $depth ) {
			// Loop through $classes array to find linkmod or icon classes.
			foreach ( $classes as $key => $class ) {
				// If any special classes are found, store the class in it's
				// holder array and and unset the item from $classes.
				if ( preg_match( '/^disabled|^sr-only/i', $class ) ) {
					// Test for .disabled or .sr-only classes.
					$linkmod_classes[] = $class;
					unset( $classes[ $key ] );
				} elseif ( preg_match( '/^dropdown-header|^dropdown-divider|^dropdown-item-text/i', $class ) && $depth > 0 ) {
					// Test for .dropdown-header or .dropdown-divider and a
					// depth greater than 0 - IE inside a dropdown.
					$linkmod_classes[] = $class;
					unset( $classes[ $key ] );
				} elseif ( preg_match( '/^fa-(\S*)?|^fa(s|r|l|b)?(\s?)?$/i', $class ) ) {
					// Font Awesome.
					$icon_classes[] = $class;
					unset( $classes[ $key ] );
				} elseif ( preg_match( '/^glyphicon-(\S*)?|^glyphicon(\s?)$/i', $class ) ) {
					// Glyphicons.
					$icon_classes[] = $class;
					unset( $classes[ $key ] );
				}
			}

			return $classes;
		}

		/**
		 * Return a string containing a linkmod type and update $atts array
		 * accordingly depending on the decided.
		 *
		 * @since 4.0.0
		 *
		 * @param array $linkmod_classes array of any link modifier classes.
		 *
		 * @return string                empty for default, a linkmod type string otherwise.
		 */
		private function get_linkmod_type( $linkmod_classes = array() ) {
			$linkmod_type = '';
			// Loop through array of linkmod classes to handle their $atts.
			if ( ! empty( $linkmod_classes ) ) {
				foreach ( $linkmod_classes as $link_class ) {
					if ( ! empty( $link_class ) ) {

						// check for special class types and set a flag for them.
						if ( 'dropdown-header' === $link_class ) {
							$linkmod_type = 'dropdown-header';
						} elseif ( 'dropdown-divider' === $link_class ) {
							$linkmod_type = 'dropdown-divider';
						} elseif ( 'dropdown-item-text' === $link_class ) {
							$linkmod_type = 'dropdown-item-text';
						}
					}
				}
			}
			return $linkmod_type;
		}

		/**
		 * Update the attributes of a nav item depending on the limkmod classes.
		 *
		 * @since 4.0.0
		 *
		 * @param array $atts            array of atts for the current link in nav item.
		 * @param array $linkmod_classes an array of classes that modify link or nav item behaviors or displays.
		 *
		 * @return array                 maybe updated array of attributes for item.
		 */
		private function update_atts_for_linkmod_type( $atts = array(), $linkmod_classes = array() ) {
			if ( ! empty( $linkmod_classes ) ) {
				foreach ( $linkmod_classes as $link_class ) {
					if ( ! empty( $link_class ) ) {
						// update $atts with a space and the extra classname...
						// so long as it's not a sr-only class.
						if ( 'sr-only' !== $link_class ) {
							$atts['class'] .= ' ' . esc_attr( $link_class );
						}
						// check for special class types we need additional handling for.
						if ( 'disabled' === $link_class ) {
							// Convert link to '#' and unset open targets.
							$atts['href'] = '#';
							unset( $atts['target'] );
						} elseif ( 'dropdown-header' === $link_class || 'dropdown-divider' === $link_class || 'dropdown-item-text' === $link_class ) {
							// Store a type flag and unset href and target.
							unset( $atts['href'] );
							unset( $atts['target'] );
						}
					}
				}
			}
			return $atts;
		}

		/**
		 * Wraps the passed text in a screen reader only class.
		 *
		 * @since 4.0.0
		 *
		 * @param string $text the string of text to be wrapped in a screen reader class.
		 * @return string      the string wrapped in a span with the class.
		 */
		private function wrap_for_screen_reader( $text = '' ) {
			if ( $text ) {
				$text = '<span class="screen-reader-text">' . $text . '</span>';
			}
			return $text;
		}

		/**
		 * Returns the correct opening element and attributes for a linkmod.
		 *
		 * @since 4.0.0
		 *
		 * @param string $linkmod_type a sting containing a linkmod type flag.
		 * @param string $attributes   a string of attributes to add to the element.
		 *
		 * @return string              a string with the openign tag for the element with attribibutes added.
		 */
		private function linkmod_element_open( $linkmod_type, $attributes = '' ) {
			$output = '';
			if ( 'dropdown-item-text' === $linkmod_type ) {
				$output .= '<span class="dropdown-item-text"' . $attributes . '>';
			} elseif ( 'dropdown-header' === $linkmod_type ) {
				// For a header use a span with the .h6 class instead of a real
				// header tag so that it doesn't confuse screen readers.
				$output .= '<span class="dropdown-header h6"' . $attributes . '>';
			} elseif ( 'dropdown-divider' === $linkmod_type ) {
				// this is a divider.
				$output .= '<div class="dropdown-divider"' . $attributes . '>';
			}
			return $output;
		}

		/**
		 * Return the correct closing tag for the linkmod element.
		 *
		 * @since 4.0.0
		 *
		 * @param string $linkmod_type a string containing a special linkmod type.
		 *
		 * @return string              a string with the closing tag for this linkmod type.
		 */
		private function linkmod_element_close( $linkmod_type ) {
			$output = '';
			if ( 'dropdown-header' === $linkmod_type || 'dropdown-item-text' === $linkmod_type ) {
				// For a header use a span with the .h6 class instead of a real
				// header tag so that it doesn't confuse screen readers.
				$output .= '</span>';
			} elseif ( 'dropdown-divider' === $linkmod_type ) {
				// this is a divider.
				$output .= '</div>';
			}
			return $output;
		}
};







/********************ajax post */
function filter_resource() {
    $catSlug = $_POST['category'];
    if($catSlug == 'all'){

        $ajaxposts = new WP_Query([
            'post_type' => 'resource',
            'posts_per_page' => -1,
            'orderby' => 'menu_order', 
            'order' => 'desc',
          ]);
  
    
}else{

    $ajaxposts = new WP_Query([
        'post_type' => 'resource',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
              'taxonomy' => 'resource-categories',
              'field'    => 'slug',
              'terms'    => array( $catSlug )
          )
          ),
        'orderby' => 'menu_order', 
        'order' => 'desc',
      ]);
    
}
    $response = '';
  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $title = get_the_title();
        $content = get_the_content();
        $trimmed_content = wp_trim_words( $content, 15, '..' );
        $time = get_the_time('F j, Y');
        $featured_image = get_the_post_thumbnail_url();
        $taxonomy_terms = wp_get_post_terms(get_the_ID(), 'resource-categories');
        $tags = get_the_tags();
        $pdf = get_field('pdf');
        if($pdf){
            $link = $pdf['url'];
        }else{
            $link = get_the_permalink();
        }
        $response .= '
        <div class="item">
            <article>
                <div class="image-container" style="background: url('.$featured_image.'); background-size: cover;
            background-position: center;">
                    <div class="post-meta">

                        <div class="left-box">
                            <span>1 min Read</span>
                            <span class="date">'.$time.'</span>
                        </div>

                        <div class="right-box">
                            <span>Shadow IT</span><span>'.$taxonomy_terms[0]->name.'</span>
                        
                        </div>

                    </div>
                </div>
                <h3 class="title">'.$title .'</h3>
                <p>'.esc_html($trimmed_content  ).'</p>
                <a href="'.$link.'" class="link">Read post</a>
            </article>
        </div>';
    
      endwhile;
    } else {
      $response = 'empty';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_filter_resource', 'filter_resource');
  add_action('wp_ajax_nopriv_filter_resource', 'filter_resource');
/********************end of ajax post */



    