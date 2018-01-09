<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header();

echo '<div id="content" class="site-content">';
	echo '<div class="container">';
	echo '<div class="row">';

	echo '<section id="primary single" class="content-area col-sm-12 col-md-12 col-lg-8">';
		echo '<main id="main" class="site-main" role="main">';

		global $wp;
		$category = get_the_category();
		$back_url = get_home_url() . '?cat=' . $category[0]->cat_ID;
		echo '<a href="' . $back_url . '" class="btn btn-round btn-info" role="button"> << Back to ' . $category[0]->name . ' Course Page </a>';

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		

		echo '</main><!-- #main -->';
	echo '</section><!-- #primary -->';
	
get_footer();