<?php
/**
 * WordPress-Starter-Theme functions and definitions.
 *
 * This file is read by WordPress to setup the theme and his additionnal features.
 *
 * @package   WordPress-Starter-Theme
 * @link      https://github.com/ArmandPhilippot/wordpress-starter-theme
 * @author    Armand Philippot <contact@armandphilippot.com>
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

/*
 * Currently theme version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WORDPRESSSTARTERTHEME_VERSION', '1.1.1' );

if ( ! function_exists( 'wordpressstartertheme_setup' ) ) {
	/**
	 * Setup WordPress-Starter-Theme theme and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 */
	function wordpressstartertheme_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'WordPressStarterTheme', get_template_directory() . '/languages' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
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

		// Add theme support for Custom Logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 150,
				'height'      => 150,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'WordPressStarterTheme' ),
					'shortName' => __( 'S', 'WordPressStarterTheme' ),
					'size'      => 12,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'WordPressStarterTheme' ),
					'shortName' => __( 'M', 'WordPressStarterTheme' ),
					'size'      => 16,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'WordPressStarterTheme' ),
					'shortName' => __( 'L', 'WordPressStarterTheme' ),
					'size'      => 20,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'WordPressStarterTheme' ),
					'shortName' => __( 'XL', 'WordPressStarterTheme' ),
					'size'      => 24,
					'slug'      => 'huge',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Register menu.
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu', 'WordPressStarterTheme' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'wordpressstartertheme_setup' );

/**
 * Register Sidebars.
 *
 * @since 1.0.0
 */
function wordpressstartertheme_widgets_init() {
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'WordPressStarterTheme' ),
				'id'            => 'site-sidebar',
				'description'   => __( 'Add widgets here to appear in your sidebar.', 'WordPressStarterTheme' ),
				'before_title'  => '<p class="widget-title">',
				'after_title'   => '</p>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);
	}
}
add_action( 'widgets_init', 'wordpressstartertheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function wordpressstartertheme_scripts_styles() {
	// Register theme version in a variable.
	$theme_version = wp_get_theme()->get( 'Version' );
	// Register server path to the theme directory.
	$theme_directory = get_template_directory();
	// Register theme directory URI.
	$theme_uri = get_template_directory_uri();

	// Stylesheet - Register Styles.
	if ( file_exists( $theme_directory . 'style.min.css' ) ) {
		wp_register_style( 'wordpressstartertheme-style', $theme_uri . '/style.min.css', array(), $theme_version );
	} else {
		wp_register_style( 'wordpressstartertheme-style', $theme_uri . '/style.css', array(), $theme_version );
	}
	if ( file_exists( $theme_directory . 'print.min.css' ) ) {
		wp_register_style( 'wordpressstartertheme-style-print', $theme_uri . '/print.min.css', array(), $theme_version );
	} else {
		wp_register_style( 'wordpressstartertheme-style-print', $theme_uri . '/print.css', array(), $theme_version );
	}

	// Stylesheet - Enqueue Styles.
	wp_enqueue_style( 'wordpressstartertheme-style' );
	wp_enqueue_style( 'wordpressstartertheme-style-print' );

	// Javascript - Register Scripts.
	wp_register_script( 'html5', $theme_uri . '/assets/js/html5shiv/dist/html5shiv.min.js', array(), '3.7.3', true ); // Register the html5 shiv.

	// Javascript - Enqueue Scripts.
	wp_enqueue_script( 'html5' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpressstartertheme_scripts_styles' );

/**
 * Enqueue supplemental block editor styles.
 *
 * @since 1.0.0
 */
function wordpressstartertheme_block_editor_styles() {
	// Register theme version in a variable.
	$theme_version = wp_get_theme()->get( 'Version' );
	// Register server path to the theme directory.
	$theme_directory = get_template_directory();
	// Register theme directory URI.
	$theme_uri = get_template_directory_uri();

	// Register the editor styles.
	if ( file_exists( $theme_directory . 'assets/css/style-editor.min.css' ) ) {
		wp_register_style( 'wordpressstartertheme-block-editor-styles', $theme_uri . '/assets/css/style-editor.min.css', array(), $theme_version );
	} else {
		wp_register_style( 'wordpressstartertheme-block-editor-styles', $theme_uri . '/assets/css/style-editor.min.css', array(), $theme_version );
	}

	// Enqueue the editor styles.
	wp_enqueue_style( 'wordpressstartertheme-block-editor-styles' );
}
add_action( 'enqueue_block_editor_assets', 'wordpressstartertheme_block_editor_styles', 1, 1 );

/**
 * REQUIRED FILES
 * Include required files.
 */
// Additional features.
require get_parent_theme_file_path( '/inc/template-functions.php' );
