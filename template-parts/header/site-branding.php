<?php
/**
 * Template part for displaying site branding.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

if ( has_custom_logo() ) { ?>
	<div class="site-logo">
		<?php the_custom_logo(); ?>
	</div><!-- .site-logo -->
	<?php
}
?>
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<p class="site-description"><?php get_bloginfo( 'description' ); ?></p>
