<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();

	echo '<section id="primary index" class="content-area ">';
		echo '<main id="main" class="site-main" role="main">';

		echo '<h1 align="center"> All Courses </h1>';

		global $wp;
		$current_url = home_url(add_query_arg(array(),$wp->request));
		$categories = get_categories( array(
			'orderBy' => 'name',
			'order' => 'ASC'));
		// use to view the categories for the site
		// echo '<pre>' . print_r( $categories, true ) . '</pre>';

		if (count($categories) > 0){

			echo '<div class="projects">';
			echo '<ul>';

			foreach ($categories as $cat){

				if ($cat->cat_ID != 1){
					echo '<a href="' . $current_url.'?cat='.$cat->cat_ID . '">';
						echo '<li class="group img-circle">';
							echo '<b>' . $cat->name . '</b>';
						echo '</li>';
					echo '</a>';
				}

			}
			echo '</ul>';
			echo '</div>';
			
		}

		echo '</main><!-- #main -->';
	echo '</section><!-- #primary -->';

get_sidebar();
get_footer();
