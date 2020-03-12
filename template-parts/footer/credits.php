<?php
/**
 * Template part for displaying footer credits.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

?>
<div class="footer-credits">
	<p class="footer-copyright">
		<span itemprop="creator"><?php bloginfo( 'name' ); ?></span>
		&copy;
		<span itemprop="copyrightYear">
			<?php
			echo esc_html(
				date_i18n(
					/* translators: Copyright date format, see https://secure.php.net/date */
					_x( 'Y', 'copyright date format', 'WordPressStarterTheme' )
				)
			);
			?>
		</span>
	</p><!-- .footer-copyright -->
</div><!-- .footer-credits -->
