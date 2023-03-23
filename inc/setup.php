<?php
/**
 * Theme basic setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'understrap_setup' );

if ( ! function_exists( 'understrap_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function understrap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on understrap, use a find and replace
		 * to change 'understrap' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'understrap', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'understrap' ),
				'top_menu' => __( 'Top Menu', 'understrap' ),
				'footer_bottom_menu' => __( 'Footer Bottom Menu', 'understrap' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'understrap_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Check and setup theme default settings.
		understrap_setup_theme_default_settings();

	}
}


/***************Post Type*******************/
function cptui_register_my_cpts() {

	/**
	 * Post Type: Brands.
	 */

	$labels = [
		"name" => esc_html__( "Brands", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Brand", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Brands", "custom-post-type-ui" ),
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
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "brands", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "brands", $args );

	/**
	 * Post Type: Cybersecurity.
	 */

	$labels = [
		"name" => esc_html__( "Cybersecurity", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Cybersecurity", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Cybersecurity", "custom-post-type-ui" ),
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
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "cybersecurity-challenges", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-lock",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "cybersecurity", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => esc_html__( "Testimonials", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Testimonial", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Testimonials", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );

	/**
	 * Post Type: Case Studies.
	 */

	$labels = [
		"name" => esc_html__( "Case Studies", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Case Study", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Case Studies", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "case-studies", $args );

	/**
	 * Post Type: Solutions.
	 */

	$labels = [
		"name" => esc_html__( "Solutions", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Solution", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Solutions", "custom-post-type-ui" ),
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
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "solutions", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-lightbulb",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "solutions", $args );

	/**
	 * Post Type: Datasheets.
	 */

	$labels = [
		"name" => esc_html__( "Datasheets", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Datasheet", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Datasheets", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "datasheets", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-spreadsheet",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "revisions" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "datasheets", $args );

	/**
	 * Post Type: FAQs.
	 */

	$labels = [
		"name" => esc_html__( "FAQs", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "FAQ", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "FAQs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
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
		"can_export" => true,
		"rewrite" => [ "slug" => "faq", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq", $args );

	/**
	 * Post Type: Careers.
	 */

	$labels = [
		"name" => esc_html__( "Careers", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Career", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Careers", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
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
		"can_export" => true,
		"rewrite" => [ "slug" => "career", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "career", $args );

	/**
	 * Post Type: Megamenu.
	 */

	$labels = [
		"name" => esc_html__( "Megamenu", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Megamenu", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Megamenu", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "megamenu", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "megamenu", $args );

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => esc_html__( "Events", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Event", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Events", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "events", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag", "topics" ],
		"show_in_graphql" => false,
	];

	register_post_type( "events", $args );

	/**
	 * Post Type: Whitepapers.
	 */

	$labels = [
		"name" => esc_html__( "Whitepapers", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Whitepaper", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Whitepapers", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "whitepapers", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag", "topics" ],
		"show_in_graphql" => false,
	];

	register_post_type( "whitepapers", $args );

	/**
	 * Post Type: Webinars.
	 */

	$labels = [
		"name" => esc_html__( "Webinars", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Webinar", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Webinars", "custom-post-type-ui" ),
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
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "webinar", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"taxonomies" => [ "webinar_category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "webinar", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );




function cptui_register_my_taxes() {

	/**
	 * Taxonomy: FAQ Topics.
	 */

	$labels = [
		"name" => esc_html__( "FAQ Topics", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "FAQ Topic", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "FAQ Topics", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'faq_topic', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "faq_topic",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "faq_topic", [ "faq" ], $args );

	/**
	 * Taxonomy: Topics.
	 */

	$labels = [
		"name" => esc_html__( "Topics", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Topic", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Topics", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Topics", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Topic", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Topic", "custom-post-type-ui" ),
		"update_item" => esc_html__( "Update Topic name", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Topic", "custom-post-type-ui" ),
		"new_item_name" => esc_html__( "New Topic name", "custom-post-type-ui" ),
		"parent_item" => esc_html__( "Parent Topic", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Topic:", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Topics", "custom-post-type-ui" ),
		"popular_items" => esc_html__( "Popular Topics", "custom-post-type-ui" ),
		"separate_items_with_commas" => esc_html__( "Separate Topics with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => esc_html__( "Add or remove Topics", "custom-post-type-ui" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Topics", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Topics found", "custom-post-type-ui" ),
		"no_terms" => esc_html__( "No Topics", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Topics list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Topics list", "custom-post-type-ui" ),
		"back_to_items" => esc_html__( "Back to Topics", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Topics", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'topics', 'with_front' => false, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "topics",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "topics", [ "post", "case-studies", "articles" ], $args );

	/**
	 * Taxonomy: Career Type.
	 */

	$labels = [
		"name" => esc_html__( "Career Type", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Career Type", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Career Type", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => false,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'career_type', 'with_front' => false, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "career_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "career_type", [ "career" ], $args );

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => esc_html__( "Categories", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Category", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Categories", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'webinar_category', 'with_front' => false, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "webinar_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "webinar_category", [ "webinar" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
