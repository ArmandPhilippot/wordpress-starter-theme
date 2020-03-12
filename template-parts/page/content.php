<?php
/**
 * Template part for displaying pages content.
 *
 * @package WordPress-Starter-Theme
 * @since 1.0.0
 */

?>

<article itemtype="http://schema.org/Article" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="name">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article>
