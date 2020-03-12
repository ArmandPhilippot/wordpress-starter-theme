<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

get_header(); ?>
<main id="main" class="site-main content-area">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/post/content', get_post_format() );
		}
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'WordPressStarterTheme' ),
				'next_text' => __( 'Next', 'WordPressStarterTheme' ),
			)
		);
	} else {
		get_template_part( 'template-parts/post/content', 'none' );
	}
	?>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();

