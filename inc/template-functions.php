<?php
/**
 * Additional features for this theme.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

/**
 * Checks to see if we're on the front page or not.
 */
function wordpressstartertheme_is_frontpage() {
	return is_front_page() && ! is_home();
}
