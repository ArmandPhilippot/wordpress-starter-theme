<?php
/**
 * Header file.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'WordPressStarterTheme' ); ?></a>
		<header id="masthead" class="site-header">
			<?php
			get_template_part( 'template-parts/header/site', 'branding' );
			if ( has_nav_menu( 'primary-menu' ) ) {
				get_template_part( 'template-parts/header/navigation', 'top' );
			} else {
				wp_list_pages(
					array(
						'match_menu_classes'  => true,
						'show_sub_menu_icons' => true,
						'title_li'            => false,
					)
				);
			}
			?>
		</header><!-- .site-header -->
