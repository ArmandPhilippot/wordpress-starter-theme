<?php
/**
 * Template part for displaying top navigation.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'WordPressStarterTheme' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary-menu',
			'container'      => false,
			'menu_id'        => 'header-menu',
			'item_spacing'   => 'discard',
		)
	);
	?>
</nav><!-- #site-navigation -->
