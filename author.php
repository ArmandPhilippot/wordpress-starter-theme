<?php
/**
 * The template for displaying author pages.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

get_header(); ?>
<main id="main" class="site-main content-area">
	<?php
	if ( have_posts() ) {
		$wordpressstartertheme_author = get_user_by( 'slug', get_query_var( 'author_name' ) );
		?>
		<header class="page-header">
			<?php
			echo '<h1 class="page-title">' . esc_html( get_the_author_meta( 'nickname', $wordpressstartertheme_author->ID ) ) . '</h1>';
			if ( '' !== get_the_author_meta( 'description', $wordpressstartertheme_author->ID ) || '' !== get_the_author_meta( 'user_url', $wordpressstartertheme_author->ID ) ) {
				echo '<div class="taxonomy-description">';
				echo wp_kses_post( wpautop( get_the_author_meta( 'description', $wordpressstartertheme_author->ID ) ) );
				if ( '' !== get_the_author_meta( 'user_url', $minimalist_author->ID ) ) {
					echo '<p class="author-website"><span class="fields">' . esc_html__( 'Website:', 'WordPressStarterTheme' ) . '</span> <a href="' . esc_url( get_the_author_meta( 'user_url', $wordpressstartertheme_author->ID ) ) . '">' . esc_url( get_the_author_meta( 'user_url', $wordpressstartertheme_author->ID ) ) . '</a></p>';
				}
				echo '</div>';
			}
			?>
		</header><!-- .page-header -->
		<?php
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

