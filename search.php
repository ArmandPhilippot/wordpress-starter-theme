<?php
/**
 * The template for displaying search pages.
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
			get_template_part( 'template-parts/post/content', 'excerpt' );
		}
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'WordPressStarterTheme' ),
				'next_text' => __( 'Next', 'WordPressStarterTheme' ),
			)
		);
	} else {
		?>
		<p>
			<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'WordPressStarterTheme' ); ?>
		</p>
		<?php
		get_search_form();
	}
	?>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();

