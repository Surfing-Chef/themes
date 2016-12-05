<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

get_header(); ?>
	<?php the_field("front_page_video_header", 324); ?><!-- ACF - Header Video -->

	<div id="primary" class="fullwidth" data-page="<?php get_the_title($post->post_parent); ?>">
		<main id="main" class="site-main" role="main">
			<div class="latest-blog"></div>
			<div class="latest-pinterest"></div>
			<div class="latest-feeds"></div>
			<div class="contact"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	if (!get_theme_mod('hide_sidebar_single')) {
		get_sidebar();
	}
?>

<?php get_footer(); ?>
