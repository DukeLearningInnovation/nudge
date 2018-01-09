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
	echo '<section id="primary category" class="content-area">';
		echo '<main id="main" class="site-main" role="main">';
			$category = $wp_query->get_queried_object();
			echo '<div class="row">';
				echo '<div class="col-sm-3">'; ?>
					<a href="<?php echo get_home_url() ?>" class="btn btn-round btn-info" role="button"> << View All Courses </a> <?php
				echo '</div>';
				echo '<div class="col-sm-6">';
					echo '<h1 align = "center">' . $category->name . '</h1>';
				echo '</div>';
			echo '</div>';
			$args = array(
				'posts_per_page'   => 5,
				'offset'           => 0,
				'category'         => $category->cat_ID,
				'category_name'    => '',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   => '',
				'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$children = get_posts( $args );
			if (count($children) > 0){
				echo '<div class="projects">';
				echo '<ul>';
				foreach ($children as $child){
					// use to see properties of children 
					// echo '<pre>' . print_r( $child, true ) . '</pre>';
					$date = explode(' ', $child->post_modified);
					echo '<a href="' . $child->guid . '">';
						echo '<li class="group img">';
							echo '<b>' . $child->post_title . '</b>';
							echo '<p>' . $date[0] . '</p>';
						echo '</li>';
					echo '</a>';
				}
				echo '</ul>';
				echo '</div>';	
			}
		echo '</main><!-- #main -->';
	echo '</section><!-- #primary -->';

get_footer();