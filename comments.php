<?php
/**
 * The template for displaying the comments and comment form.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) {
		?>
		<ol class="comment-list">
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 100,
				'style'       => 'ol',
				'short_ping'  => true,
				'reply_text'  => __( 'Reply', 'WordPressStarterTheme' ),
			)
		);
		?>
	</ol>
		<?php
		the_comments_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'WordPressStarterTheme' ),
				'next_text' => __( 'Next', 'WordPressStarterTheme' ),
			)
		);
	}
	comment_form();
	?>
</div><!-- #comments -->
