<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>


					<?php
						// Start the loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );
							// End the loop.
							endwhile;
							// Previous/next page navigation.
						blaze_paging_nav();

						// If no content, include the "No posts found" template.
					?>

			<?php else :
					get_template_part( 'content', 'none' );
				endif;
			?>


<?php get_footer(); ?>
