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





    